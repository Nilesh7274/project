<?php
    include "header.php";

    $conn=mysqli_connect('localhost','root','','cloudclass');

    $q = "select *from participants";
    $res = mysqli_query($conn,$q);
?>
<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-6">
        
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Participants</h5>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Mobile number</th>
                    <th scope="col">Event</th>
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
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['event']; ?></td>  
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