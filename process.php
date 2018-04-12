<?php 

// define variables and set to empty values
$email_error = $name_error  = $l_name_error = $phone_error = $address_error = $password_error = "";
$email = $name = $l_name = $phone = $address = $success = "";

//form is submitted with POST method

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["email"])) {
	    $email_error = "Email is required";
	  } else {
	    $email = test_input($_POST["email"]);
	    // check if e-mail address is well-formed
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      $email_error = "Invalid email format"; 
	    }
	  }
	
	  if (empty($_POST["name"])) {
	    $name_error = "Name is required";
	  } else {
	    $name = test_input($_POST["name"]);
	    // check if name only contains letters and whitespace
	    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
	      $name_error = "Only letters and white space allowed"; 
	    }
	  }
	  
	  if (empty($_POST["l_name"])) {
	    $l_name_error = "Name is required";
	  } else {
	    $l_name = test_input($_POST["l_name"]);
	    // check if name only contains letters and whitespace
	    if (!preg_match("/^[a-zA-Z ]*$/",$l_name)) {
	      $l_name_error = "Only letters and white space allowed"; 
	    }
	  }  
	
	  if (empty($_POST["phone"])) {
	    $phone_error = "Phone is required";
	  } else {
	    $phone = test_input($_POST["phone"]);
	    // check if e-mail address is well-formed
	    if (!preg_match("/^[0-9]*$/",$phone)) {
	      $phone_error = "Invalid phone number"; 
	    }
	  }


	  if (empty($_POST["address"])) {
	    $address_error = "Adrress is required";
	  } else {
	    $address = test_input($_POST["address"]);
	  }

	  if (empty($_POST["password"])) {
	    $password_error = "Password is required";
	  } else {
	    $password = test_input($_POST["password"]);
	  }


	  
	  if ($name_error == '' and $email_error == '' and $password_error=='' and $l_name_error == '' and $phone_error == '' and $address_error == '' ){
	      $message_body = '';
	      unset($_POST['submit']);
	      foreach ($_POST as $key => $value){
	          $message_body .=  "$key: $value\n";
	      }
	      
	      $to = $email;
	      $subject = 'Contact Form Submit';
	      $headers =  'MIME-Version: 1.0' . "\r\n"; 
		  $headers .= 'From: Your name <alejoo1894@gmail.com>' . "\r\n";
		  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	      if (mail($to, $subject, $message_body, $headers)){
	          $success = "Message sent, thank you for contacting us!";
	          $name = $email = $phone = $password = $address = $l_name = '';
	      }

	}
}
	  
	

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

