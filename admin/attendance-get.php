
		<?php
			include'header.php'
		?>
		<main id="main" class="main">	<div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p> <code></code> <code></code> </p>
              <!-- Small tables -->
			  <center><h1 style="color:red"><b>GET ATTENDANCE HERE</b></h1></center>
		
		
			<center>
			<h1  style="color:green"><b><?php
			date_default_timezone_set("Asia/kolkata");
			$date=date('d-M-Y');
			echo"$date"?></b></h1>
			
			<table border=0>
		
				<form action="attendance-save.php"method="post">
				
					<tr>
						<th><label>ROLL NO:</label></th>
						<th><input type="number" name="roll_no"placeholder="ROLL NO"autofocus required></th>
					</tr>
					<br>
					<br>
					<tr>
						
						<th><input type="submit"></th>
					</tr>
				</form>
				</table>
				<br><br>
		
			</center>
			</div>
		</main>
			
			

		
		<?php
			include'footer.php'
		?>
		
		
            
