<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    
        $conn=mysqli_connect('localhost','root','','cloudclass');
        // include "db.php";

        $name = $_REQUEST['name'];
        $mobile = $_REQUEST['mobile'];
        $event = $_POST['event'];

        $q2 = "insert into participants(name,mobile,event) values('$name','$mobile','$event')";
        $res2 = mysqli_query($conn,$q2);

        if($res2)
        {
            echo "<script> alert('Form submit')</script>";
        }
        else
        {
            echo "<script> alert('Form not submit, please try again')</script>";
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
            $conn=mysqli_connect('localhost','root','','cloudclass');
            $q = "select * from event";
            $res = mysqli_query($conn,$q);
        ?>
<main id="main" class="main">

<div>
<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Fill form</h5>

          <form action="participants.php" method="post" style="text-align:center">

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Student name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Student name" required>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Mobile</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="mobile" placeholder="enter mobile number" required>
              </div>
            </div>

            <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example"name="event">
                      <option selected>------</option>
                      <?php
                        while($row = mysqli_fetch_array($res))
                        {
                      ?>  
                      <option value="<?php echo $row['event'];?>" ><?php echo $row['event'];?></option>
                      <?php
                        }
                      ?>
                    </select>
                  </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
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