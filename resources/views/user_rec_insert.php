<?php

if (isset($_POST['signup-submit'])) {
    require 'connect.php';

    $firstName = $_POST['user-fname'];
    $lastName = $_POST['user-lname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $passwordConfirm = $_POST['password-confirm'];
//empty fields check
    if (empty($firstName) || empty($lastName) || empty($email) || empty($pass)) {
        #echo '<script>alert("All the fields are required!")</script>';
        #header("Location: signup.php?error=emptyfields&user-fname=" . $firstName . "&user-lname=" . $lastName . "&email=" . $email);
        // echo '<script> alert("All fields are required") </script>';
        exit('<script> alert("All fields are required") </script>');
        // header("Location: signup.php?Empty&&fields");


    } //email validation
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) /*&& !preg_match("/^[a-zA-Z0-9]*$/", $uname)*/) {
        header("Location: signup.php?error=invalidemail&firstname=" . $firstName . "&lastname=" . $lastName);
        exit();
    } else if ($pass !== $passwordConfirm) {
        #header("Location: signup.php?error=passwordsdonotmatch" . "&user-fname=" . $firstName . "&user-lname=" . $lastName . "&email=" . $email);
        // echo ' Passwords do not match!!';
        exit('<script>alert("Passwords do not natch")</script>');
    } else {
        //check if email is already in the database
        $sql = "SELECT  email from users where email like '$email'";

        if ($result = mysqli_query($conn, $sql)) {
            $rowcount = mysqli_num_rows($result);
            if ($rowcount > 0) {
                echo '<script>
                alert("Sorry!! Email already exists in your database!");
                </script>
                ';

            } else {
                // if all the other conditions are passed then the data is inserted into the databse
                $sql = "INSERT INTO users(first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: signup.php?=mysqlprepareerror");
                    exit();
                } else {
                    //encrypting your password
                    //$encPwd = password_hash($pass, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $pass);
                    mysqli_stmt_execute($stmt);
                    #mysqli_stmt_store_result($stmt);

        
                    header("Location: home.php?registration==success");
                    echo '<script>
                alert("SIGNUP SUCCESS");
                </script>
                ';
                    exit();


                }
            }
        }
        #mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }

}



/*else {
$stmt = $conn->prepare("insert into users(first_name, last_name, email, password) values(?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstName, $lastName, $email, $password);
$stmt->execute();
$stmt->close();
$conn->close();
echo "Registration successful!!!";
$sql = "SELECT  email from users where email like ' $email'";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
header("Location: signup.php?=mysqlprepareerror");
exit();
} else {
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
#$resultCheck = mysqli_stmt_num_rows($stmt);
if (mysqli_stmt_num_rows($stmt) > 0) {
header("Location: signup.php?error=sqlerror.emailalreadyexists");
exit();
}*/

#die($sql);

/* if (!mysqli_stmt_prepare($stmt, $sql)) {
header("Location: signup.php?=mysqlprepareerror");
exit();
} else {
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
#$resultCheck = mysqli_stmt_num_rows($stmt);
if (mysqli_stmt_num_rows($stmt) > 0) {
header("Location: signup.php?error=sqlerror.emailalreadyexists");
exit();
} */


?>