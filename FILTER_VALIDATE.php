<?php
$email="manasexamplecom";
echo "manas","<br>";
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo "email is valid";
}
else{
	echo "email not valid";
}
?>