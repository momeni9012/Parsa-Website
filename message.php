
<?php

$error = "-";

if(isset($_POST["name_full"])){


  $fullname = $_POST["name_full"];
  $subject = $_POST["Subject"];
  $email = $_POST["_replyto"];
  $message = $_POST["message"];
  
  if(strlen($fullname) <3 || strlen($fullname) >20){
      $error = "please insert a valid 'Full name'!";
  }
  
  if(strlen($subject) <11){
      $error = "please insert a valid 'Subject'";
  }
  
  
  if($error == "-"){
      $regfile = fopen('message.txt' , 'w');
      fwrite($regfile ,  $fullname . ' , ' . $subject . ' , ' . $email . ' , ' .  $message);
      fclose($regfile);
  }
}

?>