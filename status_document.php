<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
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
      <li><a href="search_document">Search Document</a></li>
      <li><a href="add_reader1.html">Add Reader</a></li>
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
    $sql = "SELECT d.Title FROM document d, copy c WHERE d.Doci_id=c.Doc_id GROUP BY d.Title";
    $myData = mysqli_query($con,$sql);
    echo "<table border=1>
    <tr>
    <th>Document Title</th>
    </tr>";
    while($record = mysqli_fetch_array($myData,MYSQLI_ASSOC)){
      echo "<tr>";
      echo "<td>" . $record['Title'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
?>

<form action="status_document1.php" method="post">
Enter the name of the title of the document you want to search the document:<br>
Document Title:
<input type="text" name="title">
<input type="submit" name="submit" value="Submit">
</form>
  <br><br><br><br><br><br><br>
  <div id="footer">
    <p><a href="#">homepage</a> |  | &copy; 2016 NJIT | Design by Aditi, Ekta, Tulika|</p>
  </div>
</div>
</body>
</html>