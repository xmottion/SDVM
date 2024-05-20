<!DOCTYPE html>
<html lang="en">
<head>
    <title>SDVM - Sign Up</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/iosicons.js"></script>
    <link rel="stylesheet" href=style.css>
    <link rel="website icon" type="png" href="img/webicon.png">
    <script src=’https://www.google.com/recaptcha/api.js’></script>
</head>
<body>
    <form method="post" action="register.php" enctype="multipart/form-data">
    <div class="container">
        <a class="logo" href="#0">
            <img src="img/logo.png" alt="SDVM">
          </a>
          <span>SDVM</span>
        <div class="form-box">
            <div class="form-value"> 
                    <h2>Registration</h2>
                    <div class="inputbox">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input type="fullname" name="fullname" id="fullname" required>
                        <label for="fullname">Full name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <input type="date" name="birthdate" id="birthdate" required>
                        <label for="birthdate"></label>
                    </div>
                    <div class="inputboxforfile">
                        <label for="photo" class="custom-file-upload">
                            <ion-icon name="images-outline"></ion-icon>
                            Choose your photo
                        </label>
                        <input type="file" id="photo" name="photo" required>
                    </div>
                    <div class="inputboxselect">
                        <ion-icon name="male-female-outline"></ion-icon>
                        <select id="gender" name="gender" required>
                            <option value="gender">Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="notgonnasay">Dont want to say</option>
                        </select>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="earth-outline"></ion-icon>
                        <input type="text" name="country" id="country" required>
                        <label for="country">Country</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="paper-plane-outline"></ion-icon>
                        <input type="text" name="region" id="region" required>
                        <label for="region">Region</label>
                    </div>
                    <div class="inputboxselect">
                        <ion-icon name="business-outline"></ion-icon>
                        <select id="city" name="city" required>
                        <option value="City">City</option>
                        <option value="Kyiv">Kyiv</option>
                        <option value="Lviv">Lviv</option>
                        <option value="Kharkiv">Kharkiv</option>
                        <option value="Odesa">Odesa</option>
                        <option value="Chernigiv">Chernigiv</option>
                        <option value="Sumy">Sumy</option>
                        <option value="Cherkasy">Cherkasy</option>
                        <option value="Poltava">Poltava</option>
                        <option value="Lyzk">Lyz'k</option>
                        <option value="Uzhgorod">Uzhgorod</option>
                        <option value="IvanoFrankivsk">Ivano-Frankivsk</option>
                        <option value="Ternopil">Ternopil</option>
                        <option value="Chernivzi">Chernivzi</option>
                        <option value="Khmelnytskiy">Khmelnytskiy</option>
                        <option value="Rivne">Rivne</option>
                        <option value="Zhytomyr">Zhytomyr</option>
                        <option value="Vinnytsa">Vinnytsa</option>
                        <option value="Kropyvnitskiy">Kropyvnitskiy</option>
                        <option value="Mykolaiv">Mykolaiv</option>
                        <option value="Herson">Herson</option>
                        <option value="Zaporizhya">Zaporizhya</option>
                        <option value="Donetsk">Donetsk</option>
                        <option value="Luhansk">Luhansk</option>
                        <option value="Simpheropol">Simpheropol</option>
                        </select>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="call-outline"></ion-icon>
                        <input type="text" name="phonenum" id="phonenum" required>
                        <label for="phonenum">Phone number</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="at-outline"></ion-icon>
                        <input type="tel" name="email" id="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="body-outline"></ion-icon>
                        <input type="text" name="aboutme" id="about me" required>
                        <label for="aboutme">About you</label>
                    </div>
                    <button type="submit" id="loginButton">Sign Up</button>
                    <div class="bottom">
                        <div class="left">
                            <input type="checkbox" id="check" required>
                            <label for="check">User Agreements</label>
                        </div>
                        <div class="right">
                            <label><a href="signin.php">Have account?</a></label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    <div class="notification" id="notification" style="display: none;">
        <div class="notification_body">
            <img
                src="img/check-circle.svg"
                alt="Success"
                class="notification_icon"
            >
            You have been successfully signed up!
        </div>
        <div class="notification_progress"></div>
    </div>

    <script src="functionality.js"></script>
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
    <link rel="stylesheet" href="notification.css">
</head>
</html>