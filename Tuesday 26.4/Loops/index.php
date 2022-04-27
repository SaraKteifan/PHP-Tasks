<?php
echo "<h1>Loops</h1>";

////////////////////////////////////////////////1
echo "=========================================<br>";
echo "<b>1.	Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line.
There will be no dash (-) at the start and end position. <br>
Expected Output: 1-2-3-4-5-6-7-8-9-10  </b>";

echo "<br> <br>";
for ($i=1; $i <=10 ; $i++) { 
    if($i<10)
    {
        echo $i . "-";
    }
    else
    echo $i;
}

////////////////////////////////////////////////2
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>2.	Create a script using a for loop to add all the integers between 0 and 30 and display the total. <br>

Expected Output:  total as a number  </b>";

echo "<br> <br>";
$sum=0;
for ($i=0; $i <= 30 ; $i++) { 
    $sum += $i;
    
}
echo $sum;

////////////////////////////////////////////////3
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>3.	Create a script to generate the following pattern, using the nested for loop. <br>

Expected Output: <br>

A A A A A <br>
A A A B B <br>
A A C C C <br>
A D D D D <br>
E E E E E </b>";

echo "<br> <br>";
for ($i=0; $i < 5  ; $i++) { 

    for ($x=0; $x < 5 ; $x++) { 
        
        
        if($i == 1 && $x>=3)
        {
            echo "B";
        }
        elseif($i == 2 && $x>=2)
        {
            echo "C";
        }
        elseif($i == 3 && $x>=1)
        {
            echo "D";
        }
        elseif($i == 4 )
        {
            echo "E";
        }
        else
        {
            echo "A";
        }
    }
    echo "<br>";
}

////////////////////////////////////////////////4
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>4.	Create a script to generate the following pattern, using the nested for loop. <br>

Expected Output: <br>

1 1 1 1 1 <br>
1 1 1 2 2 <br>
1 1 3 3 3 <br>
1 4 4 4 4 <br>
5 5 5 5 5 </b>";

echo "<br> <br>";
for ($i=0; $i < 5  ; $i++) { 

    for ($x=0; $x < 5 ; $x++) { 
        
        
        if($i == 1 && $x>=3)
        {
            echo 2;
        }
        elseif($i == 2 && $x>=2)
        {
            echo 3;
        }
        elseif($i == 3 && $x>=1)
        {
            echo 4;
        }
        elseif($i == 4 )
        {
            echo 5;
        }
        else
        {
            echo 1;
        }
    }
    echo "<br>";
}

////////////////////////////////////////////////5
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>5.	Create a script to generate the following pattern, using the nested for loop. <br>

Expected Output: <br>

1 0 0 0 0 <br>
0 2 0 0 0 <br>
0 0 3 0 0 <br>
0 0 0 4 0 <br>
0 0 0 0 5 </b>";

echo "<br> <br>";
for ($i=1; $i <= 5  ; $i++) { 

    for ($x=1; $x <= 5 ; $x++) { 
        
        
        if($x == $i)
        {
            echo $i;
        }
        else
        {
            echo 0;
        }
    }
    echo "<br>";
}

////////////////////////////////////////////////6
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>6.	Write a program to calculate and print the factorial of a number using a for loop. 
The factorial of a number is the product of all integers up to and including that number. <br>

Sample Input: 5 <br>
Expected Output: 120 </b>";

echo "<br> <br>";
$num = 100;
$sum = 1;
for ($i=1; $i <= $num ; $i++) { 
    $sum *= $i;
}
echo $sum;

////////////////////////////////////////////////7
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>7.	Write a program to calculate and print the Fibonacci sequence using a for loop. <br>
Fibonacci is a series of numbers where a number is the sum of previous two numbers. 
Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. <br>

Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … </b>";

echo "<br> <br>";
$arr = array (0,1);
 $length = count($arr);
 echo 0 . "<br>";
 echo 1 . "<br>";
for ($i=0; $i < 10; $i++) {  
    $num = $arr[$length-1] + $arr[$length -2];
     echo $num . "<br>";
    
    
    array_push($arr,$num);
    $length = count($arr);
}

////////////////////////////////////////////////8
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>8.	Write a program which will count the 'c' characters in the text 'Orange Coding Academy'. <br>

Sample Input: Orange Coding Academy <br>
Expected Output: 2 </b>";

echo "<br> <br>";
$num = "pizza piZza ";
$num1 = strtolower($num);
echo substr_count($num1, "z");

////////////////////////////////////////////////9
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>9.	Write a PHP script that creates the following table using for loops. 
Add cellpadding='3px' and cell spacing='0px' to the table tag. <br>
1 * 1 = 1	1 * 2 = 2	1 * 3 = 3	1 * 4 = 4	1 * 5 = 5 <br>
2 * 1 = 2	2 * 2 = 4	2 * 3 = 6	2 * 4 = 8	2 * 5 = 10 <br>
3 * 1 = 3	3 * 2 = 6	3 * 3 = 9	3 * 4 = 12	3 * 5 = 15 <br>
4 * 1 = 4	4 * 2 = 8	4 * 3 = 12	4 * 4 = 16	4 * 5 = 20 <br>
5 * 1 = 5	5 * 2 = 10	5 * 3 = 15	5 * 4 = 20	5 * 5 = 25 <br>
6 * 1 = 6	6 * 2 = 12	6 * 3 = 18	6 * 4 = 24	6 * 5 = 30 </b>";

echo "<br> <br>";
echo "<table style= 'border: solid 1px; padding: 3px ; cellspacing = 0px'>";

for ($i=1; $i <= 5; $i++) { 
    echo "<tr >";
    for ($x=1; $x <=5 ; $x++) { 
        $sum = $i * $x;
        echo "<td style= 'border: solid 1px;'> $i * $x = $sum" . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

////////////////////////////////////////////////10
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>10. Write a PHP program that repeats integers from 1 to 50. For multiples of three, 
print 'Fizz' instead of the number, and for multiples of five print 'Buzz'.
For numbers that are multiples of both three and five, print 'FizzBuzz'. <br>

Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz ……. </b>";

echo "<br> <br>";
for ($i=1; $i <= 50; $i++) { 
    if($i % 3 == 0 && $i % 5 == 0 )
    {
        echo "fizz buzz";
    }
    else  if($i % 5 == 0 )
    {
        echo "buzz";
    }
    else if($i % 3 == 0 )
    {
        echo "fizz";
    } 
    else 
    echo $i;

    echo "<br>";
}

////////////////////////////////////////////////11
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>11. Write a PHP program to generate and display the first n lines of a Floyd triangle <br>

According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, 
used in computer science education. It is named after Robert Floyd. 
It is defined by filling the rows of the triangle with consecutive numbers, 
starting with a 1 in the top left corner: <br>

Sample output: <br>
1 <br>
2 3 <br>
4 5 6 <br>
7 8 9 10 <br>
11 12 13 14 15 </b>";

echo "<br> <br>";
$num = 1;
for ($i=1; $i <= 5; $i++) { 
    
    for ($x=1; $x <= $i ; $x++) { 
        
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}

////////////////////////////////////////////////12
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>12. Write a PHP program to print the following pattern. <br>
   
Expected Output: <br>

     A <br>
    A B <br>
   A B C <br>
  A B C D <br>
 A B C D E <br>
  A B C D <br>
   A B C <br>
    A B <br>
     A </b>";

echo "<br> <br>";
$space = 0;
$letters = 4;
for ($i=0; $i < 5 ; $i++) { 
 echo "<pre style='font-size:55px;'>";
    for ($x=$space; $x < 4; $x++ ) { 
       echo " ";
       
    }
    $letter = "A";
    for ($y=$letters; $y <=4 ; $y++) { 
        
        
        echo $letter . " ";
        $letter++;
    }
    echo "</pre>";
 
    $space++;
    $letters--;
}
$space1 = 0;
$letters1 = 3;
for ($i=0; $i < 5 ; $i++) { 
    echo "<pre style='font-size:55px;'>";
       for ($x=$letters1; $x < 4; $x++ ) { 
          echo " ";
          
       }
       $letter = "A";
       for ($y=$space1; $y <=3 ; $y++) { 
           echo $letter . " ";
           $letter++;
       }
       echo "</pre>";
    
       $space1++;
       $letters1--;
   }