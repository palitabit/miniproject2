<?php
//-- if04.php
	$score="85"; //เปลี่ยนตรงนี้
if($score > 80 )
	{
			echo "GRADE  A ";
		} elseif ($score > 70)
	{
			echo "GRADE  B";
		} elseif ($score > 60)
	{
			echo "GRADE  C";
		} elseif ($score > 50)
	{
			echo "GRADE  D";
		}else 
		{
			echo "GRADE  F ";
		}
?>

			