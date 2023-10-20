<?php 

$names = ["Eko", "Kurniawan", "Khannedy"];

for ($i = 0; $i < count($names); $i++) {
    echo "ini index ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "data $name" . PHP_EOL;
}

foreach ($names as $index => $value) {
    echo "data ke-$index = $value" . PHP_EOL;
}

$person = [
    "first_name" => "Amel",
    "middle_name" => "inda",
    "last_name" => "Lee"
];

foreach ($person as $amel) {
    echo "data $amel" . PHP_EOL;
}

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
