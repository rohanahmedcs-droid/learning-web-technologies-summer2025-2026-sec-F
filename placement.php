<?php
echo "<h3>1. Area Perimeter</h3>";
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area = $area <br>";
echo "Perimeter = $perimeter <br><br>";


echo "<h3>2. VAT Calculation</h3>";

$amount = 1000;
$vat = $amount * 0.15;

echo "VAT = $vat <br><br>";


echo "<h3>3. Odd or Even</h3>";

$num = 17;

if ($num % 2 == 0) {
    echo "$num is Even <br><br>";
} else {
    echo "$num is Odd <br><br>";
}


echo "<h3>4. Largest Number</h3>";

$a = 10;
$b = 25;
$c = 7;

if ($a >= $b && $a >= $c) {
    echo "Largest = $a <br><br>";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest = $b <br><br>";
} else {
    echo "Largest = $c <br><br>";
}


echo "<h3>5. Odd Numbers from 10 to 100</h3>";

for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
echo "<br><br>";


echo "<h3>6. Search Element in Array</h3>";

$arr = [5, 12, 30, 7, 50];
$search = 7;
$found = false;

foreach ($arr as $value) {
    if ($value == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search found in array<br><br>";
} else {
    echo "$search not found<br><br>";
}


echo "<h3>7. Shapes</h3>";

echo "<b>Shape 1:</b><br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br><b>Shape 2:</b><br>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$j ";
    }
    echo "<br>";
}

echo "<br><b>Shape 3:</b><br>";
$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}


echo "<h3>8. 2D Array + Shapes</h3>";

$array2D = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

foreach ($array2D as $row) {
    foreach ($row as $item) {
        echo $item . " ";
    }
    echo "<br>";
}

?>
