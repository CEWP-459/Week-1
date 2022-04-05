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

