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
      <li><a href="reader_search_document.html">Search Document</a></li>
            <li><a href="reserve_document.html">Reserve a Document</a></li>
            <li><a href="publish.php">Published Document</a></li>
            <li><a href="reserve_document.html">Status</a></li>
      </ul>
  </div>
  <div id="active">
    <h2>Welcome to <span style="font-weight:bold; color:#b29b35;">New Jersey Institute of Technology</span> Library</h2>
    <?php
  	$con = mysqli_connect("localhost","root","");
  	if(!$con){
  		die(" Cannot connect: " . mysql_error());
  	}
  	mysqli_select_db($con,"library");


	$sql1 = "SELECT * FROM borrows";
  	$retval = mysqli_query($con,$sql1);
  	while($record = mysqli_fetch_array($retval,MYSQLI_ASSOC)){
      $due_date = new DateTime($record['Due_Date']);
      $return_date = new DateTime($record['ret_date']);
      $interval = date_diff($due_date, $return_date);
      $days = (int)$interval->format('%R%a days');
      $fine = 00.0;
      if($days > 0) {
      	$fine = $days * 20;
      	$id = $record['Bor_number'];
      	$update = "update borrows set Fine = ".$fine." where Bor_number = ".$id;
      	mysqli_query($con,$update);
      }
      
	 
    }
		$username=mysqli_real_escape_string($con,$_POST['id']);
		$sql = "SELECT b.Doc_id, b.Copy_no, b.Lib_id, b.Due_Date, b.Fine FROM borrows b, reader r WHERE b.Card_no = r.Card_no and r.Card_no='".$username."'";
    $myData = mysqli_query($con,$sql);
    echo "<table border=1>
    <tr>
    <th>Document Id</th>
    <th>Copy number</th>
    <th>Library Id</th>
    <th>Due Date</th>
    <th>Fine</th>
    </tr>";
    while($record = mysqli_fetch_array($myData,MYSQLI_ASSOC)){
    	echo "<tr>";
    	echo "<td>" . $record['Doc_id'] . "</td>";
    	echo "<td>" . $record['Copy_no'] . "</td>";
    	echo "<td>" . $record['Lib_id'] . "</td>";
    	echo "<td>" . $record['Due_Date'] . "</td>";
    	echo "<td>" . $record['Fine'] . "</td>";
    	echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
?>

  </div>
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