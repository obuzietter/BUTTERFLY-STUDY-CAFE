<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
</head>
<body>
  <h2>Registration Form</h2>
  <form action="/testform" method="post">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname" required><br><br>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>
