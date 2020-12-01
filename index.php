<?php 

	define("TITLE", "Home | Country London Hikes");
	include('includes/header.php');
 ?>

<section id="subscribe" class="content">
			<img src="https://cdn2.iconfinder.com/data/icons/harry-potter-solid-collection/60/04_-_Harry_Potter_-_Solid_-_Patronas_Stag-512.png" alt="Country London Icon" id="header-image">
			
			<div class="title">
				<h1 id="title"> Country London Walks</h1>
				<p id="intro">Visit London the Old Way</p>
			</div>
			<form action="https://www.freecodecamp.com/email-submit" id="form" method="get">
				<div >
					<label class="white">For Our Newsletter</label>
				</div>
				<div >
					<input type="email" id="email" placeholder="Enter your email" name="email"><br>
					<input type="submit" id="submit" value="Subscribe" name="submit">
				</div>
			</form>
		</section>
	</header>


	

	<!-- what we do-->

	<section class="what-we-do" id="basic-price">
		<div class="container">
			<!-- <div class="grid-2"> -->
				<div id="what-we-do">
					<i class="fas fa-blind fa-10x"></i>
					<h3>Basic Price: $120 US</h3>
					<p>This is for the walk with the legend Sir John Rogers.
					Rates for additional amenities can be purchased below.</p>
				</div>
				<div >
					<h3>What We Do</h3>
					<iframe width="420" height="300" src="https://www.youtube.com/embed/thpuK399YiY" id="video">

					</iframe>
				</div>
			<!-- </div> -->
		</div>
	</section>
	<!-- services -->
	<section  id="pricing" class="pricing">
		<div class="container">

			<div id="bed">
				<i class="fas fa-bed fa-3x"></i>
				<h3>A Bed Near the Trail</h3>
				<p>Wake in comfort on the trail, your adventure already begun!</p>
				<h2>$60</h2>
				<button class="btn">BUY</button>
			</div>
			<div id="coffee">
				<i class="fas fa-coffee fa-3x" ></i>
				<h3>Coffee and Food </h3>
				<p>During the day long walk, we stop for three meals. Save a seat!</p>
				<h2>$24</h2>
				<button class="btn">BUY</button>
			</div>
			<div id="train">
				<i class="fas fa-train fa-3x"></i>
				<h3>Return Train at Completion</h3>
				<p>At the end, Sir John will walk you to the train station</p>
				<h2>$10</h2>
				<button class="btn">BUY</button>
			</div>
		</div>
	</section>


	<!--  walks -->

	<div id="footer" >
					<div class="column three">
						<strong>Phone</strong>
						903-935-2980
					</div><!--column-->
					<div class="column three">
						<strong>Location</strong>
						Franklin's 
						344 East Rusk Street
						Marshall, TX 75672
					</div><!--column-->
					<div class="column three last">
						<strong>Hours</strong>

						<em>Monday - Wednesday</em><br>
							10:00am - 4:00pm<br><br>

						<em>Thursday - Friday</em><br>
						 	10:00am - 2:00pm<br><br>

						<em>Saturday - Sunday</em><br>
						Closed<br><br>

						<?php include('includes/office_hours.php'); ?>

					</div><!--column-->
					
				</div> <!--footer-->
				<small>&copy; <?php echo date('Y'); ?>  <?php echo $companyName; ?></small>
			</div> <!--content-->
		</div> <!--wrapper-->


	
</body>
</html>