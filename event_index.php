<?php
    include "header.php";

    // include "db.php";
    $conn=mysqli_connect('localhost','root','','cloudclass');

    $q = "select * from event";
    $res = mysqli_query($conn,$q);

?>
<main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-8">
        
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
        
              <!-- Slides with captions -->
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/event1.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>JALLOSH 2K22</h5>
                      <p></p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/independanceDay.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>INDEPENDANCE DAY </h5>
                      <p></p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/pinnacle1.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>PINNACLE 2K22</h5>
                      <p></p>
                    </div>
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div><!-- End Slides with captions -->

            </div>
          </div>
    
        </div>
      </div>

    </section>
    
  <section class="section">
      <div class="col align-items-top">
        <div class="col-lg-8">
        <h2>Event shedule</h2>
        <br><br>
        <?php
          while($row = mysqli_fetch_array($res))
          {
        ?>
         <!-- Card with header and footer -->
        <div class="card">
          <div class="card-header"></div>
          <div class="card-body">
            <h5 class="card-title">Event <?php echo $row['event'];?></h5>
            <!-- <p>Event: <?php echo $row['event'];?></p> -->
            <p>Venue: <?php echo $row['venue'];?></p>
            <p>Seats: <?php echo $row['seats'];?></p>
            <p>Date: <?php echo $row['date'];?></p>
            <p>About event: <?php echo $row['event_info'];?></p>
          </div>
        </div><br>
          
        <?php
          }
        ?>
                      
        </div>
      </div>
    </section>
  </main>

    <?php
    include "footer.php";
    ?>