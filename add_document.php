<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<jsp lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CLEAN BLUE</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;
	font-size: 80%;
}
</style>
</head>
<body>
<div id="container">
  <div id="top">
    <h1><center>New Jersey Institute of Technology</center></h1>
    <h3><center>Public Library</center></h3>
    <div class="search">
      <form method="post" action="#">
        <p>&nbsp; </p>
      </form>
    </div>
  </div>
  <div id="navcontainer">
    <ul id="navlist">
        <li><a href="mainlog1.html">Home</a></li>
      <li><a href="add_document.html">Add Document</a></li>
      <li><a href="status_document.php">Search Document</a></li>
      <li><a href="add_reader.html">Add Reader</a></li>
      <li><a href="info.html">Information</a></li>
      </ul>
  </div>
  <div id="active">
    <h2>Welcome to <span style="font-weight:bold; color:#b29b35;">New Jersey Institute of Technology</span> Library</h2>
    </div>
<?php
	$link = mysqli_connect("localhost", "root", "", "library");
	if($link === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$copynumber = mysqli_real_escape_string($link, $_POST['copynumber']);
	$documentid = mysqli_real_escape_string($link, $_POST['documentid']);
	$libraryid = mysqli_real_escape_string($link, $_POST['libraryid']);
	$position = mysqli_real_escape_string($link, $_POST['position']);
	$sql = "INSERT INTO copy (Copy_no, Doc_id, Lib_id, Position) VALUES ('$copynumber', '$documentid', '$libraryid', '$position')";
	if(mysqli_query($link, $sql)){
    	echo "Copy added successfully.";
	} 
	else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	mysqli_close($link);
?>
<br><br><br><br>
<form action ="mainlog1.html" method="post">
<input type="submit" name="submit" value="Log Out">
</form>
<br><br><br><br><br><br><br><br>
  <div id="footer">
    <p><a href="#">homepage</a> |  | &copy; 2016 NJIT | Design by Aditi, Ekta, Tulika|</p>
  </div>
</div>
</body>
</jsp>