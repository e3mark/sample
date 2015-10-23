<?php
/**
 * Objective:
 * Given an array of strings, write a function that removes any duplicate values.
 * You are not allowed to use built in functions.
 *
 * For examples: 
 * 1) Input: [ “a”, “b”, “a” , “c”, “a”, “d”, “b”, “e”], Output: [ “c”, “d”, "e"]
 * 2) Input:  [“a”, “b”, “b”], Output: [“a”] 
 * 3) Input: [“b”, “b”, “b”], Output: []
 *
 * How to test:
 * ~$ php unique.php
 */

$remove_duplicate = function ($input) {
    $reference = $input;
    $output = array();
    foreach ($input as $av) {
        $c = 0;
        foreach ($reference as $bv) {
            if ($av == $bv) {
                $c++;
            }
        }
        if ($c == 1) {
            $output[] = $av;
        }
    }
    return $output;
};

$test_1 = ['a', 'b', 'a', 'c', 'a', 'd', 'b', 'e'];
$test_2 = ['a', 'b', 'b'];
$test_3 = ['b', 'b', 'b'];

//Process test 1
echo 'Test 1 result:';
var_dump($remove_duplicate($test_1));

//Process test 2
echo 'Test 2 result:';
var_dump($remove_duplicate($test_2));

//Process test 3
echo 'Test 3 result:';
var_dump($remove_duplicate($test_3));

