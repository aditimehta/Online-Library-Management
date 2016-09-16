<?php

		require('connect.php');		
		$cardnumber=mysqli_real_escape_string($link,$_POST['cardnumber']);
		$rname=mysqli_real_escape_string($link,$_POST['rname']);
		if(!isset($_POST['cardnumber']) || !isset($_POST['rname']))  { 
			echo("<SCRIPT LANGUAGE='Javascipt'>
				   window.alert('You did not complete all of the required fields')
				   window.location.href='readerlog.html'
				   </SCRIPT>");
			exit();
	}
	else {
	$sql= mysqli_query($link,"SELECT * FROM `reader` WHERE `Card_no` ='$cardnumber' AND `RName` ='$rname'");
		$data = mysqli_num_rows($sql);
		if($data > 0){
			echo ("<SCRIPT LANGUAGE='JavaScript'>
        	window.alert('Login Succesfully!.')
        	window.location.href='reader_search_document.html'
        	</SCRIPT>");
			exit();
		}
		else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
        	window.alert('Wrong username password combination.Please re-enter.')
        	window.location.href='readerlog.html'
        	</SCRIPT>");
			exit();
		}
	}
?>