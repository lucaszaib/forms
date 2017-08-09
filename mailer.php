<?php

$category = $_POST['category'];
$products = $_POST['products'];
$price 	  = $_POST['price'];

foreach ($category as $key => $value) {
	print "Category=> ".$value."<br>Product=> ".$products[$key]."<br>Price=> ".$price[$key]."<br><hr>";
}

?>