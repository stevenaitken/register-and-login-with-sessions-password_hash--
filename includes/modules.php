<?php

//count password length
function stringLen(){

    if (strlen($_POST['pwd']) < 8 || strlen($_POST['pwd']) > 15) {
      exit ("Password needs to be to be 8 - 15 characters.");
   }
  
  }

function strip_space(){

  if(strpos($_POST['username'], " "))
  exit ("Whitespace in username not allowed.");
}






?>