<?php
$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen ("testfile.txt", "a") or die ("Unable to open file!");
$txt = "Donald Duck\n";
fwrite ($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);

?>