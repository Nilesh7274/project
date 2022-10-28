
<?php



include 'header.php';

if(!isset($_SESSION))
{
 // echo "You Are LogOut";
  header('location:login.php');
}


?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
                //include 'conn.php'; 
                //$q="select * from admins"; 
                //$res=mysqli_query($conn,$q);
                //$row=mysqli_fetch_array($res);

                // $name=$row['admin_name'];
                 //$id=$row['admin_id'];
                 //$email=$row['admin_email'];
                 //$div=$row['admin_dept']; 
                 //$phone=$row['admin_phone'];

                 //echo $name;
                 ?>

                 <h6><?php echo $row['admin_name']; ?> </h6> 


    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="<?php echo $p;?>" alt="Profile" class="rounded-circle">
              <h2><?php echo $row['admin_name']; ?></h2>
              <h3>Teacher</h3>
              <div class="social-links mt-2">
                
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>


                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"> <?php echo $row['admin_name']; ?> </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">ID</div>
                    <div class="col-lg-9 col-md-8"> <?php echo $row['admin_id']; ?> </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Dept</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['admin_dept']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"> <?php echo $row['admin_email']; ?> </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['admin_phone']; ?></div>
                  </div>


                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="profile_update.php" method="post" enctype="multipart/form-data" >
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">




                        <img src="<?php echo $p; ?>" alt="Profile">
                        <div class="pt-2">
                          <a href="" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload">
                           
                          </i> <input type="file" name="photo" value="<?php echo$p;?>"></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input readonly type="text" class="form-control" id="fullName"  value="<?php echo $row['admin_name']; ?>">
                      </div>
                    </div>

        
                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">ID</label>
                      <div class="col-md-8 col-lg-9">
                        <input readonly name="id" type="text" class="form-control" id="company" value="<?php echo  $row['admin_id'] ?>">
                      </div>
                    </div>


                    
                    

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $row['admin_phone'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $row['admin_email'] ?>">
                      </div>
                    </div>

                    

                    <div class="text-center">
                      <?php echo" <a href='profile_update.php'><button type='submit' class='btn btn-primary'> Save Changes</button> </a>";?>
                    </div>
                  </form><!-- End Profile Edit Form -->
s
                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php
   include 'footer.php';
?>