<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOTEL BLISS</title>
	<link rel="stylesheet" type="text/css" href="style1.css">

	<!-------using-Font-Awesome-------->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
</head>

<body>

<header>
<!---------navbar--------->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
  <div class="container-fluid">

 		<a class="navbar-brand fs-1" ><span class="text-danger">BLISS</span></a>
  
    <button class="navbar-toggler text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon s"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fs-5 text-center">
        <li class="nav-item">
          <a class="nav-link active text-white px-3" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white px-3" aria-current="page" href="#">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white px-3" aria-current="page" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white px-3" aria-current="page" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white px-3" aria-current="page" href="contact.php">Contact Us</a>
        </li>
     </ul>
    </div>

    <div class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <button type="button" class="btn btn-outline-danger"><a class="nav-link active fs-5 text-white" aria-current="page" href="book.php">Book Now</a></button>
        </li>
     </div>    
  </div>
</nav>
<!-------navbar-end------->

<!-----------slider------------>
<div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-indicators ">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="./images/hh.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block ">
        <h1 class="text-light">HOTEL BLISS</h1>
       	<h2>Our<span class="text-danger"> HOTEL </span> is Best in the <span class="text-danger"> NASHIK </span></h2>
				<h3> WE Have <span class="text-danger"> 5 star</span> rating on <span class="text-danger"> Book-hotel-online </span></h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/b4.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-light">HOTEL BLISS</h1>
        <h2>Our<span class="text-danger"> HOTEL </span> is Best in the <span class="text-danger"> NASHIK </span></h2>
				<h3> WE Have <span class="text-danger"> 5 star</span> rating on <span class="text-danger"> Book-hotel-online </span></h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/b1.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block ">
        <h1 class="text-light">HOTEL BLISS</h1>
        <h2>Our<span class="text-danger"> HOTEL </span> is Best in the <span class="text-danger"> NASHIK </span></h2>
				<h3> WE Have <span class="text-danger"> 5 star</span> rating on <span class="text-danger"> Book-hotel-online </span></h3>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>
<!--------slider-end----------->

<!---------images---------->
	<section class="tours">
		<div class="row">
			<div class="col content-col">
				<h1>Asli Taste Restaurant</h1>
				<p>Nashik is the undisputed choice for honeymooners and regal enthusiasts. But with the right planning and a little bit of help from a professional holiday planner, this city of does double up as an excellent family weekend getaway. And we, at Hotel Bliss, cater to the needs of leisure seekers, business owners and couples in equal measures. While our rooms have etched their claim to fame due to unmatched services at an unbeatable price, our restaurant helps us earn that cherry on the icing.</p>
				<a href="book.php" class="btn2">Book Now</a>
			</div>
			<div class="col image-col">
				<div class="image-gallery">
					<img src="./images/r2.jpg" alt="">
					<img src="./images/restaurant.jpg" alt="">
					<img src="./images/r3.jpg" alt="">
					<img src="./images/r4.jpg" alt="">
				</div>
			</div>
		</div>
	</section>

<!----------images end------------>


<!------video section---------->
	<section class="about">
		<div class="row">
			<div class="video-container">
				<video src="./images/hotelv.mp4" loop autoplay muted></video>			
			</div>
		</div>
	</section>

<!-------video section end------>

<!---------------images------------>
	<section class="tours">
		<div class="row">
			<div class="col content-col">
				<h1>Our Pride, Our Restaurant</h1>
				<p>Asli Taste, one of the best restaurants in Nashik, which is our family restaurant in Nashik, adds to the charm of experiencing our hospitality. The roof top restaurant in Nashik does not merely offer scrumptious foods and an excellent view of the city. It has the right ambience that seldom fails to feed the soul.

				We have clients who love to soak in nature's bounty early in the morning. Also, we cater to families really looking forward to spending family time far away from the usual madding crowd and away from the recurrent pings from the cellphones. Either way, our rooftop hotel in Nashik has not failed to make a lasting impression.</p>	
			</div>
			<div class="col image-col">
				<div class="image-gallery">
					<img src="./images/biryani.jpg" >
					<img src="./images/d6.jpg" >
					<img src="./images/d4.jpg">
					<img src="./images/d5.jpg">
				</div>
			</div>
		</div>
	</section>

<!----------images end--------->



<!---------footer--------------->
		<footer class="bg-dark text-white pt-5 pb-4 mt-5">
			<div class="container text-center text-md-left">
				<div class="row text-center text-md-left">

					<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
						<h5  class="text-uppercase mb-4 font-weight-bold text-warning">Links</h5>
						<p>
							<a href="home.php" class="text-white" style="text-decoration: none;">Home</a>
						</p>

						<p>
							<a href="gallery.php" class="text-white" style="text-decoration: none;">Gallery</a>
						</p>

						<p>
							<a href="hall" class="text-white" style="text-decoration: none;">About Us</a>
						</p>
						<p>
							<a href="contact.php" class="text-white" style="text-decoration: none;">Contact Us</a>
						</p>
					</div>

					<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
						<h5  class="text-uppercase mb-4 font-weight-bold text-warning">services</h5>
						
						<p>
							<a href="website.php" class="text-white" style="text-decoration: none;">Restaurant</a>
						</p>

						<p>
							<a href="service1.phpservice1.php" class="text-white" style="text-decoration: none;">Free Wi-Fi</a>
						</p>

						<p>
							<a href="service1.phpservice1.php" class="text-white" style="text-decoration: none;">Parking</a>
						</p>

						<p>
							<a href="service1.php" class="text-white" style="text-decoration: none;">Swimming Pool</a>
						</p>
					</div>

				<!------logo-container--------->
				 <div class="footer-logo-container col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">

					<!-----logo---------------->
					<div class="footer-logo text-uppercase mb-4 font-weight-bold text-warning">Social links</div>

					<!------social----------->
					<div class="footer-social">

						<p><a href=""><i class="fab fa-linkedin-in"></i></a></p>
						<p><a href=""><i class="fab fa-facebook-f"></i></a></p>
						<p><a href=""><i class="fab fa-instagram"></i></a></p>
						<p><a href=""><i class="fab fa-twitter"></i></a></p>
					</div>
				</div>
			</div>			
		</div>
		</footer>

<!------footer end-------->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
