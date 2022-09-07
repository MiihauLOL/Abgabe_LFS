<?php
    
   
    $comment = $_POST["email"];
   
    $file = (”saveform.txt”);
   file_put_contents($file, $comment);
    
   
    header("Location:downloads.php");
    
 ?>
