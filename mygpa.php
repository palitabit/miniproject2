<?php
	// MyGPA.php
	
	 echo "น.ส. ปาลิตา รื่นสักขี <br> " . " Web Programming and Development <br>";  
	$score=80;
		if($score>=80)
	{
		echo"GRADE<font color='pink' size='+3'> A</font>";
		}elseif ($score>=75)
	{
		echo"GRADE<font color='blue' size='+2'> B+</font>";
		}elseif ($score>=70)
	{
		echo"GRADE <font color='yellow' size='+2'>B</font>";
		}elseif ($score>=65)
	{
		echo"GRADE <font color='green' size='+2'>C+</font>";
		}elseif ($score>=60)
	{
		echo"GRADE <font color='orange' size='+2'>C</font>";
		}elseif ($score>=55)
	{
		echo"GRADE <font color='gray' size='+2'>D+</font>";
		}elseif ($score>=50)
	{
		echo"GRADE <font color='red' size='+2'> D</font>";
		}else
	{
	echo"GRADE F";
	}
?>