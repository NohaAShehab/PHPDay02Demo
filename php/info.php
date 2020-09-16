<?php

#GET send data to the server as a plaintext in the url
//localhost/summertraining/menofiaG2/Day02/php/info.php?
// name=Noha&
// age=28&
// email=noha.a.shehab%40gmail.com
// &password=12345678

#post send data encrypted

#to receive submitted by form 
# 1- $_REQUEST (either using post method or get method )
# 2- $_GET  (if u used get method in submitting the form)
# 3- $_POST (if u used post method in submitting the form)

var_dump($_REQUEST);
var_dump($_POST);
var_dump($_GET);

echo $_GET["name"];
foreach($_GET as $key=> $value){
    echo $key. "  ". $value. "<br>";
}

