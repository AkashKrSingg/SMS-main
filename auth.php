<?php 	

	session_start();
	//Start session
	
	//Check whether the session variable SESS_MEMBER_ID is present or not

	if(!isset($_SESSION['email']) || (trim($_SESSION['email']) == null))
	{
		header("Location:index.php");
	}
?>
    