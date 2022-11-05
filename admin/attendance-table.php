
		<?php
		
			include'header.php';
		?>
		
		<?php
		include'conn.php';
		//$conn=mysqli_connect('localhost','root','','cloudclass');
		$c=0;
		date_default_timezone_set("Asia/kolkata");
		$date=date('y-m-d');
		$query="select a.roll_no,s.name,s.div from attendance a left join students s on a.roll_no=s.rollno where a.date='$date'";
		//$query="select roll_no from attendance where date='$date'"; 
		$res=mysqli_query($conn,$query);
		
		?>
<main id="main" class="main">	<div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p> <code></code> <code></code> </p>
              <!-- Small tables -->
			  <center><h1 style="color:red"><b>TODAY'S  ATTENDANCE </b></h1></center>
			  
              <table class="table table-sm">
                <thead>
                  <tr>
                   <th scope="col">#</th>
                    <th scope="col">ROLL NO</th>
					<th scope="col">NAME</th>
					<th scope="col">DIV</th>
                    
                  
                   
                  </tr>
                </thead>
                <tbody>
				<?php
				while($row=mysqli_fetch_array($res))
				{
					$c++;
					
	
				?>
                    <tr>
                    <td><?php echo$c;?></td>
                    <td><?php echo$row['roll_no'];?></td>
					<td><?php echo$row['name'];?></td>
					<td><?php echo$row['div'];?></td>
                    
                    
					</tr>
                 
                </tbody>
				<?php
				}
				?>
              </table>
			  
              <!-- End small tables -->

            </div>
			</main>
          </div>
		 </div>
		 

		<?php
			include'footer.php'
		?>
	