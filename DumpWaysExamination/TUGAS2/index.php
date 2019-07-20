<?php
$user_name="12345678";
$email="zoentach16@gmail.com";

function checkUser($user_nama){
   if(strlen($user_nama)==8 && ctype_lower($user_nama)){
       echo "<br> valid";
   }else{
       echo "<br> invalid";
   }
}

function checkEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<br> valid";
    }else{
        echo "<br> invalid";
    }
}
 
checkUser("munandar");
checkEmail("zoentach@gmail.com");

?>