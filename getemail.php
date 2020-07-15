<?php

$host = "ec2-18-235-109-97.compute-1.amazonaws.com";
$user = "eodszytidlfunj";
$password = "20e8af9269f5936a79573c106e567ce2f7bc7ebcd1fee2f4fe2f2d98f140681b";
$dbname = "d2hvol779nos4o";
$port = "5432";

// Create connection
$conn = pg_connect("host=$host user=$user password=$password dbname=$dbname");;

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function redirect_to( $location = NULL, $email) {
  if ($location != NULL) {
      header("Location: $location?message=success&email=$email");
      exit;
  }
}

$email = $_POST['email'];

//Insert Values
$result = pg_query($db_connection, "INSERT INTO emails (email) VALUES ('$email')");

if ($result === TRUE) {
    $message = 'success';
    redirect_to('index.php', $email);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>