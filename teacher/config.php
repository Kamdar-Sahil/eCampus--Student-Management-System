<?php
session_start();

define('API_KEY','');
define('API_SECRET','');
define('EMAIL_ID','');
?>
<?php
$dbhost = 'localhost';
$dbname= 'ppl_project1';
$dbusername = 'root';
$dbpassword = '';

$mysqli=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);

 ?>
