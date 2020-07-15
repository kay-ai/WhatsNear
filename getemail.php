<?php

$host = "ec2-18-235-109-97.compute-1.amazonaws.com";
$user = "eodszytidlfunj";
$password = "20e8af9269f5936a79573c106e567ce2f7bc7ebcd1fee2f4fe2f2d98f140681b";
$dbname = "d2hvol779nos4o";
$port = "5432";

try{
  // Create connection
  $dsn = "pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname . ";user=" . $user . ";password=" . $password;

// Check connection
$pdo = new PDO($dsn, $user, $password);

// display a message if connected to database successfully
if($pdo){
  echo "Connected to the <strong>$db</strong> database successfully!";
         }
 }catch (PDOException $e){
  // report error message
  echo $e->getMessage();
 }

/* function redirect_to( $location = NULL, $email) {
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
} */
?>