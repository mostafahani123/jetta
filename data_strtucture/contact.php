

<?php  include("includes/navbar.php") ?>










<!doctype html>
<html lang="en">
  <head>
  	<title>jettalube</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style_contact.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="text-danger">send massage now !!</h1>
				</div>
			</div>
			<form class="container" action="handlers/hadlecontact.php" method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">subject :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="subject">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">massage : </label>
    <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="message"></textarea>
  </div>
  

  
  <button type="submit"  class="btn btn-primary" name="btn-contact">send massage</button>
</form>

							<div class="col-md-5 d-flex align-items-stretch">
								<div id="map"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Address:</span> Dalton House, 60 Windsor Avenue, London, SW19 2RR.</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Phone:</span> <a href="tel://01001733029"> 01001733029</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-paper-plane"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Email:</span> <a href=info@jettalube.com">info@jettalube.com</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-globe"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Website</span> <a href="https://jettalube.com/">https://jettalube.com/</a></p>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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