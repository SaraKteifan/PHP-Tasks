<?php
echo "<h1>Functions</h1>";

////////////////////////////////////////////////1
echo "=========================================<br>";
echo "<b>1.	Write a PHP script to check if the inserted number is a prime number<br>
Sample Input:  3 <br>
Expected Output: 3 is a prime number </b>";

echo "<br> <br>";
function primeNum($n){
    for($x=2; $x<$n; $x++){
        if($n % $x == 0){
            return $n." is NOT a prime number";
    }
}
    return $n." is a prime number";
}
echo primeNum(3);

////////////////////////////////////////////////2
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>2.	Write a PHP script to reverse a string <br>
Sample Input:  remove <br>
Expected Output: evomer </b>";

echo "<br> <br>";
function strReverse($str){
    return strrev($str);
}
echo strReverse("remove");

////////////////////////////////////////////////3
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>3. Write a PHP script to check if the all string characters are lower cases <br>
Sample Input:  remove <br>
Expected Output: Your String is Ok </b>";

echo "<br> <br>";
function allLowerCase($str){
    if(ctype_lower($str)){
        return "Your String is Ok";
    }else{
        return "Not all characters are lower case!";
    }
}
echo allLowerCase("remove");

////////////////////////////////////////////////4
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>4.	Write a PHP function to swap to variables? <br>
Sample Input:  x = 12     y= 10 <br>
Expected Output: y=12   x=10 </b>";

echo "<br> <br>";
function swapVars($x, $y){
    $a= $x;
    $b= $y;
    $x= $b;
    $y= $a;
    return "y= ".$y.", x= ".$x;
}
echo swapVars(12, 10);

////////////////////////////////////////////////5
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>5.	Write a PHP function to swap to variables? <br>
Sample Input:  x = 12     y= 10 <br>
Expected Output: y=12   x=10 </b>";

echo "<br> <br>";
echo swapVars(12, 10);

////////////////////////////////////////////////6
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>6.	Write a PHP function to check if a number is an Armstrong number or not ? <br>
**Armstrong number is a number that is equal to the sum of cubes of its digits.
Sample Input:  407 <br>
Expected Output: 407 is Armstrong Number </b>";

echo "<br> <br>";
function ArmstrongNum($n){
    $sum= 0;
    $x= (string)$n;
    $l= strlen($x);
    for($i=0; $i<$l; $i++){
        $sum+= Pow($x[$i],3);
    }
    if($sum == $x){
        return $n." is Armstrong Number";
    }else{
        return $n." is Not Armstrong Number";

    }
}
echo ArmstrongNum(407);

////////////////////////////////////////////////7
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>7.	Write a PHP function that checks whether a passed string is a palindrome or not? <br>
Sample Input:  Eva, can I see bees in a cave? <br>
Expected Output: Yes it is a palindrome </b>";

echo "<br> <br>";
function isPalindrome($str){
    $reversedStr= strrev($str);
    if($reversedStr == $str){
        return "Yes it is a palindrome";
    }else{
        return "No its Not a palindrome";
    }
}
echo isPalindrome("level");

////////////////////////////////////////////////8
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>8.	Write a PHP function to remove duplicates from an array ? <br>
Sample Input: <br>
\$array1 = array(2, 4, 7, 4, 8, 4); <br>
Expected Output: <br>
\$array1 = array(2, 4, 7, 8); </b>";

echo "<br> <br>";
function removeDuplicates($arr){
    $arr= array_unique($arr);
    print_r($arr);
}
$array1 = array(2, 4, 7, 4, 8, 4);
removeDuplicates($array1);