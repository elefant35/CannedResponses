<?php
/*Globals*/
/*Functions*/
function sanit($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$ticket = sanit($_POST['ticket']);
	$name = sanit($_POST['fullname']);
	$canned = sanit($_POST['canned']);
}
else
{
	die("Please go back to the main Page");
}
if($canned == 0)
{
echo("Hello $name, <br><br>Due to security concerns we cannot discuss account information or reset passwords via email. <br><br>Please give us a call at 503-725-4357 so we can verify your ID and reset your password. When you call please reference ticket number $ticket. <br><br>Thanks,<br>");
}
if($canned == 1)
{
echo("Hello $name,<br><br>We’d like to make an appointment for a technician to come out and work on this issue. Please give us a call at 503-725-4357 during our open hours of 8 am–7 pm, Monday–Friday. Please refer to ticket number $ticket when you speak with us.<br><br>Let us know if you have any further questions or concerns.<br><br>Thanks,");

}


?>
