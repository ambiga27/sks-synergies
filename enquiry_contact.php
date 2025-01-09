<?php 
if(isset($_POST['submit'])){
    $to = "Letstalk@skssynergies.com"; // this is your Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message']; // this is the sender's Email address
    $subject = "Contact Us Enquiry";
    
    $message ="Name : ".$name . "\n Email :  " . $email . " \n Message : " .$message."\n" ;


    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);

    header('Location:contact.html');
//    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
