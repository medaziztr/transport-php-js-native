<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "telef971907"; /* Database name */



// $host = "185.98.131.90"; /* Host name */
// $user = "telef971907"; /* User */
// $password = "bonjour1234"; /* Password */
// $dbname = "telef971907"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}