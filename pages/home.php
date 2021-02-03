<?php 
	session_start();
	$_SESSION['previous_page'] = 'home.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once 'components/head.html';?>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<?php include_once 'components/header.html';?>
				<?php include_once 'components/menu.html';?>
				<!-- Main -->
					<div id="main">
						<?php include_once 'components/carousel.html';?>

						<br>
						<br>

						<div class="inner">
							<!-- About Us -->
							<header id="inner">
								<h1>Find you new or used car! Pre-Order Cars from USA and Canada! Wash & Service your car - Get great Offers and Fast Deals</h1>
								<!-- <p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p> -->
							</header>

							<br>

							<?php include_once 'components/cars.html';?>

							<p class="text-center"><a href="cars.html">View Cars &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
							
							<br>

							<?php include_once 'components/testimonials.html';?>

							<p class="text-center"><a href="testimonials.html">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							<br>

							<?php
							//  include_once 'components/blog.html';
							?>

							
						</div>
					</div>

				<?php include_once 'components/footer.html';?>
			</div>

		<?php include_once 'components/scripts.html';?>

	</body>
</html>