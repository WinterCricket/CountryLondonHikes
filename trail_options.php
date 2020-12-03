<?php 

define("TITLE", "Trails | Country London Hikes");

include('includes/header.php');

 ?>


<div id="trail_options">
	<h1>Choose a Trail</h1>
		<p>Each Country London trail as a storied history &mdash; John Rogers will guide you into a lost world and how it comes right up to the present.</p>
		<p><em>Please click a menu to learn more!</em></p>
	<hr>

	<section id="pricing" class="pricing">

	<ul class="container"> 

		<?php 

			foreach($trailOptions as $trail => $item) {

		 ?>

		 <li><a href="hike.php?item=<?php echo $trail; ?>"><?php echo $item['title']; ?></a><sup>$</sup><?php echo $item['price']; ?><?php echo $item['blurb']; ?></li>

		<?php } ?>

	</ul>
	</section>
</div><!--menu-items-->



 <?php 

 	include('includes/footer.php');
  ?>