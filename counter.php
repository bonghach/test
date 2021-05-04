<?php
 $cfile = "index.php.dat";
 $fh = fopen($cfile, "r+");
 if (!$fh) {
   die("<br/>Failed to open file.");
 }
 $s = fgets($fh, 6);
 $count = (int)$s;
 $count = $count + 1;
 $count = str_pad($count, 6);
 rewind($fh);
 fwrite($fh, $count);

    $a = 20000;
 
    $value = $a - $count;
 

 fclose($fh);
 ?>



	





	


