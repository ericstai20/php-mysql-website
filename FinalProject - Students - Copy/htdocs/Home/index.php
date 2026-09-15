<?php # index.php
session_start();
//check session first
if (!isset($_SESSION['email'])){
include ('../includes/header.php');
}else
{
include ('../includes/header.php');
}
?>
<div id=h2>
<h2>Welcome, Cheesehead!</h2>
<p>This site is dedicated to the Green Bay Packers &mdash; the Titletown legacy, 
Lambeau Field, and everything that makes Packers fans the most loyal in the NFL.</p>
<p>Register for an account to save your favorite Packers-related links, news sites, 
and resources in your own personal Bookmarks collection.</p>
</div>
<?php
include ('../includes/footer.php');
?>
