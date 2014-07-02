<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hugo's Landing Page</title>
	<!-- Css -->
	<!-- mayers reset -->
	<?= Asset::css('reset.css') ?>
	<?= Asset::css('bootstrap.css') ?>
	<?= Asset::css('landing/main.css') ?>




</head>
<body>


	<div class="container">

		<section class="jumbotron text-left">
		  <h1>The Turnkey Web Engine</h1>
		  <p>Hey how goes it? This is Hugh Ybarra here and you're looking at my FullSail Final Project. Feel Free to contact me
		  	here <a href="">hugh.ybarra@gmail.com</a> with any of your questions. If your interested in my services feel free to send me
		  	a message. Ill get back to you as soon as possible.</p>
		</section>

		<!-- end section -->
		<section class="about row col-lg-12 ">

			<div class="text col-lg-6">
				<h3>So Whats this all about? </h3>
				<p>
					My project is a business model for restaurant website development. The goal is to speed up all aspects of development
					when developing a site from the start to increase productivity for myself and my company. I plan on having a set of
					predesigned solutions to pick from ranging from just website development with many templates and modules to pick
					from, to a full online footprint, SEO plan, social media coverage strategy, a hosting plan, and  later a restaurant
					management system for those who opt into it.
				</p>
			</div>

			<div class="text col-lg-6">
				<h3>Why did I build this? </h3>
				<p>
					The purpose of this templating system is to build a great set of template sites targeted at restaurant style websites
					for rapid development and integration.  Ideally, once the project is planned and defined turnaround should be as quick
					as possible.
				</p>
			</div>

			<div class="text col-lg-6">
				<h3> What is success? </h3>
				<p>
					A new website launching that is available on any device through the browser, searchable by all major search
					engines and hosted with 99.999 % up time
				</p>
			</div>

			<div class="text col-lg-6">
				<h3>Required Content</h3>
				<p>
					Each new client that wants to use this engine will need these assets.
					th
					<ul>
						<li>Nine Images</li>
						<li>One Icon</li>
						<li>Copy about the restaurant</li>
						<li>Menus</li>
						<li>An address Street, City, State</l1>
						<li>Hours of operation</li>
						<li>Contact Inforamtion</li>
					</ul>

					Once The client gives me this list and choses a template I can insert it into the data base and new website will be generated based off of a
					pre selected template.
				</p>
			</div>

		</section>


		<section class="content">

			<div class="examples">
				<h2>The Examples</h2>
				<p>
					I would like to explain what you will be looking at here. Below are two restaurants PizzaJohns and Dr.Donut. Right now
					both restaurants have their asssets stored in the database. Click on the one of the logos below to check out the templated
					layout for that restaurant. Once you have had a peek look for the TOGGLE button located in the nav and click. This toggle will
					ajax into the server and swap out the template and refresh the page showing you the second layout. Right now I only have two
					templates for proof of concept, but any number could be created and implemented and the data for each site could be swapped in in a
					matter of seconds.

				</p>
			</div>

			<div class="row featurette">

				<div class="sub-section pizzajohns">
					<div class="col-lg-7 feature-text text-left ">
						<h3 class="">Pizza Johns</h3>
						<p class="lead">
							Pizza Johns was the first restaurant I used. Feel Free to check out template one and two with PizzaJohns restaurant as the filler content.
						</p>
					</div>

					<div class="col-lg-5">
						<?=  Asset::img('pizzajohns/logo.png', array('id' => 'logo')) ?>
					</div>
				</div>

				<div class='sub-section drdonut'>
					<div class="col-lg-7 feature-text">
						<h3 class="">Dr Donut</h3>
						<p class="lead">
							Once I finished template 1 I needed a second restaurant to prove the concept. So I created Dr Donut. Have a look at Dr.Donut website.
							This site is using Template one and two.
						</p>
					</div>

					<div class="col-lg-5">
						<?=  Asset::img('drdonut/logo.png', array('id' => 'logo')) ?>
					</div>
				</div>
			</div>

		</section>

	</div>
	<!-- end main container -->


	<!-- Jquery -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<!-- Jquery Library -->

	<!-- main.js -->
	<?= Asset::js('landing/main.js', array(), null, true) ?>

</body>
</html>
