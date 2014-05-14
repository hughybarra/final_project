<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hugo's Landing Page</title>
	<!-- Css -->
	<!-- mayers reset -->
	<?= Asset::css('reset.css') ?>
	<?= Asset::css('bootstrap.css') ?>




</head>
<body>

	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container">
			 <a class="navbar-brand" href="#">Hugo's Workshop</a>
		</div>
	</nav>
	<!-- end navigation -->

	<div class="container">

		<section class="jumbotron">
		  <h1>Welcome To Hugo's Portfolio Website!</h1>
		  <p>This site is dedicated to some of the work that I have built while going to school at Fullsail University. I hope you enjoy. </p>
		</section>

		<section class="row">

			<div class="col-lg-5 col-lg-offset-1 text-center">

				<img src="" alt="..." class="img-circle">

				<p>A Little About Me</p>

			</div>
			<div class="col-lg-5 text-center">

				<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt="..." class="img-circle">
				<p>Contact Information </p>

			</div>


		</section>
		<!-- end section -->

		<section class="content">

			<div class="row featurette">

				<div class="col-lg-7">
					<h2 class="">Example Heading</h2>
					<p class="lead">
						Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
					</p>
				</div>
				<div class="col-lg-5">
					<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjI1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjMxcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NTAweDUwMDwvdGV4dD48L3N2Zz4=">
				</div>

			</div>

		</section>

	</div>
	<!-- end main container -->




</body>
</html>
