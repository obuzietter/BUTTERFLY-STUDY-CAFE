<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>BOOKING</title>
    <link rel="stylesheet" href="{{url('css/booking.css')}}">
    <link rel="stylesheet" href="{{url('css/navigation.css')}}">

</head>

<body>

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
    <div class="container">
        <div class="container-time" id="container-time">
            <h2 class="heading">TIME OPEN</h2>
            <h3 class="heading-days">Monday-Friday</h3>
            <p>7am - 11am (Morning Session)</p>
            <p>11am - 2pm (Morning 2 )</p>
            <p>2pm - 6pm (Afternoon Session)</p>
            <p>7pm - 9pm (Night Session)</p>

            <h3 class="heading-days">Sarturday and Sunday</h3>
            <p>9am - 1pm (Morning Session)</p>
            <p>1pm - 6pm (Afternoon Session)</p>
            <hr>
            <h4 class="heading-phone">Call us: +2547 43 161 628 </h4>
            <button id="bk-now-btn">BOOK NOW</button>

        </div>

        <div class="container-form" id="container-form">
            <form action="booking_rec_insert.php" method="post">
                <h2 class="section-head">BOOK A SPACE</h2>

                <div class="form-field">
                    <label for="first-name">First Name</label>
                    <input type="text" name="first-name" id="first-name">
                </div>
                <div class="form-field">
                    <label for="last-name">Last Name</label>
                    <input type="text" name="last-name" id="last-name">
                </div>
                <div class="form-field">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="form-field">
                    <label for="phone-number">Phone</label>
                    <input type="tel" name="phone-number" id="phone-number">
                </div>
                <div class="form-field">
                    <label for="booking-date">Date</label>
                    <input type="date" name="booking-date">
                </div>
                <div class="form-field">
                    <label for="space-type">Space Type</label>
                    <select id="space-type" name="space-type">
                        <option value="" hidden></option>
                        <option value="study-space">Study Space</option>
                        <option value="laptop-space">Laptop Space</option>
                        <option value="group-space">Group Space</option>
                        <option value="resting-area">Resting Area</option>
                    </select>
                </div>
                <div class="form-field">
                    <label for="time-slot">Time Slot</label>
                    <select id="time-slot" name="time-slot">
                        <option value="" hidden></option>
                        <option value="morning">7am - 11am (Morning Session)</option>
                        <option value="mid-morning">11am - 1pm (Mid - Morning)</option>
                        <option value="afternoon">2pm - 6pm (Afternoon Session)</option>
                        <option value="evening">7pm - 9pm (Evening Session)</option>
                    </select>
                </div>

                <div class="form-field">
                    <label for="pricing">Pricing</label>
                    <input type="number" name="pricing" id="pricing" readonly>
                </div>
                <div class="form-field">
                    <button class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
<script src="{{url('js/booking.js')}}"></script>
</body>

</html>