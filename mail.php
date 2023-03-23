<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$docname= $_POST['docname'];
$departments= $_POST['departments'];
$date= $_POST['date'];

$to = "souravinbox.sd@gmail.com";
$subject = "Booking from CureLook";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone No. =" . $phone . "\r\n Address =" . $address . "\r\n Doctor's Name =" . $docname . "\r\n Departments =" . $departments . "\r\n Date of Booking =" . $date;
$headers = "From: bookfrom@curelook.com" . "\r\n" .
"CC: jordonhardy6020@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:confirm_booking.php");
?>
