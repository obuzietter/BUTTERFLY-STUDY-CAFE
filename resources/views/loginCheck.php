<?php
require('connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $sql = "SELECT * from users where email like '$email'";
    // $sqlPass = "SELECT  password from users where email like '$email'";



    if ($result = mysqli_query($conn, $sql)) {
        $row = mysqli_fetch_array($result);

        $rowcount = mysqli_num_rows($result);

        if ($rowcount > 0) {
            if ($row['password'] == $pass && $row['email'] == $email) {
                header("Location: home.php");
                // $gpwd = $row['password'];
                // $gemail = $row['email'];
                // echo $gpwd;
                // echo "<br>";
                // echo $gemail;
                // echo "<br>";
                // echo $rowcount;
            } else {
                echo "<script>
        alert('INVALID CREDENTIALS! TRY AGAIN!')
        </script>";

            }
        } else {
            echo "<script>
    alert('USER DOES NOT EXIST! SIGN UP.')
    </script>";
        }
    }
}