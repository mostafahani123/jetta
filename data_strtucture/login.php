


<?php  include("includes/navbar.php") ?>










<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style_contact.css">

	</head>
	<body>
	
<section>
<div class="container ">
  <h1 class="text-center mb-3 text-warning">welcome to our login</h1>
</div>

<form class="container text-light" id="login_style"action="handlers/handlelogin.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">password :</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
  </div>

  <button type="submit"  class="btn btn-dark" name="btn-login">Submit</button>
</form>


</section>
<br>
<br>
	<script src="js/script.js"></script>

	<script src="js_contact/jquery.min.js"></script>
  <script src="js_contact/popper.js"></script>
  <script src="js_contact/bootstrap.min.js"></script>
  <script src="js_contact/jquery.validate.min.js"></script>
  <script src="js_contact/google-map.js"></script>
  <script src="js_contact/main.js"></script>
  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
    ></script>
	</body>
</html>

<?php include("includes/footer.php")  ?>