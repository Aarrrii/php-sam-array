<?php

//Задание 1
$arrRandom = array();
$len = 10;
$min = 35;
$max = 42;

for ($i = 0; $i < $len; $i++) {
    $arrRandom[] = mt_rand($min, $max);
}
print_r($arrRandom);

//Задание 2

$str = join(';', $arrRandom);
echo ($str);

//Задание 3

print_r(array_unique($arrRandom));
echo (count(array_unique($arrRandom)));

// Задание 4

for ($i = 0; $i < count($arrRandom); $i++) {
    $x3[$i] = $arrRandom[$i] * 3;
}
echo '<pre>';
print_r($x3);
echo '</pre>';

// Задание 5

$arrRange = range(-50, 50, 8);
shuffle($arrRange);
print_r($arrRange);

// Задание 6

$sum = 0;
foreach ($arrRange as $item) {
    if ($item % 2 == 0 && $item > 0) {
        $sum += $item;
    }
}
echo $sum;

// Задание 7

$arrRange = array_filter(
    $arrRange,
    function ($item) {
        if ($item % 3 == 0 && $item % 5 == 0) {
            return $item;
        }
    },
);
$product = array_product($arrRange);
echo '<pre>';
print_r($arrRange);
echo '</pre>';

// Задание 8

$arr3 = array_merge($arrRandom, $arrRange);
$arr4 = $arrRandom + $arrRange;

// Задание 9

sort($arr3);
$arrResSplice = array_splice($arr3, 0, 5);
echo (join('; ', $arrResSplice));

//задание 10

array_splice($arrRandom, 5, 2, [1000, 2000, 3000]);

//задание 11

$str2 = 'А роза упала на лапу Азора';
$arrRes2 = explode(' ', $str2);


// Задание 12

$arr5 = array_pop($arrRandom);
print_r($arr5);


// Задание 14

$arrDes = [
    'white' => 'белый',
    'yellow' => 'желтый',
    'red' => 'красный',
    'green' => 'зеленый'
];
['white' => $whiteColor, 'red' => $redColor] = $arrDes;

$wgiteColor2 = $arrDes['yellow'];

// Задание 15

$product = [
    [
        "berry" => "виноград",
        "color" => "зеленый",
        "weight" => 1.5
    ],
    [
        "berry" => "земляника",
        "color" => "красный",
        "weight" => 0.7
    ],
    [
        "berry" => "blueberry",
        "color" => "фиолетовый",
        "weight" => 0.3
    ],
];

uasort($product, function ($a, $b) {
    if ($a['weight'] < $b['weight']) return 1;
    if ($a['weight'] == $b['weight']) return 0;
    if ($a['weight'] > $b['weight']) return -1;
});
print_r($product);
