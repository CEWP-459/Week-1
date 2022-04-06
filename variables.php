<?php

#First Code
$message = "Hello World!";
echo $message;

#Types of Variables
$name = "Kritika Sharma";
$age = 45;
$salary = 45.55;
$is_admin = true;
$adminPassword = null;
var_dump($name);
var_dump($age);
var_dump($salary);
var_dump($is_admin, $adminPassword);


#Operators 
$num1 = 34;
$num2 = 56;
$float1 = 20.70;
var_dump($num1 + $num2);
var_dump($num1 * $float1); #implicit type casting or type juggling

echo 6 % 4; //modulo
echo " "; 
echo 2 ** 3; //exponential
echo " ";
echo $name . " " . $age; //concatenation operator
echo "\n";
var_dump(true and false); //Logical Operators
echo "\n"; #'\n' prints it.
var_dump(true && false);

//difference between and / && 
$result1 = true && false; 
$result2 = true and false;
var_dump($result1, $result2);

echo "Hi my name is $name and I am {$age} years old"; //String Interpolation

//Arrays
$fruits = array("apple", "mango", "banana");
echo $fruits; //error array to string conversion
var_dump($fruits);
var_dump($fruits[0], $fruits[2], $fruits[3]);

$fruits2 = [1 => "apple", 5 => "mango", "banana"]; //manually assigning indexes to arrays
var_dump($fruits2);

$fruits3 = array("one" => "apple", "two" => "mango", "three" => "banana"); //associative arrays
var_dump($fruits3);
var_dump($fruits3["three"]);

$mixed_array = [
    "string" => "apple",
    "integer" => 12,
    "float" => 23.67,
    "empty" => null,
    "boolean" => false
];
var_dump($mixed_array); //array can contain any datatype.

$variable_array = [$name, $age];
var_dump($variable_array); 

$md_array = [
    "Alice" => [23, "ACC"],
    "Luc" => [30, "ENG"],
    "Bruno" => [45, "ADM"]
];
var_dump($md_array); 
var_dump($md_array["Alice"][1], $md_array["Luc"][1], $md_array["Bruno"][1]);

foreach ($mixed_array as $ma) { //printing each item in array
    echo $ma . ",";
}

foreach ($mixed_array as $index => $ma) { //printing each index and the value in the array
    echo $ma . "-" . $index . ",";
}

//How can we not print the last ","
$counter = 0;
foreach ($mixed_array as $index => $ma) { 
    if ($counter == count($mixed_array) - 1) {
        echo $ma . "-" . $index;
    } else {
        echo $ma . "-" . $index . ",";
        $counter++;
    }
}

VAR_DUMP("s"); //syntax highlighting doesn't work but it is case insensitive:)