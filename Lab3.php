
<?php

// <!-- Palindromes: Write a function isPalindrome that accepts a string as a parameter and returnstrue if the string is a
// palindrome and false otherwise. A string is considered a palindromeif it has the same  sequence of  letters  when
// reversed  (for  example,  "radar","toot",  "mom",  "a",  "").
//  Your function  should  be  case-insensitive;  for  example,  "Mom"and  "Radar"  should  be  considered palindromes -->
// //Exercise 1
function isPalindorme($wordInput)
{
    $word = $wordInput;
    $word = strtolower($word);
    $wordreversed = strrev($word);
    if ($word == $wordreversed) {
        echo 'String is a palindrome';
    } else {
        echo 'String is not a palindrome';
    }

}

//Exercise 2
//  Drunken  Capitalizer:  Write  a  PHP  function  called  drunken
//  Capitalizer  that  accepts  aString  as  a parameter  and  returns  the
//   same  String  with  randomly  capitalized  characters.  Forexample, drunkenCapitalizer("php rules")
//    could return “PHP RULES”, “pHprULes”, “Php RULEs” or “PHP rules”.Switching  cases  is  not  needed;
//    you  are  only  required  to  randomly  capitalize
//   letters.  So callingdrunkenCapitalizer("PHP RULES") would only return “PHP RULES”

function DrunkCapitalizer($word)
{
    $str = $word;
    $arr = str_split($str);

    for ($count = 0; $count < strlen($str); $count++) {
        if (rand(0, 1000) > rand(0, 1000)) {
            $arr[$count] = strtoupper($arr[$count]);
        }}

    $strRandCapitalized = implode($arr);
    return $strRandCapitalized;
}

// GCD and Euclid’s Algorithm: Write a function named gcd that accepts two integers asparameters and returns the greatest common
// divisor (GCD) of the two numbers. The greatestcommon divisor of  two  integers  a  and  b  is  the  largest  integer  that  is
// a  factor  of  both  a  andb.  The  GCD  of  any number and 1 is 1, and the GCD of any number and 0 is that number.One efficient
// way to compute the GCD is to use Euclid's algorithm, which states the following:gcd(a, b) = gcd(b, a % b)gcd(a, 0) = Absolute value
//  ofaFor example:gcd(24, 84)
// returns 12,gcd(105, 45) returns 15, andgcd(0, 8) returns 8

function GCD($num1, $num2)
{
    $numb1 = $num1;
    $numb2 = $num2;

    if ($numb2 == 1) {
        echo 1;
    } elseif ($numb2 == 0) {
        echo $numb1;
    } else {
        GCD($numb2, numb1 % numb2);
    }

}

// Exercise 4
// Inside Out: Write a PHP function called insideOut() that will accept an array and return itwith its innermost    elements
// swapped    with    its    outer    most    elements.    For    example,    calling insideOut(array(1, 2, 2, 1)) would return
// the array: (2, 1, 1, 2).Similarly,    the    method    call    insideOut(array("Everyone",    "says",    "Kelly",    "is",
// "REALLY","awesome")) would result in: ("Kelly", "says", "Everyone", "awesome", "REALLY", "is").
// The array should only be altered if it has an even number of elements. Return the arraypassed in if this is not the case.
// function

function InsideOut($arr1)
{

    $arr = $arr1;
    if ((count($arr) % 2) == 0) {
        $count = count($arr);
    } else {
        $count = count($arr) - 1;
    }
    $piece1 = array_slice($arr, 0, count($arr) / 2);
    $piece2 = array_slice($arr, count($arr) / 2, count($arr));
    $piece1 = array_reverse($piece1);
    $piece2 = array_reverse($piece2);

    $arr = array_merge($piece1, $piece2);
    echo $arr;
}

//Exercise 5
// Line  sums:  Write  a  PHP  function  called  lineSum  that  accepts  one  integer  and  a  filenameas  a parameter
// and returns the sum of the integers on that line number. For example, you may have a file named sums.txt that contains
//  the following data:515 1020 2550200A call to lineSum( "sums.txt", 2)
// returns 25, and a call to lineSum("sums.txt",5) returns 200.

function lineSum($file, $num1)
{
    $filename == $file;
    $num = $num1;
    $arr = file($filename);
    $count = 0;
    foreach ($data as $line) {
        if ($count == $num) {
            $lineFound = $line;} else {
            $line;}
        $count++;
    }

    $numberArray = str_split($y);
    $sum = 0;
    foreach ($numberArray as $number) {
        $sum = $sum + $number;
    }

    echo $sum;
}

// Exercise 6
// Folder Crawler: Write a PHP function called folderCrawler() 
// that takes a full path to a folder as a parameter and outputs the 
// HTML for an unordered list of all the files in that folder.

function folderCrawler($pathName) {
    //I'm assuming here that the parameter is a path to a directory.
    $directory =$pathName;
    $arr= scandir( $directory, SCANDIR_SORT_NONE); 
    
    foreach ($arr as $fileName) {
        echo "<ul><li>" . $fileName . "<li><ul>";}

}


?>