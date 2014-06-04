<?php

// If the form was submitted, scrub the input (server-side validation)
// see below in the html for the client-side validation using jQuery

$name = '';
$gender = '';
$address = '';
$email = '';
$username = '';
$password = '';
$output = '';

if($_POST) {
  // collect all input and trim to remove leading and trailing whitespaces
  $name = trim($_POST['name']);
  $gender = trim($_POST['gender']);
  $address = trim($_POST['address']);
  $email = trim($_POST['email']);
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  
  $errors = array();
  
  // Validate the input
  if (strlen($name) == 0)
    array_push($errors, "Please enter your name");

  if (!(strcmp($gender, "Male") || strcmp($gender, "Female") || strcmp($gender, "Other"))) 
    array_push($errors, "Please specify your gender");
  
  if (strlen($address) == 0) 
    array_push($errors, "Please specify your address");
    
  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    array_push($errors, "Please specify a valid email address");
    
  
