<?php
// $myfile = fopen("contacts.txt", "r") or die("Unable to open file!");
// // Output one line until end-of-file
// while(!feof($myfile)) {
//   echo fgets($myfile) . "<br><br/>";
// }
// fclose($myfile);
$file_handle = fopen("contacts.txt", "rb");
								
								while (!feof($file_handle) ) {
									$line_of_text = fgets($file_handle);
									$parts = explode(':', $line_of_text);
									echo "<tr><td height='119'>$parts[0]</td><td>$parts[1]</td></tr>";
								}
								fclose($file_handle);
?>