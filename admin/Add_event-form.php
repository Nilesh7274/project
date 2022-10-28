<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $event = $_POST["Event_name"];
        $venue = $_POST["venue"];
        $seats = $_POST["seats"];
        $date = $_POST["date"];
        $duration = $_POST["duration"];
        $info = $_POST["info"];

        $conn=mysqli_connect('localhost','root','','cloudclass');
        // include "db.php";

        $q = "insert into event(event,venue,seats,date,duration,event_info) values('$event','$venue','$seats','$date','$duration','$info')";
        $res = mysqli_query($conn,$q);

        if($res)
        {
            echo "<script> alert('Event added successfully')</script>";
        }
        else
        {
            echo "<script> alert('Event not added, please try again')</script>";
        }
    }

?>




<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <body>
        <?php
            include "header.php";
        ?>
<main id="main" class="main">

<div>
<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Event here</h5>

          <!-- General Form Elements -->
          <form action="Add_event-form.php" method="post" style="text-align:center">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Event name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Event_name" placeholder="Event name" required>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Venue</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="venue" placeholder="Place of event" required>
              </div>
            </div>

            
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Available seats</label required>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="seats" placeholder="Seats" required>
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">Date of event</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="date" placeholder="Date" required>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Duration</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="duration" placeholder="Duration of event" required>
              </div>
            </div>

            
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Details of event</label>
              <div class="col-sm-10">
                <textarea class="form-control" style="height: 100px" name="info" placeholder="Enter Information" required></textarea>
              </div>
            </div>
            
            

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add event</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>

  </div>
</section>
</div>
</main><!-- End #main -->
<?php
    include "footer.php";
?>

        </div>
    </body>
</html>