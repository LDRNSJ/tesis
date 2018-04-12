<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
</head>
<body>

  <center>
      <h3></h3>
      <br>
      <input type="text" placeholder="Set up mail" id="mail" name="mail"><br>
      <input type="password" placeholder="Set up password" id="password" name="password"><br>
      

      <?php include 'Styles/styles.css';?>
      <form action="#" id="btn_login" method="POST">
          <input type="checkbox" name="Terms" value="Bike"> <tt> I accept be +18</tt>
          <script src='https://www.google.com/recaptcha/api.js?hl=es'></script><br>
          <div class="g-recaptcha" data-sitekey="6LfvPEsUAAAAAIsOiNbcTGWqiZq57EzDXpC0k0PM"></div>
          
          <button class="btn_org"> <span>Continuar </span></button>
      </form>

</center>



     

</body>
</html>
