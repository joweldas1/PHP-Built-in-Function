<?php
//1- var_dump()   -> To checkd data type
$x = 30;
$y ="Thirty";
echo var_dump($x)." ".var_dump($y) . "<br>";
//result --> int(30) string(6) "Thirty"



//2 - Casting in php
/*
- To convert variable in one form to another form its called casting
ex: string to interger . interger to string etc
*/
$xx = 30; //so it is a interger
$xx = (string) $xx;   // convert int to str
echo var_dump($xx). "<br>";   // result -->string(2) "30"



// 3 - To count string length in PHP
$stringA = "Today is 13th day 03 month 2025 year, I am learning and practicing php";
echo strlen($stringA)."<br>";  //result - 70;

$stringB = "abcdef";
echo strlen($stringB)."<br>";


//4 - to count word in a string in php
$stringC = "This is five words string";
echo str_word_count($stringC)."<br>"; //result -> 5


//5 - search speacific words in a string
$stringD = "This is an rendom string,from this string we will search some thing";
$searchA ="string";
echo strpos($stringD,$searchA);
?>