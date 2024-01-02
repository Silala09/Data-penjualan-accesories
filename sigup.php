<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Login and Registration</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(135deg, #1a237e, #1565c0);
            color: #fff;
        }

        .container {
            display: flex;
            justify-content: space-between;
            width: 800px;
            margin: 20px;
        }

        .login-container,
        .signup-container {
            background: rgba(26, 35, 126, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            width: 45%;
            text-align: center;
        }

        .login-container h2,
        .signup-container h2 {
            margin-bottom: 30px;
            color: #fff;
        }

        .login-form input,
        .signup-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            transition: background-color 0.3s;
        }

        .login-form input:focus,
        .signup-form input:focus {
            background-color: rgba(255, 255, 255, 0.4);
        }

        .login-form button,
        .signup-form button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #2196f3;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-form button:hover,
        .signup-form button:hover {
            background-color: #1565c0;
        }

        .signup-link {
            color: #fff;
            text-decoration: none;
            display: block;
            margin-top: 15px;
        }

    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form class="login-form" action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a class="signup-link" href="login.php">Don't have an account? Sign up here</a>
    </div>
</body>

</html>
