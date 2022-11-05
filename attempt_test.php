
		<?php
			include'header.php'
		?>
		

<?php
include 'conn.php';
/*if($conn)
	echo"connected";
else
	echo"connected";
*/

$query="select * from questions order by rand() limit 10";
$res=mysqli_query($conn,$query);
$c=1;
?>
<main id="main" class="main">	<div class="card">
<form action='test-save.php' method='post'>


<?php
while($row=mysqli_fetch_array($res))
{?>
	
	
	
	<!--<div class="card text-dark bg-light mb-3" style="max-width: 48rem;">-->
		
	<div class="card">
	<div class="card-body">
  <div class="card-header" ><?php echo "<b>".$c.".".$row[1]."</b><br>";?></div>
  
    <h5 class="card-title"><?php echo "<input type='hidden' value='".$row[0]."' name='que_id[]'>"; ?>
	<?php echo  " <input type='radio' name='ans_".$row[0]."' value='1' required>".$row[2]."<br>"; ?>
	<?php echo  " <input type='radio' name='ans_".$row[0]."' value='2'>".$row[3]."<br>"; ?>
	<?php echo  " <input type='radio' name='ans_".$row[0]."' value='3'>".$row[4]."<br>"; ?>
	<?php echo  " <input type='radio' name='ans_".$row[0]."' value='4'>".$row[5]."<br>"; ?> </h5> 
    
	</div>
	</div>

	
<?php
	//echo "<br>";
	//echo "<br>";
	//echo "<br>";
	//echo "<b>".$c.".".$row[1]."</b><br>";
	//echo "<input type='hidden' value='".$row[0]."' name='que_id[]'>";
	//echo  " <input type='radio' name='ans_".$row[0]."' value='1'>".$row[2]."<br>";
	//echo  " <input type='radio' name='ans_".$row[0]."' value='2'>".$row[3]."<br>";
	//echo  " <input type='radio' name='ans_".$row[0]."' value='3'>".$row[4]."<br>";
	//echo  " <input type='radio' name='ans_".$row[0]."' value='4'>".$row[5]."<br>";
	
	++$c;
}
?>
<center><input type='submit'></center>
</form>
</main>

	

<?php
			include'footer.php'
		?>
		