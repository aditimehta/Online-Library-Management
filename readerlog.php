Read more: http://mrbool.com/how-to-create-a-login-page-with-php-and-mysql/28656#ixzz46sqxVmeQ
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
    </div>
    <div id="navcontainer">
    <ul id="navlist">
          <li><a href="mainlog1.html">Home</a></li>
            
    </ul>
  </div>
  <div id="active">
    <h2>Welcome to <span style="font-weight:bold; color:#b29b35;">New Jersey Institute of Technology</span> Library</h2>

    <h2><center>Login As Reader:</center></h2>
    
    <form action="login.php" method = "post" >
      Card Number<br>
      <input type="text" name="cardnumber" id="cardnumber"><br>
      Name<br>
      <input type="text" name="rname" id="rname"><br><br>
    <input type="submit" name="submit" id="submit" value="Login" />
    
    </form>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
  <div id="footer">
    <p><a href="#">homepage</a> |  | &copy; 2016 NJIT | Design by Aditi, Ekta, Tulika|</p>
  </div>
</div>
</body>
</html>
