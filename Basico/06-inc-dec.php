<?php include 'includes/header.php';

$num1 = 30;
// $num1++;
$num2 = 25;

echo $num1++;
echo "<br/>";
// echo ++$num1;
echo $num1;
echo "<br/>";

echo $num2 /= 15;
// 1.6666
echo "<br/>";

echo $num2 *= 15;
// 1.66 * 15 = 25
echo "<br/>";

echo $num2 += 15;
// 25 + 15 = 40
echo "<br/>";

echo $num2 -= 15;
// 40 - 15 = 25
echo "<br/>";




include 'includes/footer.php';