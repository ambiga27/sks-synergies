<?php 
if(isset($_POST['submit'])){
    $to = "Letstalk@skssynergies.com"; // this is your Email address
    $fullname = $_POST['name'];
    $companyname = $_POST['companyname'];
    $phone=$_POST['companyphone'];
    $bill=$_POST['companybill'];
    $pincode=$_POST['companypincode'];
    $city=$_POST['companycity'];
    $subject = "Commercial Electricity Enquiry";
    
    $message ="Name : ".$fullname . "\n Company Name :  " . $companyname ."\n Phone Number :  " . $phone . " \n". "Electricity Bill :  " . $bill . " \n". "Pincode :  " . $pincode . " \n"
    . "City :  " . $city . " \n" ;


    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);

    header('Location:freeb.html');
//    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
