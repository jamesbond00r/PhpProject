<?php 

function insert_categories(){

global $connection;

if(isset($_POST['submit'])) {

	$cat_title = $_POST['cat_title'];

	 if($cat_title == "" || empty($cat_title)){
	 	echo "Input can not be blank.";
	 } else {

	 	$query = "INSERT INTO categories(cat_title) ";
	 	$query .= "VALUE('{$cat_title}') ";
	 	$create_category_query = mysqli_query($connection, $query);

	 	if(!$create_category_query){

	 		die('Something went wrong' > mysqli_error($connection));
	 	}
	 }
}

}



?>