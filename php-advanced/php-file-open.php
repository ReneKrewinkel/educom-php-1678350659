<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
//echo fread($myfile, filesize("webdictionary.txt"));

echo fgets($myfile) . "<br>";
echo fgets($myfile);




fclose($myfile);

?>

<br><br><br>

<?php 
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
//Output one line until en-of-file
while(!feof($myfile)) {
    echo feof($myfile);
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<br><br><br>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>