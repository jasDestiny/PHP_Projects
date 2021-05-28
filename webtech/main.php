<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PuppyCom</title>
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900|Ubuntu:400,500,700&display=swap"
    rel="stylesheet">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- style sheet -->
  <link rel="stylesheet" href="Styles/styles.css">


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


</head>

<body>

  <section id="title">
    <div class="container-fluid">

      <!-- Nav Bar -->

      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="">PuppyCom</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="signin.php">
				<?php
				if(!isset($_COOKIE["userV"])) {
				  echo "Sign In";
				} 
				else{
					echo "Hello ".$_COOKIE["userV"];
				}
					
				?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Pricing</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>

            </li>
          </ul>
        </div>
      </nav>






      <!-- Title -->

      <div class="row">
        <div class="col-lg-6">
          <h1>A place to buy your favorite puppies.</h1>
          <button type="button" class="download-button btn btn-dark btn-lg"><i class="fab fa-apple"></i>
            Download</button>
          <button type="button" class="download-button btn btn-outline-light btn-lg"><i class="fab fa-google-play"></i>
            Download</button>

        </div>

        <div class="col-lg-6">
          <img class="title-image" src="images/iphone6.png" alt="iphone-mockup">
        </div>
      </div>
    </div>

  </section>


  <!-- Features -->

  <section id="features">


    <div class="row">
      <div class="col-lg-4 col-features">
        <i class="far fa-check-circle fa-4x features-icon"></i>
        <h3 class="features-h3">Easy to buy.</h3>
        <p class="features-p">So easy to buy.</p>
      </div>
      <div class="col-lg-4 col-features">
        <i class="fas fa-bullseye fa-4x features-icon"></i>
        <h3 class="features-h3">Elite Clientele</h3>
        <p class="features-p">We have all the dogs, the greatest dogs.</p>

      </div>
      <div class="col-lg-4 col-features">
        <i class="fas fa-heart  fa-4x features-icon"></i>
        <h3 class="features-h3">Guaranteed to work.</h3>
        <p class="features-p">Find the pet of your life.</p>

      </div>
    </div>


  </section>


  <!-- Testimonials -->

  <section id="testimonials">

    <div id="testimonials-carousel" class="carousel slide" data-ride="carousel" data-interval="3500">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2 class="testimonials-h2">I no longer have to sniﬀ other dogs for love. I've found the Corgi
            on PuppyCom Woof
            Woof.</h2>
          <img class="testimonials-img" src="images/dog-img.jpg" alt="dog-profile">
          <em>Pebbles, New York</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonials-h2">My friend used to be so lonely, but with PuppyCom help, they've
            found the friend of their life. I think.</h2>
          <img class="testimonials-img lady-profile" src="images/lady-img.jpg" alt="lady-profile">
          <em>Beverly, Illinois</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonials-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonials-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>





  </section>


  <!-- Press -->

  <section id="press">
    <img class="press-logo" src="images/TechCrunch.png" alt="tc-logo">
    <img class="press-logo" src="images/tnw.png" alt="tnw-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section>


  <!-- Pricing -->

  <section id="pricing">
    <h2>A Plan for Every Human needs</h2>
    <p>Simple and affordable price plans for you.</p>

	<form action="cart.php" method="post">
    <div class="row">
      <div class="col-lg-4 col-md-6 pricing-col">
        <div class="card">
          <div class="card-header">
            <h3>Chihuahua</h3>
          </div>
          <div class="card-body">
            <h2>Rs.5000</h2>
			<div class="qty mt-5">
				<span class="minus minus1 bg-dark">-</span>
				<input type="text" class="count count1" name="c1" value="0">
				<span class="plus plus1 bg-dark">+</span>
			</div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 pricing-col">
        <div class="card">
          <div class="card-header">
            <h3>Labrador</h3>
          </div>
          <div class="card-body">
            <h2>Rs.7000</h2>
            <div class="qty mt-5">
				<span class="minus minus2 bg-dark">-</span>
				<input type="number" class="count count2" name="c2" value="0">
				<span class="plus plus2 bg-dark">+</span>
			</div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 pricing-col">
        <div class="card">
          <div class="card-header">
            <h3>Mastiff</h3>
          </div>
          <div class="card-body">
            <h2>Rs.15000</h2>
            <div class="qty mt-5">
				<span class="minus minus3 bg-dark">-</span>
				<input type="number" class="count count3" name="c3" value="0">
				<span class="plus plus3 bg-dark">+</span>
			</div>
          </div>
        </div>
      </div>

    </div>
	<button type="submit" class="btn btn-dark">Buy Now</button>
	</form>

  </section>


  <!-- Call to Action -->

  <section id="cta">

    <h3>Find the True Love of Your Life Today.</h3>
    <button type="button" class="cta-button btn btn-dark btn-lg"><i class="fab fa-apple"></i> Download</button>
    <button type="button" class="cta-button btn btn-outline-light btn-lg"><i class="fab fa-google-play"></i> Download</button>

  </section>


  <!-- Footer -->

  <footer id="footer">

    <p>© Copyright 2020 PuppyCom</p>

  </footer>
  <script>
  		$(document).ready(function(){
   			$(document).on('click','.plus1',function(){
				$('.count1').val(parseInt($('.count1').val()) + 1 );
    		});
        	$(document).on('click','.minus1',function(){
    			$('.count1').val(parseInt($('.count1').val()) - 1 );
    				if ($('.count1').val()<0) {
						$('.count1').val(0);
					}
    	    	});
				
   			$(document).on('click','.plus2',function(){
				$('.count2').val(parseInt($('.count2').val()) + 1 );
    		});
        	$(document).on('click','.minus2',function(){
    			$('.count2').val(parseInt($('.count2').val()) - 1 );
    				if ($('.count2').val()<0) {
						$('.count2').val(0);
					}
    	    	});
				
   			$(document).on('click','.plus3',function(){
				$('.count3').val(parseInt($('.count3').val()) + 1 );
    		});
        	$(document).on('click','.minus3',function(){
    			$('.count3').val(parseInt($('.count3').val()) - 1 );
    				if ($('.count3').val()<0) {
						$('.count3').val(0);
					}
    	    	});
 		});
  </script>


</body>

</html>
