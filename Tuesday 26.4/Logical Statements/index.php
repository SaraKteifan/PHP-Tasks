<?php
echo "<h1>Logical Statements and Operators</h1>";

////////////////////////////////////////////////1
echo "=========================================<br>";
echo "<b>1.	Write a PHP script to see if the specified year is a leap year or not. <br>
Sample Input: 2013 <br>
Sample Output: 'This year is not a leap year' </b>";

echo "<br> <br>";
function isLeapYear($year){
    if($year%100 != 0){
        if ($year%4 == 0){
            echo "This year is a leap year.";
        }else{
            echo "This year is NOT a leap year.";
        }
    }else{
        if($year%400 == 0){
            echo "This year is a leap year.";
        }else{
            echo "This year is NOT a leap year.";
        }
    }
}
echo isLeapYear(2013);

////////////////////////////////////////////////2
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>2.	Write a PHP script to check the season depending on the inserted temperature
 if the temperature is below 20, we are in winter otherwise the season is summer. <br>
Sample Input: 27 <br>
Sample Output: 'It is summertime!' </b>";

echo "<br> <br>";
function checkSeason($temp){
    if($temp < 20){
        echo "It is Winter!";
    }else{
        echo "It is summertime!";
    }
}
echo checkSeason(27);

////////////////////////////////////////////////3
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>3.	Write a PHP script to calculate the sum of the two integers. 
If the two values are the same, then calculate the triple of their sum. <br>
Sample Input: [ firstInteger  =>  2 , secondInteger => 2] <br>
Sample Output: ( 2 + 2 ) * 3 = 12 </b>";

echo "<br> <br>";
function towIntegersSum($n1,$n2){
    if($n1 == $n2){
        echo "( ".$n1." + ".$n2." ) * 3 = ".($n1+$n2)*3;
    }else{
        echo "( ".$n1." + ".$n2." ) = ".($n1+$n2);
    }
}
echo towIntegersSum(2,2);

////////////////////////////////////////////////4
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>4.	Write PHP to check if the sum of the two given numbers equals 30,
if the condition is true the return their sum otherwise return false <br>
Sample Input: [ firstInteger  =>  10 , secondInteger => 10] <br>
Sample Output: 'false' </b>";

echo "<br> <br>";
function isSumEquals30($n1,$n2){
    $sum= $n1 + $n2;
    if($sum == 30){
        echo "The sum is 30";
    }else{
        echo "false";
    }
}
echo isSumEquals30(10,10);

////////////////////////////////////////////////5
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>5.	Write in PHP script to check if the given positive number is a multiple of 3.<br>
Sample Input: number = 20 <br>
Sample Output: 'false' </b>";

echo "<br> <br>";
function isMultipleOf3($n){
    if($n % 3 == 0){
        echo "true";
    }else{
        echo "false";
    }
}
isMultipleOf3(20);

////////////////////////////////////////////////6
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive. <br>
Sample Input: number = 50 <br>
Sample Output: 'true' </b>";

echo "<br> <br>";
function isInTheRange($n){
    if($n >= 20 && $n <= 50){
        echo "true";
    }else{
        echo "false";
    }
}
isInTheRange(50);

////////////////////////////////////////////////7
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>7.	Write PHP script to find the largest number between the three integers <br>
Sample Input: [ 1, 5, 9 ] <br>
Sample Output: 9 </b>";

echo "<br> <br>";
function largestNum($n1, $n2, $n3){
    if($n1>$n2 && $n1>$n3){
        echo $n1;
    }else if($n2>$n1 && $n2>$n3){
        echo $n2;
    }else{
        echo $n3;
    }
}
largestNum(1, 5, 9);

////////////////////////////////////////////////8
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>8.	Write PHP script to calculate the monthly electricity bill according to these rules <br>
 
a.	For first 50 units _ 2.50 JOD/Unit <br>
b.	For next 100 units _ 5.00 JOD/Unit <br>
c.	For next 100 units _ 6.20 JOD/Unit <br>
d.	For units above 250 _ 7.50 JOD/Unit </b>";

echo "<br> <br>";
function electricityBills($units){
    if($units <= 50){
        $bill= $units * 2.5;
    }else if($units > 50 && $units <= 150){
        $bill= 50 * 2.5 + ($units-50) * 5;
    }else if($units > 150 && $units <= 250){
        $bill= 50 * 2.5 + 100 * 5 + ($units-150) * 6.20;
    }else{
        $bill= 50 * 2.5 + 100 * 5 + 100 * 6.20 + ($units-250) * 7.50;
    }
    echo "The electricity bill is ".$bill." JOD";
}
echo electricityBills(50);

////////////////////////////////////////////////9
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>9.	 Write php script to make a calculator, the calculator should contain the four main operations <br>

e.	Addition <br>
f.	Subtraction <br>
g.	Multiplication <br>
h.	Division </b>";

echo "<br> <br>";


////////////////////////////////////////////////10
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>10. Write php script to check if a person is eligible to vote, minimum age required for voting is 18. <br>

Sample Input: 15 <br>
Sample Output: 'is no eligible to vote' </b>";

echo "<br> <br>";
function isEligibleToVote($age){
    if($age < 18){
        echo 'is no eligible to vote';
    }else{
        echo 'is eligible to vote';
    }
}
isEligibleToVote(15);

////////////////////////////////////////////////11
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>11. Write php script  to check whether a number is positive, negative or zero <br>

Sample Input: -60 <br>
Sample Output: 'Negative' </b>";

echo "<br> <br>";
function checkNum($num){
    if($num == 0){
        echo "It's Zero!";
    }else if($num <0){
        echo "Negative";
    }else if($num >0){
        echo "Positive";
    }
}
checkNum(-60);

////////////////////////////////////////////////12
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>12. Write a PHP to find the grade for the student, 
after calculating the average of his score in all the subject <br>

Sample Inputs: [60,86,95,63,55,74,79,62,50] <br>
Sample Output: 'D' <br>

Range	Grade <br>
<60	F <br>
<70	D <br>
<80	C <br>
<90	B <br>
<100	A </b>";

echo "<br> <br>";
function studentGrade($gradesArr){
    $l= count($gradesArr);
    $sum= 0;
    for($i=0; $i< $l; $i++){
        $sum+= $gradesArr[$i];
    }
    $avr= $sum/$l;
    if($avr < 60){
        echo "F";
    }else if($avr < 70){
        echo "D";
    }else if ($avr < 80){
        echo "C";
    }else if ($avr < 90){
        echo "B";
    }else if ($avr <= 100){
        echo "A";
    }
}
$student1= array(60,86,95,63,55,74,79,62,50);
studentGrade($student1);
