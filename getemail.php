<?php

$servername = "ec2-18-235-109-97.compute-1.amazonaws.com";
$username = "eodszytidlfunj";
$password = "20e8af9269f5936a79573c106e567ce2f7bc7ebcd1fee2f4fe2f2d98f140681b";
$dbname = "d2hvol779nos4o";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

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
$sql = "INSERT INTO emails (email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    $message = 'success';
    redirect_to('index.php', $email);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>