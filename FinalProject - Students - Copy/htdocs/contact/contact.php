<?
session_start();
//check session first
if (!isset($_SESSION['email'])){
	echo "You are not logged in!";
	exit();
}else{

	include ("../includes/header.php");
?>

	<h2>Contact us</h2>
	<p>Got a question, a favorite Packers memory, or a link you think belongs 
	in our Bookmarks collection? Reach out!</p>

	<p><b>Email:</b> ericstai@uwm.edu<br>
	<b>Site maintained by:</b> Eric Stai<br>
	<b>Go Pack Go!</b></p>

<?
	include ("../includes/footer.php");
}
?>
