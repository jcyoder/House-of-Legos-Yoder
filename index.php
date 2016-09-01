 <?php
	require_once 'header.php';
    require_once 'login.php';
    require_once 'Favorites.php';
?>

<body>
	<img src="images/homepage-picture.jpg" alt="House of Legos" />
	
<?php
	require_once 'navigation.php';
?>
    
   	<div class="container">
		<div class="row">
	  		<div class="col-md-3">
			  	<br><br>
			  	<h2>Collections</h2>
				<div class="list-group" id="category-items">
                   <?php
                       createCategorySideBar($connection);
                   ?> 
				</div>
	  		</div>
		  	<div class="col-md-9">
		  		<div class="section-white">
		   			<h1>Welcome to the House of Legos</h1>
		   		
				  	<p>
				  		This site contains the Yoder family's Lego Collection.  They are avid Star Wars and Harry Potter Fans,
				  		so most of their collection is in these two categories.
				  	</p>
				  	<img class="img-responsive pic-layout-center" src="images/yoder-family.jpg" alt="Yoder family"/>
				</div>
   		
	  		</div>
		</div>
   	</div>
    <?php createFavoritesSections($connection);  ?>
   	<div class="favorites">
      
	</div>

<?php 
	require_once 'footer.php';
?> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/newscript.js"></script>
    <script type="text/javascript">
        var jsonFavoritesData = <?php require 'favorites.json';?>;
        console.log(jsonFavoritesData);
        initPage(jsonFavoritesData);
    </script> 
    
    <script src="js/jquery-3.1.0.min.js"></script>

  </body>
</html>
