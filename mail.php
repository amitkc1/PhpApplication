<?php
// $myfile = fopen("contacts.txt", "r") or die("Unable to open file!");
// // Output one line until end-of-file
// while(!feof($myfile)) {
//   echo fgets($myfile) . "<br><br/>";
// }
// fclose($myfile);

    $myfile = fopen("contacts.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("contacts.txt"));
    fclose($myfile);
						
?>