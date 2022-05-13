<?php
// // Simple array
// $numbers = [1,2,4,5,6,];
// $fruits = array('apple', 'orange', 'watermelon');

// // var_dump($numbers);
// echo $fruits[0]; // apple

// // Associative Array - you can create the index
// $colors = [
//     1 => 'red',
//     4 => 'blue',
//     6 => 'green'
// ];

// echo $colors[4]; // blue

// $hex = [
//     'red' => '#f00',
//     'blue' => '#0f0',
//     'green' => '#00f'
// ];

// // echo $hex['blue'];

// $person = [
//     'first_name' => 'abhishek',
//     'last_name' => 'dhar',
//     'team' => 'celtics'
// ];

// echo $person['team'];

// multi dimensional array

$person1 = [
    'first_name' => 'abhishek',
    'last_name' => 'dhar',
    'team' => 'celtics',
  ];
  
  // Array of people
$people = [
$person1, //   [...$person1]
    [
      'first_name' => 'abhishek',
      'last_name' => 'dhar',
      'team' => 'celtics',
    ],
    [
      'first_name' => 'marcus',
      'last_name' => 'smart',
      'team' => 'celtics',
    ],
  ];

//echo $people[1]['last_name'];
var_dump(json_encode($people));