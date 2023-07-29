<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
        }

        .login-section {
            padding: 30px;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .login-section h1 {
            margin-bottom: 20px;
        }

        .input-field {
            margin-bottom: 15px;
            width: 100%;
            max-width: 300px;
        }

        .input-field label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: left;
        }

        .input-field input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-btn {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .login-options {
            margin-top: 20px;
        }

        .login-option-btn {
            background-color: white;
            height: 50px;
            color: #000;
            display: block;
            width: 600px;
            margin-top: 20px;
            border: 2px solid #000;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 15px;
            cursor: pointer;
            margin-right: 10px;
        }

        .login-option-btn:hover {
            background-color: #b3b3b3;
        }

        .image-section {
            flex: 1;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .image-section img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 8px;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-section">
            <h1>Create an account</h1>
            <form>
                <div class="login-options">
                    <button class="login-option-btn">Continue with Google</button>
                    <button class="login-option-btn">Continue with Facebook</button>
                </div>
                <div class="input-field">
                    <label for="email">Email:</label>
                    <input type="email" id="email" required>
                </div>
                <div class="input-field">
                    <label for="password">Password:</label>
                    <input type="password" id="password" required>
                </div>
                <button class="login-btn">Login</button>
            </form>
        </div>
        <div class="image-section">
            <img src="/assets/pages/Home/bannerTesting.png" alt="Rounded Image">
        </div>
    </div>
</body>

</html>
