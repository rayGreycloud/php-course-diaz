<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php
$a = 5;
$b = 3;
$c = 1;
if ($a < $b) {
	echo "I hate PHP";
} else if ($a < $c) {
	echo "PHP...meh";
} else {
	echo "I love PHP kappa";
};
echo "<br>";

for ($i = 0; $i <= 10; $i++) {
	echo $i . "<br>";
};

$a = "apple";
echo "It's a(n) ";
switch($a) {
	case "banana" :
	echo "banana";
	break;
	case "orange" :
	echo "orange";
	break;
	case "grape" :
	echo "grape";
	break;
	case "apple" :
	echo "apple";
	break;
	default :
	echo "fruit";
};

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

Step 2: Make a forloop  that displays 10 numbers

Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */


?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
