<?php
    $fullname = $_POST['full_name'];
    $username = $_POST['user_name'];
    $password = $_POST['user_password'];
    $email = $_POST['user_email'];
    $gender = $_POST['user_gender'];
    $states = $_POST['states'];


    if(!empty($fullname) || !empty($username) || !empty($password ) || !empty($email) || !empty($gender) || !empty($states)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "mydb";

        //create a connection

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT user_email From mytable1 Where user_email = ? Limit 1";
        $INSERT = "INSERT Into mytable1 (full_name, user_name, user_password, user_email, user_gender, states) values (?, ?, ?, ?, ?, ?)";

        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt ->bind_param("s", $email);
        $stmt ->execute();
        $stmt ->bind_result($email);
        $stmt ->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0){
            $stmt ->close();
            $stmt = $conn->prepare($INSERT);
            $stmt ->bind_param("ssssii", $fullname, $username, $password, $email, $gender, $states);
            $stmt ->execute();
            echo "New record inserted successfully";

        } else{
            echo "Someone already registered using this email";
        }
        $stmt ->close();
        $conn ->close();

    }

    } else {
        echo "all fields are required";
        die();
    }

?>