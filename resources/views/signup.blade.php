<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/signup.css" />

</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Butterfly</h2>
            </div>
        </div>
        <div class="content">
            <h1>Sign Up</h1>
            <form class="form" action="{{route('register-user')}}" method="POST" id="form">
                @csrf
                @if (Session::has('success'))
                    <div class="success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('error'))
                    <div class="error">{{ Session::get('error') }}</div>
                @endif
                <input type="text" id="fist_name" name="first_name" placeholder="First Name" />
                <input type="text" id="last_name" name="last_name" placeholder="Last Name" />
                <input type="text" id="email" name="email" placeholder="Your Email" />
                <input type="password" id="pwd" name="password" placeholder="Your Password" />
                <input type="password" id="pwd-c" name="password-confirm" placeholder="Confirm Password" />
                <button type="submit" class="btnn" id="btn" name="signup-submit">SIGN UP</button>

                <span>Already have an account? <a href="{{ '/login' }}">Login</a></span>

            </form>
        </div>
    </div>
    
   
</body>

</html>
