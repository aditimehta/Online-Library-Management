<?php

		require('connect.php');		
		$username=mysqli_real_escape_string($link,$_POST['username']);
		$password=mysqli_real_escape_string($link,$_POST['password']);
		if(!isset($_POST['username']) || !isset($_POST['password']))  { 
			echo("<SCRIPT LANGUAGE='Javascipt'>
				   window.alert('You did not complete all of the required fields')
				   window.location.href='adminlog.html'
				   </SCRIPT>");
			exit();
	}
	else {
	$sql= mysqli_query($link,"SELECT * FROM `admin` WHERE `Admin_id` ='$username' AND `Password` ='$password'");
		$data = mysqli_num_rows($sql);
		if($data > 0){
			echo ("<SCRIPT LANGUAGE='JavaScript'>
        	window.alert('Login Succesfully!.')
        	window.location.href='adminmain.html'
        	</SCRIPT>");
			exit();
		}
		else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
        	window.alert('Wrong username password combination.Please re-enter.')
        	window.location.href='adminlog.html'
        	</SCRIPT>");
			exit();
		}
	}
?>