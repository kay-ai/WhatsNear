<?php
/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "emaildb";


$db = parse_url(getenv("DATABASE_URL")); */

// Create connection
$conn = pg_connect(getenv("DATABASE_URL"));

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