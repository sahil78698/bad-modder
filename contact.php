<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

if(empty($name) || empty($email) || empty($phone) || empty(message))
{
    echo "please fill all the fields ";
}
else{
    mail("sahilhossain999coc@gmail.com","bad modder",$message,$phone,"from: $name"<$email>");
    
  
}

?>
