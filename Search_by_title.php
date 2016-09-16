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
            <li><a href="reserve_list.html">Reserved Documents</a></li>
            <li><a href="publish.php">Published Documents</a></li>
            <li><a href="return.html">Return Document</a></li>
            <li><a href="reserve_document.html">Status</a></li>
      </ul>
  </div>
  <div id="active">
    <h2>Welcome to <span style="font-weight:bold; color:#b29b35;">New Jersey Institute of Technology</span> Library</h2>
    
    
  </div>
  <?php
  	$con = mysqli_connect("localhost","root","");
  	if(!$con){
  		die(" Cannot connect: " . mysql_error());
  	}
  	mysqli_select_db($con,"library");
		$username=mysqli_real_escape_string($con,$_POST['Title']);
		$sql = "SELECT document.Title, copy.Doc_id, copy.Copy_no, copy.Lib_id FROM document join copy on document.Doci_id=copy.Doc_id WHERE Title= '".$username."' ;";
    $myData = mysqli_query($con,$sql);
     echo "<table border=1>
    	<tr>
    	<th>Document Title</th>
    <th>Document_ID</th>
    <th>Copy Number</th>
    <th>Library ID</th>
    	</tr>";
    	while($record = mysqli_fetch_array($myData,MYSQLI_ASSOC)){
    		echo "<tr>";
    		echo "<td>" . $record['Title'] . "</td>",
      "<td>" . $record['Doc_id'] . "</td>",
      "<td>" . $record['Copy_no'] . "</td>",
      "<td>" . $record['Lib_id'] . "</td>";
      
    		echo "</tr>";
    	}
    
    	echo "</table>";

    echo "<form action='checkout.php', method='post'>
    <br>
    <br>
      Enter the information to Borrow a book:
      <br>
      Card Number
      <input type='text', name='idr'>
      <br>
      Document ID
      <input type='text', name='doc'>
      <br>
      Copy Number
      <input type='text', name='cop'>
      <br>
      Library ID
      <input type='text', name='lib'>
      <br>
      <br>
      <input type='submit', name='submit' value='Submit'>";
    echo "</form>";

      
  
    mysqli_close($con);
?>
  <br><br><br><br><br><br><br><br>
  <div id="footer">
    <p><a href="#">homepage</a> |  | &copy; 2016 NJIT | Design by Aditi, Ekta, Tulika|</p>
  </div>
</div>
</body>
</jsp>
    