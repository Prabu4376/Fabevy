<?php
$formType = $_POST["formtype"];

if($formType === "syllabus"){
   $fname = $_POST["fname"];
   $lname = $_POST["lname"];
   $email = $_POST["email"];
   $mobileno = $_POST["mobileno"];
   $city = $_POST["city"];
   $lookingfor = $_POST["lookingfor"];
   $message = $_POST["message"];

    
   $EmailTo = "pradeepbkris@gmail.com";
   $email_Subject = "Fabevy syllabus and call back.";
    
   // prepare email body text
   $Body .= "First Name:";
   $Body .= $fname . ' '. $lname;
   $Body .= "\n";

   $Body .= "Email: ";
   $Body .= $email;
   $Body .= "\n";

   $Body .= "Mobile: ";
   $Body .= $mobileno;
   $Body .= "\n";

   $Body .= "City: ";
   $Body .= $city;
   $Body .= "\n";

   $Body .= "Looking for: ";
   $Body .= $lookingfor;
   $Body .= "\n";

   $Body .= "Message: ";
   $Body .= $message;
   $Body .= "\n";
}else if($formType === "enquiry"){
   $name = $_POST["name"];
   $email = $_POST["email"];
   $mobileno = $_POST["mobileno"];
   $lookingfor = $_POST["lookingfor"];
   $message = $_POST["message"];

    
   $EmailTo = "pradeepbkris@gmail.com";
   $email_Subject = "Fabevy Enquiry";
    
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

   $Body .= "Looking for: ";
   $Body .= $lookingfor;
   $Body .= "\n";

   $Body .= "Message: ";
   $Body .= $message;
   $Body .= "\n";

}else if($formType === "consulation"){

   $name = $_POST["name"];
   $email = $_POST["email"];
   $mobileno = $_POST["mobileno"];
   $lookingfor = $_POST["lookingfor"];

   $EmailTo = "pradeepbkris@gmail.com";
   $email_Subject = "Fabevy FREE Consulation";
    
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

   $Body .= "Looking for: ";
   $Body .= $lookingfor;
   $Body .= "\n";

}

// send email
$success = mail($EmailTo, $email_Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>