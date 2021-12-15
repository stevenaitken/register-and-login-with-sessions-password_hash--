<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A short description of the web page purpose/ intent">
    <meta name="author" content="Your name 2021">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Passwords</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="css/styles.css" rel="stylesheet">

    <style>

h4{color:red;margin-top: 10vh;}
    
    </style>
</head>
<body>

<div class="container">
<div class="row">

<header><h1>Hash Passwords</h1>
<p>This is a basic example hashing passwords using md5(), sha1() and password_hash(). The example displays the hashed passwords using different hashing algorithms.</p>
<p>This is a basic example hashing passwords using md5(), sha1() and password_hash(). The example displays the hashed passwords using different hashing algorithms.</p>

</header>

<div class="mb-3 col-md-12">
    
    <?php
    //password variable
$user_entered_password = "password";
$my_password = "password";
$stored_password_on_database_md5  = md5($my_password);
$stored_password_on_database_sha1  = sha1($my_password);
$stored_password_on_database_password_hash  =  password_hash($my_password, PASSWORD_DEFAULT);

//display password hash to screen

echo "<p> md5: ". $stored_password_on_database_md5."</p>";
echo "<p> sha1: ".$stored_password_on_database_sha1."</p>";
echo "<p> password_hash: ".$stored_password_on_database_password_hash."</p>";

//PASTE THE 3 PASSWORD HASHES INTO GOOGLE ONE AT A TIME. WHAT IS THE RESULT. WHAT IS THE BEST METHOD FOR HASHING PASSWORDS


echo "<h4>CONFIRM PASSWORD HASH TO ORIGINAL HASHED PASSWORD</h4>";

if(md5($user_entered_password) === $stored_password_on_database_md5){
    echo "<p>The md5() passwords are equal</p>";
  }

  if(sha1($user_entered_password) === $stored_password_on_database_sha1){
    echo "<p>The sha1() passwords are equal</p>";
  }
  if (password_verify($user_entered_password, $stored_password_on_database_password_hash)) {
    echo "<p>The password_hash() passwords are equal</p>";
  }

?>
Note: Copy each of the hashed passwords into Google and find out what happens.
  </div>


</div>
<footer class="footer mt-auto py-3 bg-light navbar-fixed-bottom text-center">
  <div class="container">
    <span class="text-muted">Password hash</span>
  </div>
</footer>
</div>





</body>
</html>