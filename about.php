<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>App Admin</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<style>
		body {
			display: flex;
			flex-direction: column;
			min-height: 100vh;
		}

		.container {
			flex: 1;
		}
	</style>
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d9d9d9;">
		<a class="navbar-brand" href="#">App Admin</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="user.php">User</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="berita.php">Berita</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Content -->
	<div class="container mt-5 text-justify">
		<h2>About Us</h2>

		<p>
			Welcome to our website! We are a passionate team dedicated to providing you with the latest and most interesting news and information.
		</p>

		<p>
			Our mission is to keep you informed and entertained. Whether it's breaking news, feature stories, or in-depth analyses, we strive to deliver content that matters to you.
		</p>

		<p>
			Meet our team of experienced journalists and writers who work tirelessly to bring you engaging and accurate stories. We value your trust and are committed to delivering news you can rely on.
		</p>

		<p>
			Thank you for being a part of our community. Feel free to explore the website and stay connected with us for exciting updates!
		</p>
	</div>

	<!-- Footer -->
	<footer class="bg-dark text-light text-center py-3">
		<p>&copy; <?php echo date('Y'); ?> App Admin. All rights reserved.</p>
	</footer>

	<!-- Bootstrap JS and jQuery (order matters) -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>