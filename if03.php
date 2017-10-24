<?php
//-- if03.php
	$name="admin"; //เปลี่ยนตรงนี้
	if ($name== "manager")
	{
			echo "ยินดีต้อนรับ คุณผู้จัดการ";
	}elseif ($name=="admin")
	{
			echo "ยินดีต้อนรับ คุณคือผู้ดูแลระบบ";
	}elseif ($name=="webmaster")
	{	
		echo "ยินดีต้อนรับ คุณคือผู้ดูแลเว็บไซต์";
	} else 
		{
			echo "ยินดีต้อนรับ คุณคือผู้ใช้งาน";
		}
?>