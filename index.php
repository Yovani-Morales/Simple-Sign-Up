<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Fontawesome (icons) -->
    <script src="https://kit.fontawesome.com/270e592f17.js" crossorigin="anonymous"></script>
    <!-- Style -->
    <link rel="stylesheet" href="style/style.css">
    <title>Simple Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="buttons">
                <div class="icons"><i class="fa-solid fa-arrow-left"></i></div>
                <div class="icons"><i class="fa-solid fa-xmark"></i></div>
            </div>

            <div class="titles">
                <h1 class="title">Sign up</h1>
                <p class="p">Already have an account? <a href="#" class="link">Sign in</a></p>
            </div>

            <div class="container-input">
                <form class="form">
                    <input type="text" class="input" placeholder="Username" id="input-username">
                    <input type="password" class="input" placeholder="Password" id="input-password">
                    <input type="button" class="input-btn" value="CREATE ACCOUNT" id="btn-sign-up">
                </form>

                <div class="message" id="message"></div>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>

</body>
</html>