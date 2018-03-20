<?php
if($_POST){

if(isset($_POST["mail"])&&isset($_POST["password"])){
$mail=strip_tags(trim($_POST["mail"]));
$password=strip_tags(trim($_POST["password"]));	
$a=strstr($mail,"@hotmail.com");
if($a=="@hotmail.com")
{
header("Refresh: 1; url=http://oys.deu.edu.tr");
}
else{
header ("Refresh: 1;url=http://oys2.deu.edu.tr");
}
}
}

?>