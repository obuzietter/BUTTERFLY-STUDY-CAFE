<?php

include('connect.php');

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$phoneNo = $_POST['phone-number'];
$bookDate = $_POST['booking-date'];
$spaceType = $_POST['space-type'];
$timeSlot = $_POST['time-slot'];
$pricing = $_POST['pricing'];
    
   

    if(empty($firstName)||empty($lastName)||empty($email)||empty($phoneNo)||empty($bookDate)||empty($spaceType)||empty($timeSlot)||empty($pricing)){
        echo "
        <script>
        alert('EMPTY FIELDS');
        </script>
        ";
    }else{
        $stmt = $conn->prepare("insert into bookings(first_name, last_name, email, phone_number, date, space_type, time_slot, pricing) values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssi", $firstName, $lastName, $email, $phoneNo, $bookDate, $spaceType, $timeSlot, $pricing);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        
        echo "<script> alert('Booking successful!!!') </script>";
        header('Location: booking.php?initialbooking===success');
        }
?>
