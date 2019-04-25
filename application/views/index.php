<!DOCTYPE html>
<html>
		<head>
			<title>
				Home_esgotado
			</title>

			<!-- CSS Bootstraps -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

			<!-- CSS Pure -->
			<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/");?>home.css">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/");?>footer.css">

		</head>


		<body>

		<!-- Panggil Navbar -->
		<?php $this->load->view("navbar")?>

   <!-- Carousel -->
		<section class="section-carousel">
		<div class="container-carousel">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo base_url("assets/image/Home/");?>adult-back-view-backpack-443417.jpg" class="d-block w-100" style="height: 400px" alt="slideGambar1">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url("assets/image/Home/");?>adventure-back-view-bag-pack-1172253.jpg" class="d-block w-100" style="height: 400px" alt="slideGambar2">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url("assets/image/Home/")?>casual-cute-elegant-428338.jpg" class="d-block w-100" style="height: 400px" alt="slideGambar3">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		</section>

		
   <!-- Batas Carousel -->

	 <!-- Kategori -->

		<h2 class="freecat"> FREE SHIPPING ALL OVER INDONESIA </h2>

		<div class="container container-cat">
			<div class="row"> 

				<div class="col-sm-4">
				
					<div class="card" style="width: 18rem;">
							<img class="card-img" src="<?php echo base_url("assets/image/Home/")?>BAG.png" alt="Bag kategori">
					</div>
						
				</div>

				<div class="col-sm-4">
						<div class="card" style="width: 18rem;">
								<img class="card-img" src="<?php echo base_url("assets/image/Home/")?>shirt.png" alt="Bag kategori">
						</div>
				</div>

				<div class="col-sm-4">
						<div class="card" style="width: 18rem;">
								<img class="card-img" src="<?php echo base_url("assets/image/Home/")?>shoes.png" alt="Bag kategori">
						</div>
				</div>
				
			</div>
		</div>

	 <!--  Batas Kategori -->

		<hr style="width: 70% color=black; height: 1px; background-color: black;">

		<h2 class="browsall"> Browse All Item </h2>

		<div class="container-barang">
			<div class="row">

				<div class="col-sm-3">
				
					<div class="card" style="width: 18rem; margin-left: 30px;">
							<img class="card-img" src="<?php echo base_url("assets/image/Home/")?>tas1.jpg" alt="Bag kategori">
					</div>
						
				</div>

				<div class="col-sm-3">
						<div class="card" style="width: 18rem; margin-left: 20px;">
								<img class="card-img" src="<?php echo base_url("assets/image/Home/")?>tas2.jpg" alt="Bag kategori">
						</div>
				</div>

				<div class="col-sm-3">
					<div class="card" style="width: 18rem; margin-right: 40px;">
							<img class="card-img" src="<?php echo base_url("assets/image/Home/")?>tas3.jpg" alt="Bag kategori">
					</div>
				</div>
				
				<div class="col-sm-3">
					<div class="card" style="width: 18rem; margin-right: 40px;">
							<img class="card-img" src="<?php echo base_url("assets/image/Home/")?>tas4.jpg" alt="Bag kategori">
					</div>
				</div>

			</div>
		</div>

		<!-- Footer -->

		<footer class="flex-rw">
			<ul class="footer-list-top">
				<li>
						<h4 class="footer-list-header"> Contact </h4>
				</li>
				<li>
					<a class="generic-anchor footer-list-anchor"> Jl. Sidomukti no. T-5, Sukaluyu Bandung, Indonesia (Open Mon-Sat Except Public Holiday) </a>
				</li>
				<li>
					<a class="generic-anchor footer-list-anchor"> SMS/WA: 0822 1918 0163 </a>
				</li>
				<li>
					<a class="generic-achor footer-list-anchor"
					> LINE: @esgotado (use "@")</a>
				</li>
				<li>
					<a class="generic-anchor footer-list-anchor">
						EMAIL: order.esgotado@gmail.com
					</a>
				</li>


			</ul>

			<ul class="footer-list-top">
				<li>
					<h4 class="footer-list-header"> Help </h4>
				</li>
				<li>
					<a class="generic-anchor footer-list-anchor" >F.A.Q</a>
				</li>
				<li>
					<a class="generic-anchor footer-list-anchor">CHECK SHIPPING FEE </a>
				</li>
				<li>
					<a class="generic-anchor footer-list-anchor"> ORDER TRACKING </a>
				</li>
				<li>
					<a class="generic-anchor footer-list-anchor"> TERMS & CONDITION </a>
				</li>
			</ul>

			<ul class="footer-list-top">
				<li>
					<h4 class="footer-list-headeer"> Others </h4>
				</li>
				<li class>
					<a class="generic-anchor footer-list-anchor">
						ABOUT US
					</a>
				</li>
				<li class>
					<a class="generic-anchor footer-list-anchor">
						RESELLER DROPSHIPPER AFFILIATE
					</a>
				</li>
				<li class>
					<a class="generic-anchor footer-list-anchor">
						BUSINESS & PARTNERSHIP
					</a>
				</li>
			</ul>
		</footer>


		<!-- Batas Footer -->

		<!-- JS Bootstraps -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		</body>
</html>