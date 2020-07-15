<?php

$host = "ec2-18-235-109-97.compute-1.amazonaws.com";
$user = "ykkfdkvgouanug";
$password = "bd4778af29f0f3c4fdee4d83d9d06b5432b146c60b017365137618e76389ae3d";
$dbname = "db9eso0pclbukt";
$port = "5432";


// Create connection
$conn = pg_connect("host=$host user=$user password=$password dbname=$dbname");

// Check connection
if ($conn) {
  echo 'Connection attempt succeeded.';
}else {

  echo 'Connection attempt failed.';
  
  }

function redirect_to( $location = NULL, $email) {
  if ($location != NULL) {
      header("Location: $location?message=success&email=$email");
      exit;
  }
}

$email = $_POST['email'];

//Insert Values
$sql = "INSERT INTO emails(email) VALUES ('$email')";
$result = pg_exec($conn, $sql);

  if ($result) {
      $message = 'success';
      redirect_to('index.php', $email);
  } else {
    echo "Error: " . $sql . pg_errormessage($conn);
  }

pg_close($conn);
?>