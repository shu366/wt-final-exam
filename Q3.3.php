<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Hi, I am Shubham Wani, A065, from batch 3 & currently pursuing MCA from MPSTME\n";
fwrite($myfile, $txt);
fclose($myfile);
?>