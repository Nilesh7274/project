<html>
	<head>
	</head>
	<body>
		<?php
			//session_start();
			include'header.php'
		?>
	<?php
			  
			  //include 'db.php'
			  $connect=mysqli_connect('localhost','root','','cloudclass');
			  if(isset($_REQUEST['roll_no']))
				  $roll_no=$_REQUEST['roll_no'];
			  else
				  $roll_no=21164;
				
			  date_default_timezone_set("Asia/kolkata");
			  $date=date('y-m-d');
			  $get_working_days="select DISTINCT(date) from attendance where date between '2022-10-01' and '$date'";
			 //$get_working_days="select DISTINCT(date) from attendance where date between '2022-10-01' and '2022-10-31'";
				$result2=mysqli_query($connect,$get_working_days);
			 $count_working_days=mysqli_num_rows($result2);
			 
			 
			$q="select * from attendance where roll_no='$roll_no' and date between '2022-10-01' and '$date'";
			 //$q="select * from attendance where roll_no='$roll_no' and date between '2022-10-01' and '2022-10-31'";
			 $result=mysqli_query($connect,$q);
			 $count=mysqli_num_rows($result);
			 echo $count;
			 
			 $query_search_name="select a.roll_no,s.name from attendance a left join students s on a.roll_no=s.rollno where a.roll_no='$roll_no'";
			 $attendance_result=mysqli_query($connect,$query_search_name);
			 $row=mysqli_fetch_array($attendance_result);
			 
			  ?>
			<main id="main" class="main">	<div class="card">
             <div class="card-body">
              <center><h3 class="card-title">SEARCH ATTENDANCE HERE</h3></center>
			  
              <!-- Small tables -->
			  <table border=0>
		
				<form action="attendance-search.php"method="post">
				
					<tr>
						<th><label>ROLL NO:</label></th>
						<th><input type="number" name="roll_no"placeholder="ROLL NO"autofocus required></th>
					</tr>
					
					<tr>
						
						<th><input type="submit" value="search"></th>
					</tr>
				</form>
				</table>
				
				<center><h1 style="color:red"><b> 
				<?php 
				
				if(isset($row['name']))
					echo $row['name'];
				else
					echo "INVALID STUDENT";
				?></b></h1></center>
		
		
				<!-- Pie Chart -->
              <canvas id="pieChart" style="max-height: 450px;"></canvas>
			  
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: [
                        
                        'PRESENT',
						'ABSENT',
                        
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [<?php 
						$present_percent=$count/$count_working_days*100;
									$absent_percent=100-$present_percent;
						echo "{$present_percent},{$absent_percent}";?>],
                        backgroundColor: [
                          'rgb(0, 0, 255)',
                          'rgb(255, 0, 0)',
                          
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Pie CHart -->
			  
		     </div>
			</main>

		
	</body>
</html>
<?php
			include'footer.php'
		?>