<?php
   

    if(isset($_POST['submit'])){
        if(empty($_POST['user_email']) || empty($_POST['user_password'])){
            $error = "Email address or Password is invalid";
        }else{
            //define $userEmail and $userPassword
            $userEmail = $_POST['user_email'];
            $userPassword = $_POST['user_password'];

            //mysqli_connect() function opens a new connection to the MySQL server
            $conn = mysqli_connect("localhost", "root", "", "mydb");

            //SQL query to fetch information of retired users and finds user match
            $query = "SELECT user_email, user_password from mytable1 where user_email =? AND user_password =? LIMIT 1";

            //To protect MySQL injection for security purposes
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $userEmail, $userPassword);
            $stmt->execute();
            $stmt->bind_result($userEmail, $userPassword);
            $stmt->store_result();

            if($stmt->fetch()) //fetching contents of the row
            {
                $_SESSION['login_user'] = $userEmail; //initializing session
                header("location: profile.php"); //redirecting to profile page
            }else{
                $error ="Email or Password is invalid";
            }
            mysqli_close($conn); //closing connection
            

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Welcome to the login page</h1>
</body>
</html>