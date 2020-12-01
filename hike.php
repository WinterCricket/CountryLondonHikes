<?php 


define("TITLE", "Hike | Country London Hikes");
include('includes/header.php');

//More about preg_replace: http://php.net/manual/en/function.preg-replace.php

function strip_bad_chars($input){
	$output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
	return $output;
}

if (isset($_GET['item'])){
	$menuItem = strip_bad_chars($_GET['item']);

	$dish = $menuItems[$menuItem];
}

//calculate tip
function suggestedTip($price, $tip){
	$totalTip = $price * $tip;
	echo  $totalTip;
}




 ?>