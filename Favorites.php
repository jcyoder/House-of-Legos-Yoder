<?php
	
function createFavoritesSections($connection) {
    $query = "SELECT * FROM favorites WHERE first_name='Janet'";
    $result = $connection->query($query);
    if(!result) {
      die("something went wrong" . $connection->error);
    }
    $rows = $result->num_rows;
    if ($rows > 0) {
        print ("<div class='container'><section class='section-wrapper'>");
        print ("<h2 class='section-title'>Janet's Favorites</h2>");
        print ("<div class='row'>");
       
        while($row = $result->fetch_assoc() ) {
            
            $legoId = $row['lego_num'];

            $collectionquery = "SELECT * FROM lego_collections WHERE lego_num='$legoId'";
            $infoResult = $connection->query($collectionquery);

            if(!infoResult) {
              die("something went wrong" . $connection->error);
            } else {
                $row2 = $infoResult->fetch_assoc();
                
    ?>
                <div class="col-md-4">
                  <?php  printf("The collection name is: %s\n", $row2['collection_name']);
                    printf("While loop lego num: %s\n", $row['lego_num']); ?> 
                    <div class="col-box">
                  <?php
                      $test = $row2['pic_url'];
                      printf("the url is: %s\n", $test);
                      // print '<img class="img-responsive" src="'. $row2['pic_url'] . '" alt="" />';
                       print '<h3>' . $row2['collection_name'] .'</h3>';
                       print '<h4>Category: ' . $row2['category_name'] . '</h4>';
                  ?>
                    </div>
                </div>
    <?php
            }
        }      
      
        ?>
        </div>
    </section>
</div>
        <?php
    }
}

?>