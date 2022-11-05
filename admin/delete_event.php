<?php
    include "header.php";

    include 'conn.php';

    $q = "select *from event";
    $res = mysqli_query($conn,$q);
?>
<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-6">
        
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Events</h5>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <?php
                $c = 1;
                while($row = mysqli_fetch_array($res))
                {

                ?>
              <!-- Default Table -->
                
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $c++; ?></th>
                    <td><?php echo $row['event']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    
                    <td><a href=<?php echo " 'del.php?event_id={$row['event_id']}'"?>>Delete</a></td>
                  </tr>
                </tbody>
                <?php
                }
                ?>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
          </div>
      </div>
</section>
</main>

<?php
    include "footer.php";
?>