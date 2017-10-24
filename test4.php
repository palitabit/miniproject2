<?
		// test4.php
		# :DDDDDDDDDDDDDDDDDDDDDDDDDDDD
		$num1 = 200;
		$num2 = 300;
		$sum = $num1+$num2;
		$fullname = "Palita R";
		$position = "Web Programmer";
		$salary = 100000;
		$br ="<br>"; // ประกาศตัวแปลขึ้นบรรทัดใหม่
		//echo " $num1 + $num2 = $sum <br> ";
		//echo " ชื่อ   $fullname"; 
		//echo" <br>ตำแน่ง  :$position <br>";
		//echo " เงินเดือน : $salary <br>";
		//echo " $num1 + $num2 = $sum <br> ";
		echo " ชื่อ"  . $fullname. "<br>"; // วิธีที่1
		echo" ตำแน่ง " .$position . $br ;  // วิธีที่2
		echo " เงินเดือน : $salary ";

?>