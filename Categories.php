

<?php
	require_once 'login.php';
 //   $favorites = require 'favorites.json';

	
function createCategoryMenu($connection) {
    $query = "SELECT * FROM categories";
   
    $result = $connection->query($query);
   if(!result) {
      die("something went wrong" . $connection->error);
    }
    print('<ul class="dropdown-menu">');
    $rows = $result->num_rows;
    //print("num rows: " . $rows);
    for($i = 0; $i < $rows; ++$i) {
        $result->data_seek($i);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        print('<li><a href="' . $row['URL']  . '">' . $row['name'] . '</a></li>');
    }
    print('</ul>');
    
    $result->close();
	
	 //$json_a = json_decode($categories, true);
	// foreach($json_a[Categories] as $category) {
	// 	output += '<li><a href="' . $category[URL] . '" class="list-group-item category-item">' . $category[name] . '</a></li>';
	// }
	 
}

function createCategorySideBar($connection){
    $query = "SELECT * FROM categories";
   
    $result = $connection->query($query);
   if(!result) {
      die("something went wrong" . $connection->error);
    }
    $rows = $result->num_rows;

    for($i = 0; $i < $rows; ++$i) {
        $result->data_seek($i);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        print('<a href="' . $row['URL']  . '"class="list-group-item category-item">' . $row['name'] . '</a>');
    }
    $result->close();
}

?>