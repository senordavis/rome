<?php
if(!isset($_POST['name']) || strlen($_POST['name']) <= 0)
{
echo 
'<img src="images/contact.gif">
<br>
<br>
<div align="center" style="font-size:10px;">
error: you did not enter your name! 
<p />
if you don&acute;t tell us who you are we won&acute;t know!
<p />
<br />
<a href="write.html">please try again</a>';
exit();
}

if(!isset($_POST['email']) || strlen($_POST['email']) <= 0)
{
echo 
'<img src="images/contact.gif">
<br>
<br>
<div align="center" style="font-size:10px;">
error: you did not enter an email address! 
<p />
how the heck are we supposed to write you back huh? did you think about that?
<p />
<br />
<a href="write.html">please try again</a>';
exit();
}

if(!isset($_POST['message']) || strlen($_POST['message']) <= 0)
{
echo 
'<img src="images/contact.gif">
<br>
<br>
<div align="center" style="font-size:10px;">
error: you did not enter a message!
<p />
so what now you don&acute;t want to write us? that&acute;s just not cool man
<p />
<br />
<a href="write.html">please try again</a>';
exit();
} 

if($_POST) 
{
$sendto = "davisgom@msu.edu";
$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];


mail("$sendto", "you have new email from $name", "$message", "$email");
}

?>

<html>
<head>
<meta http-equiv="expires">
<meta http-equiv="refresh" content="2;http://www.mikeandleanne.com/thankyou.html">
</head>
</html>