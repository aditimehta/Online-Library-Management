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
    <form action="popular.php" method="post"> 
    <select name= "PYear">
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  </select><br><br>
  <input type="submit" value="Submit">
    </form>
    <?php


  if(isset($_POST['PYear'])){  
  $link = mysqli_connect("localhost", "root", "", "library");
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $PYear = mysqli_real_escape_string($link,$_POST['PYear']);
  $sql = "SELECT d.Title, count(b.Doc_id) AS num from borrows b JOIN document d ON b.Doc_id = d.Doci_id JOIN book k ON b.Doc_id = k.Document_id AND year(b.Bor_date) = '".$PYear."' GROUP BY d.Title ORDER BY num DESC LIMIT 10";
  $myData = mysqli_query($link,$sql);
  echo "<table border=1>
    <tr>
    <th>Popular Books of the year</th>
    </tr>";
    while($record = mysqli_fetch_array($myData,MYSQLI_ASSOC)){
      echo "<tr>";
      echo "<td>" . $record['Title'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    
  //$Me=$myData['Title'];
  //$my=$myData['num'];
  //echo $Me;
  
  mysqli_close($link);}
?>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
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