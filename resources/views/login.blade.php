<!DOCTYPE html>
<html lang="en">

<head>
    <title>Butterfly Study Cafe</title>

    <link rel="stylesheet" href="{{ url('/css/login.css') }}">
    <link href="{{ url('/css/navigation.css') }}" rel="stylesheet">
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

            <div class="form">
                <form action="loginCheck.php" id="login-form" method="POST">

                    <h2>Login Here</h2>

                    
                    
                    <input name="email" type="text" id="email" placeholder="Your Email">
                    <input type="password" name="password" placeholder="Your Password">
                    <button class="btnn" type="submit" name="login-submit">Login</button>
                    <span>Don't have an account? <a href="{{ '/signup' }}">SIgn Up</a></span>


                </form>

            </div>
        </div>
    </div>

</body>

</html>
