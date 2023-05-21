<!DOCTYPE html>
<html>

<head>
    <title> Our Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4c81b2e71b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/navigation.css">

</head>

<body>
    <!--navigation-->
    <div class="my-body">

        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Butterfly</h2>
            </div>
            <div class="menu">
                <ul>
                <li><a href="{{url('/')}}">HOME</a></li>
                <li><a href="{{url('services')}}">SERVICES</a></li>
                <li><a href="{{url('booking')}}">BOOKING</a></li>
                <li><a href="{{url('about')}}">ABOUT</a></li>
                <li><a href="{{url('contact')}}">CONTACT</a></li>
                </ul>
            </div>
        </div>



        <!--Banner was a stress. Look into that later-->
        <div class="main-content">
            <div class="title">
                <h1>Hey There!</h1>
            </div>

            <div class="intro">
                <p>
                    Welcome to the Butterfly Study Cafe!
                    We are so glad you consider our cafe as your go to space for productivity either
                    in your studies or work. Before you look at what we offer, let's first give you a
                    quick guide to the cafe.
                </p>
                <br>

                <div class="container">
                    <div class="image">
                        <img src="/images/reception.jpg">
                    </div>
                    <div class="text">
                        <h3>Reception</h3>
                        <p>
                            The cafe's entrance leads to the reception area, where one is given a user card, which
                            is used to show proof of payment and keep tabs of the expenses met during ones time at
                            the cafe; such as extended study hours and snacks/drinks bought in the resting area.
                        </p>
                    </div>
                </div>

                <br>

                <div class="container">
                    <div class="image">
                        <img src="./images/lockerarea.jfif">
                    </div>
                    <div class="text">
                        <h3>Locker Area</h3>
                        <p>
                            We have a locker area where customers can store their belongings in an indivually allocated
                            locker. This allows the customer to move to their spaces only with the items they will
                            require.
                        </p>
                    </div>

                </div>

                <hr>

                <div class="title">
                    <h1>Our Services</h1>
                </div>
                <div class="services">
                    <div class="card">
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h2>Study Space</h2>
                        <p>This space offers a quiet environment for deep focus on school/work,<br>
                            free from the noise of clicking of keyboards and group discussions.</p>
                        <a href="studyspace" class="button">Learn More</a>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h2>Laptop Space</h2>
                        <p>For customers who would wish to use their own personal laptops or computers
                            offered by the cafe to catch up with work or school projects.</p>
                        <a href="laptopspace" class="button">Learn More</a>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h2>Group Space</h2>
                        <p>This space has designated rooms available for group discussions, small size
                            meetings and work that requires teamwork with equipment.</p>
                        <a href="groupspace" class="button">Learn More</a>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <i class="fas fa-coffee"></i>
                        </div>
                        <h2>Resting Area</h2>
                        <p>A quiet space where customers get to unwind, relax as they order from our wide
                            selection of drinks and snacks. Assistance is also offered here.</p>
                        <a href="restingarea" class="button">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p>Copyright &copy; 2020, Butterfly Study Cafe</p>
            <p>XV</p>
        </footer>

</body>

</html>