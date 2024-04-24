<?php
//3.uzd
//1.
$arr1 = [12, 40, 7];
$sum = 0;
for ($i = 0; $i < count($arr1); $i++) {
    $sum += $arr1[$i];
}
echo $sum . PHP_EOL;
//2.
$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
var_dump($person);
echo PHP_EOL;
//3.
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;
var_dump($person);
//4.
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
echo "{$items[0][1]["name"]} {$items[0][1]["surname"]} {$items[0][1]["age"]}" . PHP_EOL;
//5.
$item = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
$empt = "";
for ($i = 0; $i < count($item[0]); $i++) {
    $empt .= $item[0][$i]["name"] . " " . $item[0][$i]["surname"] . " " . $item[0][$i]["age"] . "\n";
}
echo $empt . PHP_EOL;