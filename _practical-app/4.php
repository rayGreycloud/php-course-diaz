<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>


	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php

  function add() {

    $sum = 1 + 2;

    return $sum;
  }

  $result1 = add();
  echo $result1 . "<br>";

  function addNumbers($number1, $number2) {

    $sum = $number1 + $number2;

    return $sum;
  }

  $result2 = addNumbers(3, 4);
  echo $result2

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */


?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>
