<?php
echo "<h1>Array</h1>";

////////////////////////////////////////////////1
echo "=========================================<br>";
echo "<b>1.	Write a script to generate the following paragraph <br>
'The memory of that scene for me is like a frame of film forever frozen at that moment:
the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady.
- Richard M. Nixon' <br>
The words 'red', 'green' and 'white' should come from \$colors array. </b>";

echo "<br> <br>";
$colors = array('red', 'green', 'white');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: 
    the ".$colors[0]." carpet, the ".$colors[1]." lawn, the ".$colors[2]." house, the leaden sky. 
    The new president and his first lady.
    - Richard M. Nixon";

////////////////////////////////////////////////2
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>2.	\$colors = array('white', 'green', 'red') <br>
Write a PHP script that will display the colors as unordered list :<br>
Expected Output:  <br>
•	green <br>
•	red <br>
•	white </b>";

echo "<br> <br>";
$colors = array('white', 'green', 'red');
echo "<ul><li>".$colors[1]."</li><li>".$colors[2]."</li><li>".$colors[0]."</li></ul>";

////////////////////////////////////////////////3
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>3.	\$cities= array( 'Italy'=>'Rome', 'Luxembourg'=>'Luxembourg', 'Belgium'=> 'Brussels', 'Denmark'=>'Copenhagen', 'Finland'=>'Helsinki', 'France' => 'Paris', 'Slovakia'=>'Bratislava', 'Slovenia'=>'Ljubljana', 'Germany' => 'Berlin', 'Greece' => 'Athens', 'Ireland'=>'Dublin', 'Netherlands'=>'Amsterdam', 'Portugal'=>'Lisbon', 'Spain'=>'Madrid' ); <br>
Create a PHP script to displays the capital and country name from the above array \$cities. Sort the list by the capital of the country. <br>
Expected Output: <br>
The capital of Netherlands is Amsterdam <br>
The capital of Greece is Athens <br>
The capital of Germany is Berlin </b>";

echo "<br> <br>";
$cities= array( 'Italy'=>'Rome', 'Luxembourg'=>'Luxembourg', 'Belgium'=> 'Brussels', 'Denmark'=>'Copenhagen', 'Finland'=>'Helsinki', 'France' => 'Paris', 'Slovakia'=>'Bratislava', 'Slovenia'=>'Ljubljana', 'Germany' => 'Berlin', 'Greece' => 'Athens', 'Ireland'=>'Dublin', 'Netherlands'=>'Amsterdam', 'Portugal'=>'Lisbon', 'Spain'=>'Madrid' );
asort($cities);
// print_r($cities);
foreach ($cities as $x => $y){
    echo "The capital of ".$x." is ".$y."<br>";
}

////////////////////////////////////////////////4
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>4.	\$color = array (4 => 'white', 6 => 'green', 11=> 'red'); <br>
Write a PHP script to display the first element of the above array. <br>
Expected Output:  white </b>";

echo "<br> <br>";
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];

////////////////////////////////////////////////5
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>5.	Write a PHP script that inserts a specific new item in an array in any position. <br>
Sample Input: <br>
Array 1 2 3 4 5  <br>
Location: 4 <br>
New Item: $ <br>
Expected Output: 1 2 3 $ 4 5 </b>";

echo "<br> <br>";
$numbers= array(1,2,3,4,5);
$a= array_slice($numbers, 0, 3);
$b= array_slice($numbers, 3);
array_push($a, "$");
$c= array_merge($a, $b);
print_r($c);

////////////////////////////////////////////////6
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>6.	Write a PHP script to sort the following associative array depending on the key value [asc] : <br>
Sample Input: <br>
\$fruits = array('d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple');<br>
Expected Output: <br>
c = apple <br>
b = banana <br>
d = lemon <br>
a = orange <br> </b>";

echo "<br> <br>";
$fruits = array('d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple');
asort($fruits);
// print_r($fruits);
foreach ($fruits as $x => $y){
    echo $x." = ".$y."<br>";
}

////////////////////////////////////////////////7
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>7.	Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures <br>
Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 <br>
Expected Output:<br>
Average Temperature is: 70.6 <br>
List of seven lowest temperatures: 60, 62, 63, 63, 64, <br>
List of seven highest temperatures: 76, 78, 79, 81, 85, <br> </b>";

echo "<br> <br>";
$temp= array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 );
$sum= 0;
foreach($temp as $value){
    $sum+= $value;
}
$avr= $sum / count($temp);
echo "Average Temperature is: ".$avr."<br>";
sort($temp);
$newArr= array($temp[0]);
for($i=1; $i< count($temp); $i++){
    if($temp[$i] != $newArr[count($newArr)-1]){
        array_push($newArr, $temp[$i]);
    }
    if(count($newArr) == 5){
        break;
    }
}
echo "List of five lowest temperatures: ".$newArr[0].", ".$newArr[1].", ".$newArr[2].", ".$newArr[3].", ".$newArr[4]."<br>";
$newArr2= array($temp[count($temp)-1]);
for($i=count($temp)-2; $i>= 0; $i--){
    if($temp[$i] != $newArr2[count($newArr2)-1]){
        array_push($newArr2, $temp[$i]);
    }
    if(count($newArr2) == 5){
        break;
    }
}
$newArr2= array_reverse($newArr2);
echo "List of five highest temperatures: ".$newArr2[0].", ".$newArr2[1].", ".$newArr2[2].", ".$newArr2[3].", ".$newArr2[4]."<br>";

////////////////////////////////////////////////8
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>8.	Write a PHP program to merge the following two arrays. <br>
Sample Input: <br>
\$array1 = array('color' => 'red', 2, 4); <br>
\$array2 = array('a', 'b', 'color' => 'green', 'shape' => 'trapezoid', 4); <br>
Expected Output: <br>
Array <br>
( <br>
    [color] => green <br>
    [0] => 2 <br>
    [1] => 4 <br>
    [2] => a <br>
    [3] => b <br>
    [shape] => trapezoid <br>
    [4] => 4 <br>
) </b>";

echo "<br> <br>";
$array1 = array('color' => 'red', 2, 4);
$array2 = array('a', 'b', 'color' => 'green', 'shape' => 'trapezoid', 4);
$mergedArr= array_merge($array1, $array2);
print_r($mergedArr);

////////////////////////////////////////////////9
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>9.	Write a PHP function to change the following array's and convert all the strings to upper case. <br>
Sample Input: <br>
\$colors = array('red','blue', 'white','yellow'); <br>
Expected Output : <br>
Array <br>
( <br>
    RED <br>
    BLUE <br>
    WHITE <br>
    YELLOW <br>
) </b>";

echo "<br> <br>";
$colors = array('red','blue', 'white','yellow');
$ucolors= array();
foreach($colors as $value){
    array_push($ucolors, strtoupper($value));
}
$colors= $ucolors;
print_r($colors);

////////////////////////////////////////////////10
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>10.	Write a PHP function to change the following array's and convert all the strings to lower case. <br>
Sample Input: <br>
\$colors = array('RED','BLUE', 'WHITE','YELLOW'); <br>
Expected Output : <br>
Array <br>
( <br>
    red <br>
    blue <br>
    white <br>
    yellow <br>
) </b>";

echo "<br> <br>";
$colors = array('RED','BLUE', 'WHITE','YELLOW');
$lcolors= array();
foreach($colors as $value){
    array_push($lcolors, strtolower($value));
}
$colors= $lcolors;
print_r($colors);

////////////////////////////////////////////////11
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>11. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. <br>
Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248 </b>";

echo "<br> <br>";
$nums= array();
for($i=200; $i<=250; $i++){
    if($i % 4 == 0){
        array_push($nums, $i);
    }
}
echo $nums[0];
for($i=1; $i<count($nums); $i++){
    echo ",".$nums[$i];
}

////////////////////////////////////////////////12
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>12. Write a PHP script to get the shortest/longest string length from an array. <br>
Sample Input: <br>
\$words =  array('abcd','abc','de','hjjj','g','wer'); <br>
Expected Output : <br>
The shortest array length is 1. The longest array length is 4. </b>";

echo "<br> <br>";
$words =  array('abcd','abc','de','hjjj','g','wer');
$shortest= strlen($words[0]);
$longest= strlen($words[0]);
foreach($words as $value){
    $x= strlen($value);
    if($x < $shortest){
        $shortest= $x;
    }
    if($x > $longest){
        $longest= $x;
    }
}
echo "The shortest array length is ".$shortest.". The longest array length is ".$longest.".";

////////////////////////////////////////////////13
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>13. Write a PHP script to generate unique random 10 numbers within a specific range. <br>
Sample Input: (11, 20) <br>
Sample Output: 17 16 13 20 14 19 18 15 11 12 <br> </b>";

echo "<br> <br>";
$randomArr= array();
while(count($randomArr)<10){
    array_push($randomArr, rand(11,20));
    $randomArr= array_unique($randomArr);
    if(count($randomArr) == 10){
        break;
    }
}
foreach($randomArr as $value){
    echo $value." ";
}

////////////////////////////////////////////////14
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>14. Write a PHP script that returns the lowest integer in the array  that is not 0. <br>
Sample Input: \$array1 = array( 2, 0, 10, 12, 6) <br>
Sample Output:  2 </b>";

echo "<br> <br>";
$array1 = array( 2, 0, 10, 12, 6);
foreach($array1 as $value){
    if($value != 0){
        $lowest= $value;
        break;
    }
}
foreach($array1 as $value){
    if($value > 0 && $value<$lowest){
        $lowest= $value;
    }
}
echo $lowest;