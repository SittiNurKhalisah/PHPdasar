<?php

$numbers = [1, 2, 3, 4, 5];
var_dump($numbers);
echo $numbers[2];

$data = [
    [
        "nama" => "faqih",
        "nim" => 220411100029,
    ],
    [
        "nama" => "lisa",
        "nim" => 220411100123
    ]
];

echo "<br>";

var_dump($data);
echo "<br>";
echo $data[1]["nim"];



