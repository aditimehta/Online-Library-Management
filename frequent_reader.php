<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CLEAN BLUE</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
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
      <li><a href="search_document.html">Search Document</a></li>
      <li><a href="add_reader.html">Add Reader</a></li>
      <li><a href="info.html">Information</a></li>
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
    $sql1 = "SELECT b.Lib_name FROM branch b";
  $retval = mysqli_query($con,$sql1);
  echo "<table border=1>
    <tr>
    <th> Branch Name </th>
    </tr>";
    while($record = mysqli_fetch_array($retval,MYSQLI_ASSOC)){
      echo "<tr>";
      echo "<td>" . $record['Lib_name'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
?>
<br>
<form action="frequent_books1.php", method="post">
  Enter the name of the branch from the above table:<br>
  <input type="text" name="branch"><br><br>
  <input type="submit" name="submit" value="Submit">
  </form>
  <br>
  <br>
  <br>
  <br>
<div id="footer">
    <p><a href="#">homepage</a> |  | &copy; 2016 NJIT | Design by Aditi, Ekta, Tulika|</p>
  </div>
</div>
</body>
</html>
