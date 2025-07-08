<?php
include 'dbconfig.php';

$phone = $_POST['phone'];
$date = $_POST['date'];

$sql = "DELETE FROM Appointment WHERE PHONE='$phone' AND APPT_DATE='$date'";

if ($conn->query($sql) === TRUE) {
    echo "Appointment cancelled successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
