<?php
$name = $_POST['name'];
$dob = $_POST['dob'];
$aadhar = $_POST['aadhar'];
$email = $_POST['email'];
$number = $_POST['number'];
$paytype = $_POST['paytype'];
$payment = $_POST['payment'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'bookings');
if ($conn->connect_error)   {
    echo "error";
} else {
    $stmt = $conn->prepare("INSERT INTO booking (name, dob, aadhar, email, number, paytype, payment) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiss", $name, $dob, $aadhar, $email, $number, $paytype, $payment);
    $stmt->execute();
    echo "Booking successful";
    $stmt->close();
    $conn->close();
}
?>
