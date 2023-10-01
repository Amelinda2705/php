<?php 

$values = array(1, 2, 3);
var_dump($values);

$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);

$names[] = "Amel";
var_dump($names);

var_dump(count($names));

$amel = array(
    "id" => "112",
    "name" => "Amel",
    "age" => 16, 
    "address" => [
        "city" => "Subang",
        "country" => "Indonesia"
    ]
);

var_dump($amel);
var_dump($amel[2]);

$budi = [ 
    "id" => 232,
    "name" => "Budi",
    "age" => 35,
    "address" => array(
        "city" => "Subang",
        "country" => "Indonesia"
    )
];

var_dump($budi);

var_dump($budi["address"]["country"]);

var_dump(count($budi));

