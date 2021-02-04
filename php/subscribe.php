<?php

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrationform_inicio');


$subscribe = $_POST['subscribe'];




$s = " select * from  subscription where subscribe = '$subscribe' " ;

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "Already subscribed";
}
else{
	$reg = "insert into subscription( subscribe )values('$subscribe')";
	
	mysqli_query($con, $reg);
	
	$to = $subscribe;
	$subject = "SUBSCRIPTION";
	$message = "<h1>THANK YOU FOR SUBSCRIBING</h1>";
	$headers = "From: ciudad.gente@gmail.com \r\n";
	/*$headers .= "MIME-VERSION: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset-UTF-8". "\r\n";*/
	
	mail($to, $subject, $message, $headers);
	
	echo "<h1>Subscritption Successful</h1>";
	
	
	}



?>





















