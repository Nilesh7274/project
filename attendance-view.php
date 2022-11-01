<html>
	<head>
	</head>
	<body>
		<?php
			
			include'header.php'
		?>
	<?php
			  
			  include 'conn.php';
			  //$conn=mysqli_connect('localhost','root','','cloudclass');
			 
			  $student=$_SESSION['student'];
			  $roll_no=$student['rollno'];
			  date_default_timezone_set("Asia/kolkata");
			  $date=date('y-m-d');
			  $get_working_days="select DISTINCT(date) from attendance where date between '2022-10-01' and '$date'";
			 //$get_working_days="select DISTINCT(date) from attendance where date between '2022-10-01' and '2022-10-31'";
				$result2=mysqli_query($conn,$get_working_days);
			 $count_working_days=mysqli_num_rows($result2);
			 
			 
			$q="select * from attendance where roll_no='$roll_no' and date between '2022-10-01' and '$date'";
			 //$q="select * from attendance where roll_no='$roll_no' and date between '2022-10-01' and '2022-10-31'";
			 $result=mysqli_query($conn,$q);
			 $count=mysqli_num_rows($result);
			 echo $count;
			 
			  ?><main id="main" class="main">	<div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p> <code></code> <code></code> </p>
              <!-- Small tables -->
			  <center><h1 style="color:red"><b>YOUR ATTENDANCE</b></h1></center>
		
		
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