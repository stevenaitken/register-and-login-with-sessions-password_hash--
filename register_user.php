<?php

$user = $_POST["user"];
$pwd = $_POST["pwd"];
$hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT );


include 'includes/db_connx.php';
$sql = "INSERT INTO users (username, pwd) VALUES('$user', '$hashed_pwd')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  header('Location:login.php');
  die();

?>