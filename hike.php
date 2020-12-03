<?php 


define("TITLE", "Hike | Country London Hikes");
include('includes/header.php');

//More about preg_replace: http://php.net/manual/en/function.preg-replace.php

function strip_bad_chars($input){
	$output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
	return $output;
}

if (isset($_GET['item'])){
	$trailOption = strip_bad_chars($_GET['item']);

	$trail = $trailOptions[$trailOption];
}

//calculate tip
function suggestedTip($price, $tip){
	$totalTip = $price * $tip;
	echo  $totalTip;
}




 ?>

 <hr>
 <div id="hike">
 	<h1><?php echo $trail['title']; ?><span class="price"><sup>$</sup><?php echo $trail['price']; ?></span></h1>
 	<p><?php echo $trail['blurb']; ?></p>
 	<br>
 	<!-- php in here for drink -->
 	<p><em>Suggested Tip: <sup>$</sup><?php suggestedTip($trail['price'], 0.20); ?></em></p>
 </div><!--dish-->
 <hr>
 <a href="trail_options.php" class="button previous">&laquo; Back to Menu</a>
 <?php include('includes/footer.php'); ?>
