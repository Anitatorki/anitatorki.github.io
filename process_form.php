<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $to = "anita.trkh@gmail.com";
  $subject = "New Form submission";
  $headers = "From: $email";
  $headers .= "Reply-To: $email";
  $message = "You have a new message from $name.\n";
  if(mail($to,$subject,$message,$headers)){
    echo "Mail Sent.";
  }else{
    echo "Mail Not Sent.";
  };

}
?>
