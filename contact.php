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

     // The location of the PDF file
    // on the server
    $filename = "SKS Synergies.pdf";
    
    // Header content type
    header("Content-type: application/pdf");
    header("Content-Length: " . filesize($filename));
    
    // Send the file to the browser.
    readfile($filename);
    
    header('Location:index.html');
//    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
