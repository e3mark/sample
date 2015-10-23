<?php
/**
 * Objective:
 * Given an array of 2 set of times. Write a function to find the shortest gap time between each set of times,
 * and return it as minutes. (You can use built in functions for this one)
 *
 * For examples: 
 * 1) Input:  [ “12:30AM-1:30AM”, “2:30AM-10:30PM”], Output = 60
 * Hint: The shortest gap difference is between 1:30AM to 2:30AM, which outputs 60 minutes.
 * 2) Input: [“12:00PM-1:00PM”, “11:00AM-12:00PM” ], Output = 0
 * Hint: The shortest gap difference is between 12:00PM to 12:00PM, which outputs 0 minutes.
 * 3) Input: [“6:00PM-6:01PM”, “6:02AM-6:03AM” ], Output = 717 minutes
 * Hint: The shortest gap difference is between 6:03AM to 6:00PM, which outputs 717 minutes.
 * (This is equivalent to 11 hrs and 57 minutes)
 *
 * How to test:
 * ~$ php time.php
 */


$shortestGap = function ($input) {
    $gaps = array();
    foreach ($input as $k => $v) {
        list($min, $max) = explode('-', $v);
        // Get gap in minutes
        $format = "h:iA";
        $min = DateTime::createFromFormat($format, $min);
        $max = DateTime::createFromFormat($format, $max);
        $diff = $min->diff($max);
        $gap = $diff->days * 24 * 60;
        $gap += $diff->h * 60;
        $gap += $diff->i;
        $gaps[$k] = $gap;
    }
    //var_dump($gaps);

    // Get the key of the lowest gap
    $lowestGap = array_keys($gaps, min($gaps));
    //var_dump($lowestGap);
    $i = $lowestGap[0];

    return array($gaps[$i], $i);
};

// Test 1:
$array_1 = ['12:30AM-1:30AM', '2:30AM-10:30PM'];
list($minutes, $index) = $shortestGap($array_1);
echo 'TEST 1: The shortest gap difference is between ' . str_replace('-', ' to ', $array_1[$index]) . ' which outputs ' . $minutes . ' minutes.' . "\n";

// Test 2:
$array_2 = ['12:00PM-1:00PM', '11:00AM-12:00PM'];
list($minutes, $index) = $shortestGap($array_2);
echo 'TEST 2: The shortest gap difference is between ' . str_replace('-', ' to ', $array_2[$index]) . ' which outputs ' . $minutes . ' minutes.' . "\n";

// Test 3:
$array_3 = ['6:00PM-6:01PM', '6:02AM-6:03AM'];
list($minutes, $index) = $shortestGap($array_3);
echo 'TEST 3: The shortest gap difference is between ' . str_replace('-', ' to ', $array_3[$index]) . ' which outputs ' . $minutes . ' minutes.' . "\n";
