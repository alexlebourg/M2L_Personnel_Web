<?php
include_once 'DB.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (!empty($_POST['listeMembres']))
	{
			$_SESSION['idMembre'] = $_POST['listeMembres'];
	}
}

SupprimeMembre();



?>