
		<?php
			include'header.php'
		?>



<!--<center> -->
<main id="main" class="main">	<div class="card">
            <div class="card-body">
 <?php
//echo "<pre>";
//print_r($_REQUEST);

$ques=$_REQUEST['que_id']; 
include 'conn.php';
//$conn=mysqli_connect('localhost','root','','cloud_class');
/*if($conn)
	echo"connected";
else
	echo"connected";
*/
$c=0;
$k=0;
echo "<br>";
echo "<br>";
echo "<br>";
//echo"<h1>"."YOUR ANSWER SHEET AND SCORE :"."</h1>";
echo "<span style='color:blue'><h3>"." YOUR ANSWER SHEET AND SCORE :"."</h3></span>";
foreach($ques as $q)
{
	$query="select * from questions where question_id=$q";

	$res=mysqli_query($conn,$query);
	$row=$q_data=mysqli_fetch_array($res);
	$k++;
	//echo 'Que Id:'.$q;
	

echo "<br>";?>
<div class="card text-dark bg-light mb-3" style="max-width: 48rem;"></div>
  <div class="card-header"><?php echo "<span style='color:blue'><br>"."Q.".$k.":"."</span>".$q_data['question'];?></div>
	<?php echo "<br>";
	
	for($i=1;$i<=4;$i++)
	{	
		$style='';
		
		echo  " <input type='radio' disabled $style";
		if($_REQUEST['ans_'.$q]==$i)
		{
			echo 'checked';
		}
		echo " name='ans_".$row[0]."' value='$i'>";
		if($q_data['correct_option']==$_REQUEST['ans_'.$q] and $_REQUEST['ans_'.$q]==$i)
		{
		 echo "<span style='color:green'><b>".$row[1+$i]."</b></span>";
			$c++;
		//echo"</div>";	
   } else {
			//echo $row[1+$i];
			 echo"<span style='color:red'>".$row[1+$i]."</span>";
		}
		
		//echo"</div>";
		echo "<br>";
	}
	//echo $c;
}
//echo"<h1>"."YOUR RESULT =".$c."/10"."<h1>";
echo "<br>";
						
echo "<span style='color:blue'><h2>". $ro['name']." , your score is : =".$c."/10"."</h2></span>";
?>

          </div>
		  </div>
		  </main>
 

<!--</center>-->

		
		<?php
			include'footer.php'
		?>