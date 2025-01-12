<?php 
if(isset($_POST['submit'])){
    $to = "Letstalk@skssynergies.com"; // this is your Email address
    $fullname = $_POST['fullname'];
    $phone=$_POST['phone'];
    $bill=$_POST['bill'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
    $email = $_POST['email'];
    $subject = "Residential Free Electricity Enquiry";
    
    $message ="Full Name : ".$fullname . "\n Phone Number :  " . $phone . " \n". "Electricity Bill :  " . $bill . " \n". "Pincode :  " . $pincode . " \n"
    . "City :  " . $city .  "\n Email :  " . $email . " \n" ;


    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);

    header('Location:freeb.html');
//    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
