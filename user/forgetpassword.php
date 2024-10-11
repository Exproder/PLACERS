<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-image: url(../image/kjc5.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .login-box h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group label {
            margin-bottom: 5px;
        }

        .form-group .input-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center; /* Ensure vertical alignment */
        }

        .form-group .input-group .input-group-text {
            padding: 0.375rem 0.75rem; /* Adjust padding to align with input field */
            font-size: 1.2rem; /* Adjust icon size */
            height: calc(2.25rem + 2px); /* Match the height of the input field */
        }

        .form-control {
            padding: 0.375rem 0.75rem; /* Adjust padding to match the icon container */
            height: calc(2.25rem + 2px); /* Ensure the height matches */
        }

        .btn-primary {
            width: 100%;
        }

        .error-message {
            text-align: center;
            color: red;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
            color: #333;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="login-box">
                    <h2>Forgot Password</h2>
                    <hr>
                    <form action="mail.php" method="post" id="login-form">
                        <div class="form-group">
                            <label for="username">Register No</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                </div>
                                <input type="text" class="form-control" id="username" name="dno" placeholder="Enter your Register No." required>
                            </div>
                        </div>
                        <button type="submit" name="send" class="btn btn-primary">Submit</button>
                        <div class="error-message" id="error-message"></div>
                        <div class="register-link"><a href="../home.php">&lt;-- Back To Home</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
