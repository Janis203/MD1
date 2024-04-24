<?php
//4.uzd
//1.
$numbers=[1,54,5,41,2,10,82,3,9,10];
foreach ($numbers as $number){
    echo $number." ";
}
echo PHP_EOL;
//2.
for($i=0;$i<count($numbers);$i++){
    echo $numbers[$i]." ";
}
//3.
echo PHP_EOL;
$x=1;
while($x<10){
    echo "codelex ";
    $x++;
}
echo PHP_EOL;
//4.
$arr=[12,2,3,4,5,6,7,8,9];
$mt='';
foreach ($arr as $nmr){
    if($nmr%3==0){
        $mt.=$nmr.' ';
    }
}
echo $mt.PHP_EOL;
//5.
$persons=[
    [  "name" => "John",
        "surname" => "Doe",
        "age" => 50,
        "birthday"=>"february"],
    [  "name" => "Joe",
        "surname" => "Stevens",
        "age" => 20,
        "birthday"=>"march"],
    [  "name" => "Steven",
        "surname" => "Johnson",
        "age" => 30,
        "birthday"=>"november"]
];
for($j=0;$j<count($persons);$j++){
    echo "{$persons[$j]['name']} {$persons[$j]['surname']} {$persons[$j]['age']} {$persons[$j]['birthday']}".PHP_EOL;
}