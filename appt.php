<?php
include 'dbconfig.php';

$phone = $_POST['phone'];
$name = $_POST['name'];
$date = $_POST['date'];
$doctor = $_POST['doctor'];

$sql = "INSERT INTO Appointment (PHONE, NAME, APPT_DATE, DOCTOR_NAME)
        VALUES ('$phone', '$name', '$date', '$doctor')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment made successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
