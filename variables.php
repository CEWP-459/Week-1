<?php

#Types of Variables

#$Message = "Hello World!";
#echo $Message;

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

echo 6 % 4;

echo " ";

echo 2 ** 3;

echo " ";

echo $name . " " . $age;
echo "\n";
var_dump(true and false);
echo "\n"; #'\n' prints it.
var_dump(true && false);

$result1 = true && false;
$result2 = true and false;

var_dump($result1, $result2);

echo "Hi my name is $name and I am {$age} years old";

