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
<a href="index.php"><img src="Logo.png" width="100" 
     height="100">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="/Guide.php">Guide</a></li>
<li><a href="/downloads.php">Downloads</a></li>
<li><a href="/About-us.php">About Us</a></li>
<li><a href="/FAQ.php">FAQ</a></li>
<li><a href="/Login.php"><span>Login<span></a></li>
</ul>
</nav>


<div class="service">
	

		<div class="box">
			<div class="card2">
			
			
<h1>Login <span></span></h1>

		
			</br>	</br>
		
			<div class="login">
				<form action="login.inc.php" method="post">
				<input type="text"  name="email"  placeholder="Enter Your Email"></center>
					          </br>	</br>	
                          
 			  <input type="password"  name="pwd"  placeholder="Enter Your Password">
                 
                    </br>	</br>	</br>	</br>	
     	<button class="button" type="submit" name="submit">Login</button>
				</form>
        </br>	</br>
			 <h4>Noch kein Account ?  </h4> <a href="register.php"><h4>Klick hier</h4></a>
        
         </br></br>
    
      <?php
  if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
    echo "<h6>Fuellen Sie alle Felder! </h6>";
    }
    else if($_GET["error"]=="wronglogin"){
     echo "<h6>Falsche Anmeldeinformationen! </h6>";
    }
    
  
  }


?>
	  	</div>
			</div>
      
     
      
      

		
			
		</div>
    
			</div>
      
      </div>



<!------footer start--------->
	<footer>
		<p>Artur and Michal</p>
		<p>For further support questions regarding LFS - please contact us via the links below: (links not in operation)</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-dribbble"></i></a>
		</div>
		<p class="end">CopyRight By Artur and Michal</p>
	</footer>



</body>
</html>
