<?php

//1. Write a PHP script to see if the specified year is a leap year or not

function isLeapYear($year)
{
    if ($year % 400 == 0)
        print("It is a leap year");
    if ($year % 4 == 0)
        print("It is a leap year");
    else if ($year % 100 == 0)
        print("It is not a leap year");
    else
        print("It is not a leap year");
}
$year = 2024;
isLeapYear($year);


//2. Write a PHP script to check the season depending on set temperature if the
//temperature is below 20 we are in winter otherwise the season is summer.

$temperature = 21;

if($temperature < 20){
    echo "It is winter";
}else {
    echo "It is summer";
}


//3. Write a PHP script to calculate the sum of the two mapped integers. If the two
//values are the same, then three times their sum is returned.


$numberOne = 2;
$numberTwo = 2;

function mappedInt ($numberOne, $numberTwo){
    if($numberOne === $numberTwo){
        return ($numberOne + $numberTwo) * 3;
    }else {
        return ($numberOne + $numberTwo);
    }
}

echo mappedInt($numberOne, $numberTwo);



//4. Write a PHP script to get the absolute difference between n and 100. If n is
//greater than 100, return triple the absolute difference.

function absDifference ($number){
    if($number > 100){
        return ($number - 100)*3;
    }else {
        return (100 - $number);
    }
}

echo absDifference(90);

//5. Write PHP script to check two integers, and return true if one is 30 or if their sum
//is 30.

function thirtyNumCheck ($numberOne, $numberTwo){
    if($numberOne == 30 || $numberTwo == 30){
        return true;
    }else if(($numberOne + $numberTwo) == 30){
        return true;
    }else {
        return "nothing to return";
    }
}

echo thirtyNumCheck(10, 20);

//6. Write a PHP script to check an integer and return an integer if it is within 10 of
//100 or 200.

function integerChecker($number)
{
    if(abs($number - 100) <= 10 || abs($number - 200) <= 10) {
        return true;
    }
    return false;
}

echo integerChecker(77);

//7. Write in PHP script to check if the given positive number is a multiple of 3 or a
//multiple of 7

function positiveNumber($number)
{
    return $number % 3 == 0 || $number % 7 == 0;
}

echo positiveNumber(5);


//8. Write a PHP script to create a new string where "if" is added to the front of a
//particular string. If the series really begins with "if," then return the string
//unchanged.

$word = "if";
$sentence = "class A is the best";

if(strpos($sentence, $word) !== false){
    echo $word.= $sentence;
} else{
    echo $sentence;
}


//9. Write a PHP script to remove the character in a specific position from a specific
//string. The position selected in range 0..1 string length inclusive

$cropString = "Ashraf";
echo substr($cropString, 1, strlen($cropString ));


//10. Write PHP script to check two integers if either is in the range 100..200 inclusive.

function integerRange($numberOne, $NumberTwo)
{
    return ($numberOne >= 100 && $numberOne <= 200) || ($NumberTwo >= 100 && $NumberTwo <= 200);
}

echo integerRange(103, 140);

//11. Write a PHP script to check if two valid values are in the range of 20.50
//inclusive. Returns true if 1 or another in the listed range is false.

function inRange($numberOne, $numberTwo)
{
    return ($numberOne <= 20 || $numberTwo >= 50) || ($numberTwo <= 20 || $numberOne >= 50);
}

echo inRange(28, 94);

//12. Write PHP script to check for the largest number among three integers

$numberOne = 100;
$numberTwo = 77;
$numberThree = 30;
if($numberOne > $numberTwo && $numberOne  > $numberThree){
    echo $numberOne;
}
else{
    if($numberTwo > $numberOne && $numberTwo > $numberThree){
        echo $numberTwo;
    }
    else
        echo $numberThree;
}

//13. Write in PHP script to check the number closest to 100 between two integers.
//Return 0 if the two numbers are equal


function closestNumber($num1 , $num2){
    $calcNumOne = abs(100 - $num1);
    $calcNumTwo = abs(100 - $num2);

    if($calcNumOne < $calcNumTwo){
        return $num1;
    }else{
        return  $num2;
    }
}

echo closestNumber(70, 40);



//14. Write a PHP script that accepts two integers and returns an integer if one of them
//is 5, their sum, or difference between them is 5.

function fiveChecker($num1, $num2)
{
    if($num1 == 5 || $num2 == 5){
        return true;
    }else if(($num1 + $num2) == 5){
        return true;
    }else if (abs($num1 - $num2) == 5){
        return true;
    }else {
        return "value is not supported";
    }
}

echo fiveChecker(5, 4);