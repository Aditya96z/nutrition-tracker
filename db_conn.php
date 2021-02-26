<?php

$sname= "sql210.epizy.com";
$unmae= "epiz_27899764";
$password = "aD7mo8wzimwD";

$db_name = "epiz_27899764_signup";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
