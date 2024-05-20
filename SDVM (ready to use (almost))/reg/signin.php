<!DOCTYPE html>
<html lang="en">
<head>
    <title>SDVM - Sign In</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/iosicons.js"></script>
    <link rel="stylesheet" href="stylesignin.css">
    <link rel="website icon" type="png" href="img/logo.png">
</head>
<body>
    <form method="post" action="login.php">
    <div class="container">
        <div class="form-box">
            <div class="form-value"> 
                    <h2>Sign In</h2>
                    <div class="inputbox">
                        <ion-icon name="at-outline"></ion-icon>
                        <input type="text" name="email" id="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password" required>
                        <label for="password">Password</label>
                    </div>
                    <button type="submit" id="loginButton">Sign In</button>
                    <div class="bottom">
                        <div class="left">
                            <input type="checkbox" id="check">
                            <label for="check">Remember Me</label>
                        </div>
                        <div class="right">
                            <label><a href="main.php">Have no account?</a></label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="notification" id="notification" style="display: none;">
        <div class="notification_body">
            <img
                src="img/check-circle.svg"
                alt="Success"
                class="notification_icon"
            >
            You have been successfully logged in!
        </div>
        <div class="notification_progress"></div>
    </div>

    <script src="notification_login.js"></script>
    <script src="animation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/animejs"></script>
</form>
</body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="notification_login.css">
</head>
</html>
