<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}

$to = "info.admissionspark@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $subject = "Form submission";
    $message = $name . " wrote the following:" . "\nEmail: $from\n Mobile: $mobile  \n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

header('Location: index.html');

?>
