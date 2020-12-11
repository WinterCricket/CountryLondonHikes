<?php 

define("TITLE", "Trails | Country London Hikes");

include('includes/header.php');

 ?>


<div id="trail_options">
	<h1>Choose a Trail</h1>
		<p>Each Country London trail as a storied history &mdash; John Rogers will guide you into a lost world, and then show you how it comes right up to the present.</p>
		<p><em>Please click a trail to learn more!</em></p>
	<hr>

	<section id="pricing" class="pricing">

	<div class="container item_container">
		<!-- <div class="item_container"> -->

		<?php 

			foreach($trailOptions as $trail => $item) {

		 ?>

		<div class="member item">
				<!-- <i class="fas fa-bed fa-3x"></i> -->
				<h3 ><a href="hike.php?item=<?php echo $trail; ?>"><?php echo $item['title']; ?></a><sup>$</sup><?php echo $item['price']; ?></a></h3>
				<button class="btn">BUY</button>
			</div>

		

		<?php } ?>
		
	</div>
	</section>
</div><br><br><!--menu-items-->
<hr>



 <?php 

 	include('includes/footer.php');
  ?>