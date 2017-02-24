<?php


$category_id = filter_input(INPUT_POST, 'category_id',
FILTER_VALIDATE_INT);



if ($category_id == null || $category_id == false)
{
$error = "Invalid Category data. Check all fields and try again.";
include('error.php');
}
else {
    require_once('database.php');

        // Add the product to the database
$query = 'INSERT INTO categoryID
         (categoryID)
	 VALUES
	(:category_id)';
$statement = $db->prepare($query);
$statement->bindValue(':category_id', $category_id);
				     
$statement->execute();
$statement->closeCursor();
include('index.php');
}
?>























?>
