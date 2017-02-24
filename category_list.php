<?php
require_once('database.php');

// Get all categories
$query = 'SELECT * FROM categories
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
    
    <table>
      <tr>
		<th>Name</th>
		<th>&nbsp;</th>
      </tr>
	<th>
	
             <?php foreach ($categories as $category) : ?>
	<tr>
	<ul>
	<td>
	     <a href=".?category_id=<?php echo  $category['categoryID']; ?>">
	    <?php echo $category['categoryName']; ?>
                 </a>
            
     
	</td>
        <td> 
   	
	
		<form action="delete_catergory.php" method="post">
		<input type="hidden" name="category_id" value ="2">
		<input type="submit" value="Delete">
		</form>
	
	</tr>
	</ul>
	</td>
	     <?php endforeach; ?>
	
	</th>

 
  
  <!-- add code for the rest of the table here -->
    
    </table>

    <h2>Add Category</h2>
    <form action="add_category.php" method="post"
    id="add_category_form">
    <label>Name</label>
    <input type="text" name="name">
    <input id="add_category_button" type="submit" value="Add">
    </form>		
    <!-- add code for the form here -->
    
    <br>
    <p><a href="index.php">List Products</a></p>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
