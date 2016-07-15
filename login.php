<?php
foreach(file('password.txt') as $line) {
    if(empty($line)) continue;
    $lineArray = explode(':', $line);
    $username = rtrim($lineArray[0]);
    $password = rtrim($lineArray[1]);

   	if ($_POST["username"] == $username && md5($_POST["password"]) == $password){
    	echo "Username and Password match. Logged in successfully :)";
    	return;
    }
}
echo "Username/Password mismatch. Login Failed :(";
?>