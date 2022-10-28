
		<?php
			include'header.php'
		?>


<br>
	<br>
	<br> 
<center>
<div class="card text-dark bg-light mb-3" style="max-width: 48rem;">
  
	<center>
    <div class="card-header-dark bg-primary"><b><h3>ADD QUESTIONS FOR TEST.</h3></b></div>
	<div class="card-body">
	
    
	</center>
	<html>
	<body>
		<center>
		<table border='0'>
 		<form action='add_question.php' method='post'>
		<tr>
		
			<th>question</th></div>
			<td><input type='text' name='question' required></td>
		</tr>
		<tr>
		 
			<th>option1</th>
			<td><input type='text' name='option1'></td>

		</tr>
                <tr>
			<th>option2</th>
			<td><input type='text' name='option2'></td>

		</tr>
		<tr>
			<th>option3</th>
			<td><input type='text' name='option3'></td>

		</tr>
		<tr>
			<th>option4</th>
			<td><input type='text' name='option4'></td>

		</tr>
		<tr>
			<th>correct_option</th>
			<td><input type='text' name='correct_option' required></td>

		</tr>
		<center>
		<tr>

			<td><br><input type='submit' ></td>
        
		</tr></center>
		</form>
		</table>
		</center>

   
  </div>
	</div>
</center>
 </html>
 <?php
			include'footer.php'
		?>