<?php

function is_uname_valid($username) {
	$chek_username = (preg_match('/^[a-z]{5,9}/', $username)) ? TRUE : FALSE;
	return $chek_username;
}

function is_pass_valid($password) {
	$chek_password = (preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\@])\S*$/', $password)) ? TRUE : FALSE;
	return $chek_password;
}

//Validate Username
if (is_uname_valid("khoirulsyariff")) {
	echo "Username is Valid";
} else {
	echo "Username is Invalid";
}

echo "<br>";

//Validate Password
if (is_pass_valid("s@nDii0#")) {
	echo "Password is Valid";
} else {
	echo "Password is Invalid";
}

?>