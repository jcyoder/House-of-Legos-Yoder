
<?php
	
	require_once 'login.php';
    require_once 'Categories.php';
?>

<?php 
    $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
	    if($connection->connect_error) {
		    die('connect error:' . $connection->connect_error);
	    } else {
            //printf("yay! I'm connected");
	    }  
?>
 
<nav class="navbar navbar-default">
  		<div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      
		    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="index.php">Home</a></li>
	        <li class="dropdown collection-menu">
	        	 <a href="/"class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Collections <span class="caret"></span></a>
                
               <?php 
                    createCategoryMenu($connection); 
               
                ?> 
            </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Collections <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="/">Create New Category</a></li>
	            <li><a href="/">Add to Collection</a></li>
	            <li><a href="/">Remove from Collection</a></li> 
	            <li><a href="/">Edit Collection</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>