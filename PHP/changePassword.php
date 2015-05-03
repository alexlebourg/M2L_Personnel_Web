<?php
include_once 'DB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	if (!empty($_POST['nPwd1']))
	{
		$_SESSION['nPwd1'] = $_POST['nPwd1'];
	}
	
	if (!empty($_POST['nPwd2']))
	{
		$_SESSION['nPwd2'] = $_POST['nPwd2'];
	}
	
	
	if (!empty($_POST['nPwd1']) && !empty($_POST['nPwd2']))
	{
		if ($_SESSION['nPwd1'] == $_SESSION['nPwd2'])
		{
			ChangePass();
			$_SESSION['modif']="1";
		}
		else
		{
			$_SESSION['modif']="2";
		}
	}
	else
		$_SESSION['modif']="3";
	

}




?>
