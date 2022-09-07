<?php
session_start();

?><!DOCTYPE html>
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
<li><a href="/downloads.php"><span>Downloads<span></a></li>
<li><a href="/About-us.php">About Us</a></li>
<li><a href="/FAQ.php">FAQ</a></li>
<?php
if(isset($_SESSION["email"])){
echo "<li><a href='/Logout.inc.php'>Logout</a></li>";
}
else 
{
echo "<li><a href='/Login.php'>Login</a></li>";
}
?>
</ul>
</nav>

<?php
if(isset($_SESSION["email"])){
echo "<div class='content'>
<h1>LFS <span>Server</span></h1>
			<h4>All Configuration files you will need</h4>
			</br>	</br>	</br>
			<h3>Download the LFS Config.</h3>
			<div class='newslatter'>
				<form action='writefile.php' method='post'>
			
				
                 <input type='submit' class='btn' id='text'  value='Download' />
				</form>
			</div>
		</div>
  ";
}
else 
{
echo "<div class='content'>
<h3>Log in to download the Config <span></span></h3>
		
			
	
		</div>";
}
?>
       

</head>
   <body>
        <script>
       function success() {
	 if(document.getElementById('mail').value==='') { 
            document.getElementById('text').disabled = true; 
        } else { 
            document.getElementById('text').disabled = false;
        }
    }
          </script>
         <script>
        
            function download(file) {
            
             
              //var text = 'testestsetste';
               var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz';  
                var lenString = 10;  
                //using random string
                var randomstring = '';  
                //using session id
               var email = "<?php echo $_SESSION['email'] ?>";
                  for (var i=0; i<lenString; i++) {  
        var rnum = Math.floor(Math.random() * characters.length);  
        randomstring += characters.substring(rnum, rnum+1);  
        
    }            var dir = '/var/lib/docker/volumes/rudolfs_data/_data/objects/my-org/' + email;
                var text ='[lfs] url = http://unidueaundm.xyz:8081/api/my-org/' + email; 
            
               

               
                
                //creating an invisible element
                var element = document.createElement('a');
                element.setAttribute('href', 
                'data:text/plain;charset=utf-8, '
                + encodeURIComponent(text));
                element.setAttribute('download', file);
              
     
              
                document.body.appendChild(element);
              
                //onClick property
                element.click();
              
                document.body.removeChild(element);
            }
            // Start file download.
            document.getElementById('text')
            .addEventListener('click', function() {
                // Generate download of hello.txt 
                // file with some content
                
                var filename = '.lfsconfig';
              
                download(filename, text);
            }, false);
            
            
            
         </script>


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