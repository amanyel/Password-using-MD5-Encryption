<!DOCTYPE html>
<body>
<table>
	<tr>
		<td><a href="user_login.php">Home</a></td>
	</tr>
</table>
</body>
<?php
foreach(file('password.txt') as $line) {
    if(empty($line)) continue;
    $lineArray = explode(':', $line);
    $username = rtrim($lineArray[0]);

	if ($_POST["username"] == $username){
    	echo "This user already exist.";
    	return;
    }
}
$line = $_POST["username"] . ":" . md5($_POST["password"]) . "\n";
file_put_contents('password.txt', $line, FILE_APPEND);
echo "Registration completed successfully.";
?>