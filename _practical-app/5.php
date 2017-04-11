<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php

echo "Picking a number between 1 and 10...";
echo rand(1, 10);
echo "<br>";

$string = "converting to shouts";
echo $string . "<br>";
echo strtoupper($string);
echo "<br>";

$list = [70, 50, 100, 80, 65];
$min = min($list);
$max = max($list);
sort($list);
echo "Minimum array value is " . $min;
echo "<br>";
echo "Maximum array value is " . $max;
echo "<br>";
echo "Sorted list: ";
print_r($list);

/*  Step1: Use a pre-built math function here and echo it

Step 2:  Use a pre-built string function here and echo it

Step 3:  Use a pre-built Array function here and echo it

*/
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
