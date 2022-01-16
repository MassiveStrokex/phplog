<?php
@ob_start();
@session_start();
include 'connect.php';


function log_islem($log_idmail, $log_islem, $log_basari){
	$dateTime = new DateTime('now', new DateTimeZone('Europe/Istanbul')); 
	global $db;
	$log_ekle=$db->prepare("INSERT INTO log SET
	log_idmail=:log_idmail,
	log_ip=:log_ip,
	log_tarih=:log_tarih,
	log_islem=:log_islem,
	log_basari=:log_basari

	");

	$ekle=$log_ekle->execute(array(
	'log_idmail' => $log_idmail,
	'log_ip' => $_SERVER["REMOTE_ADDR"],
	'log_tarih' => $dateTime->format("d.m.Y H:i:s"),
	'log_islem' => $log_islem,
	'log_basari' => $log_basari

));
}

?>
