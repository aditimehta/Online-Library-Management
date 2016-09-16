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

		$readerid=mysqli_real_escape_string($con,$_POST['idr']);
		$docuid=mysqli_real_escape_string($con,$_POST['doc']);
		$copid=mysqli_real_escape_string($con,$_POST['cop']);
		$librid=mysqli_real_escape_string($con,$_POST['lib']);
		$sql = "INSERT into reserves(Res_no,Card_no, Doc_id, Copy_no, Lib_id, ResTime, ResStatus)
		values ('null', '$readerid' ,'$docuid', '$copid', '$librid', now(), 'Reserved')";
    
				//$sql = "INSERT into reserves(Res_no,Card_no, Doc_id, Copy_no, Lib_id, ResTime, Status)
		//select 'null', '$readerid' ,'$docuid', '$copid', '$librid', now(), 'Reserved'
    //FROM copy join document on copy.Doc_id=document.Doc_id and copy.Doc_id = '".$docuid."'";
       $myData = mysqli_query($con,$sql);
       $today = date('y:m:d');
       $NewDate=Date('y:m:d', strtotime("+20 days"));
       $sql2 = "INSERT into borrows(Bor_number, Card_no, Copy_no, Doc_id, Lib_id, bor_date, ret_date, Due_date, Fine)
       values ('null','$readerid', '$copid', '$docuid', '$librid', '$today' ,Default, '$NewDate',default )";
        $myData2 = mysqli_query($con,$sql2);
       $sql1 = "SELECT Card_no, Doc_id, Copy_no, Lib_id, ResTime, ResStatus from reserves
		where Card_no='".$readerid."'";
		$myData1 = mysqli_query($con,$sql1);
    echo " <form action='adminmain.html', method='post'> <table border=1>
    	<tr>
    	<th>Reader ID</th>
    <th>Document ID</th>
    <th>Copy Number</th>
    <th>Library ID</th>
    <th>Reservation Date</th>
    <th>Status</th>
    
    	</tr>";
    	while($record = mysqli_fetch_array($myData1,MYSQLI_ASSOC)){
    		echo "<tr>";
    		echo "<td>" . $record['Card_no'] . "</td>",
      "<td>" . $record['Doc_id'] . "</td>",
      "<td>" . $record['Copy_no'] . "</td>",
      "<td>" . $record['Lib_id'] . "</td>",
      "<td>" . $record['ResTime'] . "</td>",
      "<td>" . $record['ResStatus'] . "</td>";
     
         echo "</tr>";
    	}
    echo "<tr>";
    
        echo "</tr>";
    	echo "</table> </form>";
      
   

    mysqli_close($con);
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
    