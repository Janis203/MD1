<?php
//2.uzd
//1.
$a = 10;
$b = "10";
if ($a === $b) {
    echo "equal" . PHP_EOL;
} else {
    echo "not equal" . PHP_EOL;
}
//2.
$c = 50;
if ($c <= 100 && $c >= 1) {
    echo "is between 1 and 100" . PHP_EOL;
}
//3.
$hi = "hello";
if ($hi === "hello") {
    echo "world" . PHP_EOL;
}
//4.
$numb = (int)readline("Enter a number: ");
if ($numb >= 1 && $numb <= 64 && ($numb % 2 == 0)) {
    echo "is between 1 and 64 and is even" . PHP_EOL;
} else {
    echo "error" . PHP_EOL;
}
//5.
$y = 100;
$z = 1;
if ($c > $z && $c < $y) {
    echo 'correct' . PHP_EOL;
}
//6.
$plateNumber = "mycar123";

switch ($plateNumber) {
    case "mycar123":
        echo "that's your car".PHP_EOL;
        break;
    default:
        echo "not your car".PHP_EOL;
        break;
}
//7.
$number = (int)readline("Enter a number: ");
$tst = 0;
if ($number <= 49) {
    $tst = 1;
} elseif ($number >= 50 && $number < 100) {
    $tst = 2;
} else {
    $tst = 3;
}

switch ($tst) {
    case 1:
        echo "low".PHP_EOL;
        break;
    case 2:
        echo "medium".PHP_EOL;
        break;
    case 3:
        echo "high".PHP_EOL;
        break;
    default:
        echo "error".PHP_EOL;
        break;

}