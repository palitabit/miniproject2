<?php
//-- mygpa02.php
	$score ="81";
	switch($score)
	{
		case ($score>=80) :
			echo "GRADE A" ;
			break;
		case ($score>=75):
			echo "GRADE B+";
			break;
		case ($score>=70):
			echo"GRADE B";
			break;
		case ($score>=65):
			echo"GRADE C+";
			break;
		case ($score>=60):
			echo"GRADE C";
			break;
		case ($score>=55):
			echo"GRADE D+";
			break;
		case ($score>=50):
			echo"GRADE D";
			break;
		default:
			echo "GRADE F";
	}
?>
