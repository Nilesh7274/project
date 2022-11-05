
		<?php
		
			include'header.php'
				
		?>
		
		
		
		<main id="main" class="main">	<div class="card">
            <div class="card-body">
              <h5 class="card-title">GET ATTENDANCE REPORT FROM HERE</h5>
              <p> <code></code> <code></code> </p>
              <!-- Small tables -->
			  <table border=0>
		
				<form action="attendance-report.php"method="post">
				
					<tr>
						<th><label>FROM DATE:</label></th>
						<th><input type="date" name="first_date"placeholder="FIRST DATE"autofocus required></th>
					</tr>
					<tr>
						<th><label>TO DATE:</label></th>
						<th><input type="date" name="last_date"placeholder="LAST DATE"autofocus required></th>
					</tr>
					<tr>
						
						<th><input type="submit"></th>
					</tr>
				</form>
				</table>
				
				<?php
				if(isset($_REQUEST['first_date']))
					$first_date=$_REQUEST['first_date'];
				else
					$first_date=date('y-m-d');
				if(isset($_REQUEST['last_date']))
					$last_date=$_REQUEST['last_date'];
				else
					$last_date=date('y-m-d');
				
			include'conn.php';
		//$conn=mysqli_connect('localhost','root','','cloudclass');
		$q="select * from attendance a left join students s on a.roll_no=s.rollno where  date between '$first_date' and '$last_date'";
			 //$q="select * from attendance where roll_no='$roll_no' and date between '2022-10-01' and '2022-10-31'";
			 $result=mysqli_query($conn,$q);
			 
			 
			 $c=0;
		//date_default_timezone_set("Asia/kolkata");
		//$date=date('y-m-d');
		//$query="select a.roll_no,s.name,s.div from attendance a left join students s on a.roll_no=s.rollno where a.date='$date'";
		//$query="select roll_no from attendance where date='$date'"; 
		//$res=mysqli_query($connect,$query);
		
		?>
			  <center><h1 style="color:red"><b>
			  </b>ATTENDANCE REPORT</h1></center>
			  
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
				if(isset($_REQUEST['first_date']))
					while($row=mysqli_fetch_array($result))
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
			include'footer.php';
		?>
	