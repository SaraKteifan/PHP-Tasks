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
•	white
 </b>";

echo "<br> <br>";
$colors = array('white', 'green', 'red');
