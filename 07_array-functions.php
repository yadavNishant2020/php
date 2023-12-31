<?php

$fruits = ['apple', 'banana', 'orange', 'grapes'];

//get legth
// echo count($fruits);

//search
// var_dump(in_array('apple', $fruits));

//add to array
$fruits[] = 'peach';
array_push($fruits, 'peach');
array_unshift($fruits, 'banana');

//remove
array_pop($fruits);
array_shift($fruits);

//split into 2 chunks
// $chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);

//merge 2 array
// $arr1 = [1,2,4];
// $arr2 = [2,4,5];

// $arr3 = array_merge($arr1, $arr2);
// print_r( $arr3);

// $arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

$numbers = range(1, 20);
// print_r($numbers);

$newNumber = array_map(function($numbers) {
    return "Number $numbers";
}, $numbers);
// print_r($newNumber);

$lessThan10 = array_filter($numbers, fn($number) => $number<10);
print_r($lessThan10);
?>

