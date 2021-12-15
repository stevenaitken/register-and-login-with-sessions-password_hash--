<?php 
session_start();
include('includes/db_connx.php');
include('includes/errors.php');

  $user = $_POST['user'];
  $pwd = $_POST['pwd'];


$sql = "SELECT username, pwd FROM users WHERE username = '$user'";
$result = $conn->query($sql); //bind dbase connection to query
$row = $result->fetch_assoc(); // gather each matching row

// if query result count is equal to 1 then there is a match
//if inout password is th same as stored/hashed database pwd then reult is true

if ($result->num_rows === 1  && password_verify($pwd, $row['pwd']) ) {
  
//redirect to admin section
$_SESSION['userLogged'] =  $user;
header('location:admin.php?username='.$user);
die();
}

 else {

 echo "error";
     //header('location:login.php');
     die();
}


$conn->close();
 
?>
