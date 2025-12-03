<?php
$data = [
    ['country' => 'country1', 'city' => 'city1'],
    ['country' => 'country2', 'city' => 'city2'],
    ['country' => 'country1', 'city' => 'city3'],
    ['country' => 'country1', 'city' => 'city4'],
    ['country' => 'country3', 'city' => 'city5'],
    ['country' => 'country2', 'city' => 'city6'],
    ['country' => 'country3', 'city' => 'city7'],
];

$result = [];

foreach ($data as $item) {
    $result[$item['country']][] = $item['city'];
}

print_r($result);
?>