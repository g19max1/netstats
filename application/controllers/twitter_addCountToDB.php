<?
//Get the number from the spider
$time = time();
$number = $_POST['number'];

$number = preg_replace('/[,]/', '', $number);

//Define SQL Variables
$hostname = "localhost";
$database = "lejdesig_netsta";
$username = "lejdesig_netsta";
$password = "7RDwPKA6yb92MWdz";

//Connect to DB
$Connect = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);

//Selects DB
mysql_select_db($database, $Connect);

//Insert it into the DB
mysql_query("INSERT INTO twitter SET count = $number, time = $time") OR die(mysql_error());

echo "Done."

?>
