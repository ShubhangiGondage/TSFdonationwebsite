

<?php 
// $name="";
if (isset($_POST['submit'])) {
    $mailto = "tsfdonation@gmail.com";
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
   

    $email_subject = 'New form submission';

    $email_body = "User Name: $name.\n" . "User Email: $visitor_email.\n" .  "User message:$message .\n";

    $headers = "From: $visitor_email";
    $headers2 = "From: $mailto";

    
//$to = 'shubhangigondage680@gmail.com';


    $result=mail($mailto, $email_subject, $email_body,$headers );
    $result2=mail($visitor_email,$email_subject, $email_body,$headers2 );
    
    header("Location: index.php");
    
}
else
{
    echo"error";

}
?>


