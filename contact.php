<?php 
if(isset($_POST['submit'])){
    $to = "Letstalk@skssynergies.com"; // this is your Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $housename = $_POST['housename']; // this is the sender's Email address
    $city = $_POST['city']; // this is the sender's Email address
    $subject = "Download free handbook";
    
    $message ="Name : ".$name . "\n phone :  " . $phone . " \n House Name : " .$housename."\n City : ".$city ;


    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    
    header('Location:index.html');
//    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
