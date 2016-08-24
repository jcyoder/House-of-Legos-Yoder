

<?php
	require_once 'login.php';
	//$categories = require 'categories.json';
 //   $favorites = require 'favorites.json';

function ConnectionHoLDB() {
	
	$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
	if($connection->connect_error) {
		
		die($connection->connect_error);
	} 

	return $connection;
}
	
function getCategories() {
	$output = '';
	//echo '<li>hi</li>';
	 //$json_a = json_decode($categories, true);
	// foreach($json_a[Categories] as $category) {
	// 	output += '<li><a href="' . $category[URL] . '" class="list-group-item category-item">' . $category[name] . '</a></li>';
	// }
	 
}

?>