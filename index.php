<?php
//$names=('1,2');


echo "Hello! world";
print "Hello! world";
print("Hello! world");
printf("Hello! world");

// print_r($names); //print an arry in a more readable way

// var_dump($names); //print an arry in a more readable way

//single line comment

/*muti line comment*/

# variables 
// a varible is a container for storing data
//variables in php starts with a sign followed by the name of the variable 
//example 
$name = "<h1 style='color:blue'>kadzem Emma</h1>";

echo $name;

//a variable can not start with a number
//variable can only contain alpha-numeric characters and underscore characters
//variable names are case sensitive ($name and $NAME are two different variables)

//operators
$num1 = 5;
$num2 = 10;

//arithmetic operations
$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;
$mod = $num1 %  $num2;

echo $sum;
echo"<br>";
echo $difference;
echo"<br>";
echo $product;
echo"<br>";
echo $quotient;
echo"<br>";
echo $mod;
echo"<br>";

echo "<h4>Comparison Operators</h4>";

$result1 = $num1 == $num2 ? "True": "Fulse"; //Equality check
$result2 = $num1 == $num2 ? "True": "Fulse"; //lessthan check
$result3 = $num1 == $num2 ? "True": "Fulse"; //lessthan check
$result4 = $num1 == $num2 ? "True": "Fulse"; //lessthan check
$result5 = $num1 == $num2 ? "True": "Fulse"; //greaterthan or equal to check

echo $result1;
echo "<br>";
echo $result2;
echo "<br>";
echo $result3;
echo "<br>";
echo $result4;
echo "<br>";
echo $result5;


$num1 < $num2 || $num1 == $num2;
// || or
// && and 
// ! Not


/*
$a = 11;
1 && 1 = 1;
1 && 0 = 1;
0 && 1 = 1;
0 && 0 = 0;

$a > 5 || 5a < 10 = true
1 && 1 = 2
1 || 0 = 1

$a++

$a = $a 
$a += 1
$a++

*/

// echo"<h3>concatinationn is the process of combining  two strings</h3>";
echo "<h4>concatination operators<h4>";
echo "<h4>example<h4>";

$string1 ="Hello!";
$string2 = "Emmanu";

$sentence1 = $string1 ." ".$string2; // hello Emmanu
$sentence2 = "$string1 $string2";

echo $sentence1;
echo "<br>";
echo $sentence2;

//talking on loops

//for loop
//while loop
//foreach loop
//do while loop


// foreach ($)

