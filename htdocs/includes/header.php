<html>
<head>
<style>
	body {
		background-color: #203731; /* Packers green */
		color: #FFB612; /* Packers gold */
		font-family: Georgia, serif;
		margin: 0;
	}
	#header-bar {
		background-color: #FFB612;
		color: #203731;
		text-align: center;
		padding: 15px;
	}
	#header-bar h1 {
		margin: 0;
		font-size: 32px;
		letter-spacing: 2px;
	}
	a {
		color: #FFB612;
		text-decoration: none;
		font-weight: bold;
	}
	a:hover {
		color: #ffffff;
		text-decoration: underline;
	}
	table {
		background-color: #203731;
	}
</style>
</head>
<body>
<center>
<div id="header-bar">
	<h1>PACK FANS UNITE</h1>
	<p>Your home for all things Green &amp; Gold</p>
</div>
<br>
<Table width="700" cellpadding="10"><tr><td align="right">

<?
if (!isset($_SESSION['email'])){
	echo ("<a href=../Home/login.php>Login</a> | ");
	echo ("<a href=../Home/register.php>Register</a> | "); 
	echo ("<a href=../Home/forgot.php>Forgot Password?</a>");  
} else {
	echo ("<a href=../Home/logout.php>Logout</a>"); 
} 
?>

<p></td></tr></table>

<table width="700" cellpadding="10"><td width="100" valign="top">

<?
if (!isset($_SESSION['email'])){
	echo ("<a href=../Home/index.php>Home</a><p>");
	echo ("<a href=../Home/link.php>Links</a>");  
}else {
	echo ("<a href=../Home/index.php>Home</a><p>");
	echo ("<a href=../bookmark/index.php>My Bookmarks</a><p>"); 
	echo ("<a href=../contact/contact.php>Contact us</a><p>"); 
} 
?>

</td><td valign="top">

