<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css"  href="https://unidueaundm.xyz/style.css" />
<script src="js/script.js"></script>
<script src="js/create-config.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>


<div class="hero">
<nav>
<a href="index.html"><img src="Logo.png" width="100" 
     height="100">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="/Guide.php">Guide</a></li>
<li><a href="/downloads.php"><span>Downloads<span></a></li>
<li><a href="/About-us.php">About Us</a></li>
<li><a href="/FAQ.php">FAQ</a></li>
</ul>
</nav>

<form action="make-user.php" method="get">
  Username: <input type="text" name="username">
  Password: <input type="password" name="password1">
  repeat Password: <input type="password" name="password2">
  <input type="submit">
</form>

<br>

<?php   $username = $_GET["username"]   ?>
<?php   $password1 = $_GET["password1"]  ?>
<?php   $password2 = $_GET["password2"]  ?>
<?php   system("htpasswd /etc/nginx/.htpasswd $username");   ?>
<?php   system("$password1");   ?>
<?php   system("$password2");   ?>

</body>
</html>

