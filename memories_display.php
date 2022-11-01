<?php

   include "header.php";

   include 'conn.php';

    $q = "select *from memories";
    $res = mysqli_query($conn,$q);
    echo "<main id='main' class='main'>";
    while($row = mysqli_fetch_array($res))
    {
     
     ?>
     
     <section class="section">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="admin/<?php echo $row['img_path']; ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['event_name']; ?></h5>
            <p class="card-text"></p>
          </div>
        </div>
      </section>
            
<?php
  echo '</div>';
    }
    echo "</main>";
    include "footer.php";
?>