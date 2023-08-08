<?php
$name = $_POST["name"];
$email = $_POST["email"];
$mobileno = $_POST["mobileno"];
$degree = $_POST["degree"];
 
$EmailTo = "pradeepbkris@gmail.com";
$email_Subject = "Fabevy Webinar";
 
// prepare email body text
$Body .= "Name:";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Mobile: ";
$Body .= $mobileno;
$Body .= "\n";

$Body .= "Degree: ";
$Body .= $degree;
$Body .= "\n";

// $Body .= "Message: ";
// $Body .= $message;
// $Body .= "\n";
 
// send email
$success = mail($EmailTo, $email_Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>