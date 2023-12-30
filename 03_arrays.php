<?php
// simple arrays
$numbers = [1,2,3,4,5];
$fruits = array('Apple', 'Banana', 'Orange');

// var_dump($numbers);
// echo $fruits[1]

//assocaitive array
$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f'
];
// echo $hex['red'];
$person = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'age' => 35,
];
// echo $person['first_name'];
// echo $person['last_name'];

//multidimentional array
$people = [
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'age' => 35,
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'age' => 25,
    ],
    [
        'first_name' => 'Jim',
        'last_name' => 'Doe',
        'age' => 45,
    ]
    ];
var_dump($people);
// var_dump(json_encode($people))
?>


