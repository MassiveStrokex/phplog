<?php 
$host="localhost";
$veritabani_ismi="csxui"; 
$kullanici_adi="root"; 
$sifre=""; 

try {
	$db=new PDO("mysql:host=$host;dbname=$veritabani_ismi;charset=utf8",$kullanici_adi,$sifre);

}

catch (PDOExpception $e) {
	echo $e->getMessage();
}

?>
