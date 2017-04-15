<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<?php
  session_start();

  if ($_SESSION) {
    echo $_SESSION['success'];
  } else {
    $_SESSION['success'] = "Welcome back!";
    echo "Welcome newcomer.";
  }
?>

<?php

$name = "OneWeekCookie";
$value = 431102477;
$expiration = time() + (60 * 60 * 24 * 7);

setcookie($name, $value, $expiration);

echo "Cookie saved."
?>

	<section class="content">
		<aside class="col-xs-4">

		<?php Navigation();?>

		</aside><!--SIDEBAR-->

			<article class="main-content col-xs-8">

<?php
  if (isset($_GET['source'])) {
    echo $_GET['source'] . "<br>";
  }
?>
    <a href="9.php?source=SHAZAM">Click</a>


<?php
/* Create a link saying Click Here, and set the link href to pass some parameters and use the GET super global to see it

Step 2 - Set a cookie that expires in one week

Step 3 - Start a session and set it to value, any value you want. */

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
