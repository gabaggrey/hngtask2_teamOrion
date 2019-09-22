
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>team_onyx Login Page</title>
    <link rel="stylesheet" href="../main_css/styles.css">
</head>
<body>

    <div class="container">

        <header class="welcome">
            <h1>Welcome Back!</h1>
            <p>To Keep connected with us please login with your personal info</p>
            <br>
            <button type="button">SIGN IN</button>
        </header>
        <div class="create_account">
            <div class="icons">
    
            </div>
            <p>or sign in with email</p>

            <form action="login.php" method="POST">
            <label for="user_email">Email: </label>
            <input type="email" name="user_email" id="user_email" placeholder="username">
            <br>
    
            <label for="user_password">Password: </label>
            <input type="password" name="user_password" id="user_password" placeholder="*******">
            <br>
    
            <a href="#">Forgot your password?</a>
            <br>
    
            <input type="submit" value="SIGN IN">
           

            </form>
        </div>
    </div>
    
</body>
</html>