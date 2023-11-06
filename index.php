<?php

require_once('db.php');

// Prepare the statement
$sql = "INSERT INTO users (name, email, phone) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($sql);

if ($stmt === false) {
  // Handle the error
  echo "Error: " . $mysqli->error;
} else {
  // Bind the parameters
  $stmt->bind_param("sss", $name, $email, $phone);

  // Set the parameter values
  if (isset($_POST['name'])) {
    $name = $_POST['name'];
    // Use the $name variable or perform any necessary operations with it
} else {
    $name = ''; // Assign a default value or handle the case when 'name' is not set
}
if (isset($_POST['email'])) {
  $email = $_POST['email'];
  // Use the $name variable or perform any necessary operations with it
} else {
  $email = ''; // Assign a default value or handle the case when 'name' is not set
}
if (isset($_POST['phone'])) {
  $phone = $_POST['phone'];
  // Use the $name variable or perform any necessary operations with it
} else {
  $phone = ''; // Assign a default value or handle the case when 'name' is not set
}



  // Execute the statement
  $result = $stmt->execute();

  if ($result === false) {
    // Handle the execution error
    echo "Error executing statement: " . $stmt->error;
  } else {
    // Success! Data inserted successfully
    echo "Data inserted successfully!";
  }

  // Close the statement
  $stmt->close();
}


?>



