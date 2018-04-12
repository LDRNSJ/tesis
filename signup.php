<!DOCTYPE html>

<?php 
		include('process.php') ;
        
?>

        
<head>
	
	<title>Sign Up</title>
	

</head>
<body>

	<center>
      	<form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
		    <!--<h3>Contact</h3>
		    <h4>Contact us today, and get reply with in 24 hours!</h4>
			-->
			<fieldset>
		      <input type="text" placeholder="Email" id="email" name="email" value="<?= $email ?>" tabindex="1" autofocus >
		      <span class="error"> <?= $email_error ?> </span>
		    </fieldset>

		    <fieldset>
		      <input type="password" plasceholder="Set your password " id="password" name="password" tabindex="2" >
		      <span class="error"> <?= $password_error ?> </span>
		    </fieldset>

		    <fieldset>
		      <input type="text" placeholder="Name" id="name" name="name" value="<?= $name ?>" tabindex="3" >
		      <span class="error"> <?= $name_error ?> </span>
		    </fieldset>

		    <fieldset>
		      <input type="text" placeholder="Last Name" id="l_name" name="l_name" value="<?= $l_name ?>" tabindex="4">
		      <span class="error"> <?= $l_name_error ?> </span>
		    </fieldset>

		    <fieldset>
		      <input type="text" placeholder="Phone Number" id="phone" name="phone" value="<?= $phone ?>" tabindex="5">
		      <span class="error"> <?= $phone_error ?> </span>
		    </fieldset>

		    <fieldset>
		      <input type="text" placeholder="Address" id="address" name="address" value="<?= $address ?>" tabindex="6">
		      <span class="error"> <?= $address_error ?> </span>
		    </fieldset>

		    <button site="center" class="btn_org">
		    	<span>Aceptar </span>
		    </button>

		    <div class="success"><?= $success ?></div>

		</form>

    </center>

   
</body>