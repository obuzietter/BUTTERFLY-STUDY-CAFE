<!DOCTYPE html>
<html lang="en">

<head>
    <title>Butterfly Study Cafe</title>
    
    <!-- <link rel="stylesheet" href="./css/login.css">
    <link href="./css/navigation.css" rel="stylesheet"> -->
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Butterfly</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACTS</a></li>
                </ul>
            </div>

            <!-- <div class="search">
                <input class="srch" tpye="search" name="" placeholder="Type To Text">
                <a href="#"><button class="btn">Search</button></a>
            </div> -->

        </div>
        <div class="content">
            <div class="desc">
                <h1>Butterfly Study Cafe</h1>
                <p class="par">Are due dates worrying you? Incomplete research? Having a troublesome job/ academic week
                    and<br> you need to a place to unwind?<br>
                    Well, the Butterfly Study Cafe is the place to stay in and do all your tasks and serves you
                    drinks<br> and snacks as you study and do your research.<br>
                    We offer, study spaces, laptop/computer spaces, group spaces and a resting area. Additionally,<br>
                    we have offers for students regardless of their educational level and thus guarantee you a week<br>
                    of academic excellence!<br>
                    Join us today and book your space by filling our booking form.
                </p>

            </div>
            <div class="form">
                <form action="loginCheck.php" id="login-form" method="POST">

                    <h2>Login Here</h2>
                    <input name="email" type="text" id="email" placeholder="Your Email">
                    <input type="password" name="password" placeholder="Your Password">
                    <button class="btnn" type="submit" name="login-submit">Login</button>
                    <p class="link">Don't have an account?<br>
                        <a href="#"><a href="signup.php">Sign up</a></a> here
                    </p>
                    <p class="liw">Log in with</p>

                    <div class="social-media">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>