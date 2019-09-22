<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>team_onyx Sign-up Page</title>
    <link rel="stylesheet" href="../main_css/styles.css">
</head>
<body>

    <div class="container">
        <header class="welcome">
            <h1>Hello, Welcome to Onyx!</h1>
            <p>Enter your personal details and start your journey with us</p>
            <br>
            <button type="button">SIGN UP</button>
        </header>
    
        <div class="create_account">
            <h1>Create Account</h1>
            <div class="icons">
    
            </div>
            
            <form action="insert.php" method="POST">

            <label for="full_name">Full name: </label>
            <input type="text" name="full_name" id="full_name" required placeholder="Full name please ">
            <br>

            <label for="user_name">Username: </label>
            <input type="text" name="user_name" id="user_name" required placeholder="username here  ">
            <br>

            <label for="user_password">Password: </label>
            <input type="text" name="user_password" id="user_password" required>
            <br>
    
            <label for="user_email">Email: </label>
            <input type="email" name="user_email" id="user_email" required placeholder="username...">
            <br>

            <label for="user_gender">Gender: </label>
            <input type="radio" name="user_gender" value="male">Male
            <input type="radio" name="user_gender" value="female">Female
            <br>


            <label for="states">Gender: </label>

                    <select name="states" id="states" required>
                        <option selected hidden value="">Select your state</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Abuja">Abuja</option>
                        <option value="Port-harcourt">Port-harcourt</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Edo">Edo</option>
                    </select>

            <input type="submit" value="Submit">
        </form>
        </div>

    </div>
    
</body>
</html>