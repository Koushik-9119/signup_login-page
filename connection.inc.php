<?php
session_start();
$con=mysqli_connect("localhost","root","","login");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'');
define('SITE_PATH','');

?>