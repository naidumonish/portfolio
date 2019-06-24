<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

    $query = "INSERT INTO users(name, email, contact, address)VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
?>
window.alert("You are subscribed to receive details about our website");
<?php
    header('location: success.php');
?>