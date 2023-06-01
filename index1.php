<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

 
?>





<?php
include('inc/top.php')
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 mt-2"> <?php include('inc/navbar.php'); ?>
			<?php include('inc/slider.php'); ?>
			
		</div>
	</div>

<div class="row mt-2">
	<div class="col-md-9">
	<h2 class="bg-dark text-white text-center">WELCOME TO THIS INTERNET GENERATION</h2>	
	<p class="text-justify"><b class="text-danger"></b> 
<h3 class="bg-warning text-dark">In this Internet Generation, many companies out there are looking for workers in different field to run jobs online.</h3>
<h2 class="text-center bg-primary text-white">What are online Jobs?</h2>
<h3 class="bg-warning text-dark">An online job is any job where you can work from home or a remote location, rather than reporting to a set location daily. Online jobs are becoming more and more readily available as technology and internet connections continue to improve. Many people work online in a variety of fields such as:
<p>Virtual assistant</p>
<p>Translating</p>
<p>Freelancing</p>
<p>Selling your products online</p>
<p>Make money on Social Media</p>
<p>Affiliate making</p>
<p>Crypto trading </p>
<p>Making money from your own website</p>

<P>Making money with HUMAN A.I videos Adverts</P>

<p class="text-primary">NO SKILL NO WORRY!</p>
We have tutorials for most of the online jobs which will surely make you a Pro in making money online in this Internet generation. these tutorials are in PDF and Video format <P class="text-danger">Also check our <a class="bg-out-line-primary" href="template.php">template</a> for your e-commerce and any orther WEbsite</P></h3><hr>



	<h2 class="bg-dark text-white text-center">NOTICE</h2>
	<div class="row">
		<div class="col-md-6">
		 <ul class="list-group">
		 	 
		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		Personal Attention <span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		 Limited Students in a batch<span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		Online Progress Report <span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		Printed notes and question papers <span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		Pick up and Drop Facility available <span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		Daly Online Attendance <span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	
		 </ul>	
		</div>

        <div class="col-md-6">
		 <ul class="list-group">
		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		Motivation is the main part of this institute <span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		Absentees and Follow up <span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		 Doubt Sessions / Weekly Tests<span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		Study Room Facility is available <span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		Main focus on Basics and then go to the Advanced level <span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	 
		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		Seperate Guidance for all types Students <span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	<li class="list-group-item d-flex justify-content-between align-item center">
		 		Reasonable Fees <span class="badge badge-primary badge-pill"><i class="fa fa-check"></i></span>
		 	</li>

		 	
		 </ul>	
		</div>


	</div>

	</div>


     
<div class="col-md-3">
  <div class="card bg-warning text-white">
 	<div class="card-body">
 		<h4 class="card-title text-center">Review</h4>
 	</div>
 </div>	
 <div class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
		 <img class="d-block w-100" src="images/work-online.png" class="img-fluid">
</div>
		 <div class="carousel-item">	
		 <img class="d-block w-100" src="images/002.png" class="img-fluid"></div>

		 <div class="carousel-item">	
		 <img class="d-block w-100" src="images/virtuat-assistant.png" class="img-fluid"></div>

		 <div class="carousel-item">
		 <img class="d-block w-100" src="images/KDP1.png" class="img-fluid"></div>

		 <div class="carousel-item">
		 <img class="d-block w-100" src="images/images-web-developmen2t.png" class="img-fluid"></div>

		 <div class="carousel-item">
		 <img class="d-block w-100" src="images/makemoneywithsocialmedia.png" class="img-fluid"></div>
		</div>
	</div>
<hr><hr>
 <div class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
		 <img class="d-block w-100" src="images/003.png" class="img-fluid">
</div>
		 <div class="carousel-item">	
		 <img class="d-block w-100" src="images/makemoneywithsocialmedia.png" class="img-fluid"></div>

		 <div class="carousel-item">	
		 <img class="d-block w-100" src="images/af.png" class="img-fluid"></div>

		 <div class="carousel-item">
		 <img class="d-block w-100" src="images/004.png" class="img-fluid"></div>

		 <div class="carousel-item">
		 <img class="d-block w-100" src="images/005.png" class="img-fluid"></div>

		 <div class="carousel-item">
		 <img class="d-block w-100" src="images/006.png" class="img-fluid"></div>
		</div>
	</div>
<hr><hr><hr><hr>
 <div class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
		 <img class="d-block w-100" src="images/006.png" class="img-fluid">
</div>
		 <div class="carousel-item">	
		 <img class="d-block w-100" src="images/003.png" class="img-fluid"></div>

		 <div class="carousel-item">	
		 <img class="d-block w-100" src="images/work-online.png" class="img-fluid"></div>

		 <div class="carousel-item">
		 <img class="d-block w-100" src="images/makemoneywithsocialmedia.png" class="img-fluid"></div>

		 <div class="carousel-item">
		 <img class="d-block w-100" src="images/KDP1.png" class="img-fluid"></div>

		 <div class="carousel-item">
		 <img class="d-block w-100" src="images/af.png" class="img-fluid"></div>
		</div>
	</div><hr><hr>
<img src="images/EMPLOYEES.png">
 
</div>



	<div class="container-fluid">
	    <div class="row bg-dark mt-2">
	    <?php include('inc/footer.php'); ?>
			
		</div>
	</div>

</div>
</body>

</html>
<!--<button class="btn btn-primary">HELLO</button>-->