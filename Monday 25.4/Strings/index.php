<?php
echo "<h1>PHP String and String Functions</h1>";

////////////////////////////////////////////////1
echo "=========================================<br>";
echo "<b>1. Write a PHP script to: 
<br>a.	Convert the entered string to uppercase
<br>b.	Convert the entered string to lowercase.
<br>c.	Make the first letter of the string uppercase.
<br>d.	Make the first letter of each word capitalized.</b>";

echo "<br> <br>";
$string1= "Hello ORANGE Coding Academy, today is monday.";
echo "The string: ", $string1;
echo "<br>a. ", strtoupper($string1);
echo "<br>b. ", strtolower($string1);
echo "<br>c. ", ucfirst($string1);
echo "<br>c. ", ucwords($string1);

////////////////////////////////////////////////2
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>2. Write a PHP script splitting the following numeric string to be a date format. <br>
Sample Output: '085119'<br>
Expected Output: 08:51:19</b>";

echo "<br> <br>";
$nstring= '085119';
echo substr(chunk_split($nstring, 2, ':'), 0, -1);

////////////////////////////////////////////////3
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>3. Write a PHP script to check whether the sentence contains a specific word.<br>
Sample Output: 'I am a full stack developer at orange coding academy'<br>
Sample Word: 'Orange'<br>
Expected Output: 'Word Found!'</b>";

echo "<br> <br>";
$string2= 'I am a full stack developer at orange coding academy';
if (gettype(stripos($string2,'Orange')) == 'integer'){
    echo 'Word Found!';
}else{
    echo 'Word NOT Found!';
};

////////////////////////////////////////////////4
echo "<br> <br>";
echo "=========================================<br>";
echo "<b> 4. Write a PHP script to extract the file name from the URL.<br>
Sample Output: 'www.orange.com/index.php'<br>
Expected Output: 'index.php'</b>";

echo "<br> <br>";
$url = 'www.orange.com/index.php';
echo substr($url, strrpos($url, "/")+1);

////////////////////////////////////////////////5
echo "<br> <br>";
echo "=========================================<br>";
echo "<b> 5. Write a PHP script to extract the username from the following email address.<br>
Sample Output: 'info@orange.com'<br>
Expected Output: 'info'</b>";

echo "<br> <br>";
$email= 'info@orange.com';
echo substr($email, 0, strpos($email, "@"));

////////////////////////////////////////////////6
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>6.	Write a PHP script to get the last three characters from the string.<br>
Sample Output: 'info@orange.com'<br>
Expected Output: 'com'</b>";

echo "<br> <br>";
$email= 'info@orange.com';
echo substr($email, strpos($email, ".")+1);

////////////////////////////////////////////////7
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>7.	Write a PHP script to generate simple random passwords
[do not use rand () function] from a given string.<br>
Sample Output: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'<br>
Expected Output: 254ABCc or h242sfeDAFEe32  -> random number</b>";

echo "<br> <br>";
$string3= '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($string3), 0, 6);
echo "<br>";
echo substr(str_shuffle($string3), 0, 12);
echo "<br>";
echo substr(str_shuffle($string3), 0, 8);

////////////////////////////////////////////////8
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>8.	Write a PHP script to replace the first word of the sentence with another word.<br>
Sample Output: 'That new trainee is so genius.'
Sample Word: 'Our'
Expected Result: Our new trainee is so genius.</b>";

echo "<br> <br>";
$string4= 'That new trainee is so genius.';
$word1= 'Our';
echo "The original string: ", $string4;
echo "<br>";
$string5= strpbrk($string4, " ");
echo "After replacement: ".$word1." ".$string5;

////////////////////////////////////////////////9
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>9.	Write a PHP script to find the first character that is different between two strings.<br>
String1 : 'dragonball'<br>
String2 : 'dragonboll'<br>
Expected Result : First difference between two strings at position 7: 'a' vs 'o' </b>";

echo "<br> <br>";
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);


////////////////////////////////////////////////10
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>10. Write a PHP script to put a string in an array, use the (var_dump) to view the array. <br>
Sample Output: 'Twinkle, twinkle, little star.' <br>
Expected Result: array (4) {[0] => string (30) 'Twinkle, ' [1] => string (26) ' twinkle,' 
[2] => string (27) twinkle' [3] => string (26) ' little star.'} </b>";

echo "<br> <br>";
$str= 'Twinkle, twinkle, little star.';
$strArr= explode(",", $str);
var_dump($strArr);

////////////////////////////////////////////////11
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>11. Write a PHP script to print the next letter of the inputted letter. <br>

Sample Character: 'a' <br>
Expected Output: 'b' <br>
Sample Character: 'z' <br>
Expected Output: 'a' </b>";

echo "<br> <br>";
$letter1= "a";
$letter2= "z";
echo ++$letter1."<br>";
echo ++$letter2."<br>";

////////////////////////////////////////////////12
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>12. Write a PHP script to insert a string at the specified position in a given string. <br> 

Original String: 'The brown fox' <br>
Insert 'quick' between 'The' and 'brown'. <br>
Expected Output: 'The quick brown fox' <br>
Then Write a PHP script to get the first word of a sentence. <br>
Original String: 'The quick brown fox' <br>
Expected Output: 'The' </b>";

echo "<br> <br>";
$str2= 'The brown fox';
$word= 'quick';
$arr1= explode(" ",$str2);
$arr2= array_slice($arr1, 0, 1);
$arr3= array_slice($arr1, 1);
array_push($arr2, $word);
$arr4= array_merge($arr2, $arr3);
foreach($arr4 as $v){
    echo $v." ";
}
echo "<br>";
echo $arr4[0];



////////////////////////////////////////////////13
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>13. Write a PHP script to remove zeroes from the given number. <br>

Original String: '0000657022.24' <br>
Expected Output: '65722.24' </b>";

echo "<br> <br>";
$str3= '0000657022.24';
echo str_replace('0','',$str3);


////////////////////////////////////////////////14
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>14. Write a PHP script to remove part of a string. <br>

Original String: 'The quick brown fox jumps over the lazy dog' <br>
Remove 'fox' from the above string. <br>
Expected Output: 'The quick brown jumps over the lazy dog' </b>";

echo "<br> <br>";
$str4= 'The quick brown fox jumps over the lazy dog';
echo str_replace('fox','',$str4);

////////////////////////////////////////////////15
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>15. Write a PHP script to remove trailing dashes from a string. <br>

Original String: 'The quick brown fox jumps over the lazy dog---' <br>
Expected Output: 'The quick brown fox jumps over the lazy dog' </b>";

echo "<br> <br>";
$str5= 'The quick brown fox jumps over the lazy dog---';
echo rtrim($str5,"-");

////////////////////////////////////////////////16
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>16. Write a PHP script to remove Special characters from the following string. <br>

Sample Output: '\"\1+2/3*2:2-3/4*3' <br>
Expected Output: '1 2 3 2 2 3 4 3' </b>";

echo "<br> <br>";
$str6= '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'),' ',$str6);

////////////////////////////////////////////////17
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>17. Write a PHP script to select first 5 words from the following string. <br>

Sample Output: 'The quick brown fox jumps over the lazy dog' <br>
Expected Output: 'The quick brown fox jumps' </b>";

echo "<br> <br>";
$str7= 'The quick brown fox jumps over the lazy dog';
$stringArr= explode(" ", $str7);
for($i=0; $i<5; $i++){
    echo $stringArr[$i]." ";
}

////////////////////////////////////////////////18
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>18. Write a PHP script to remove comma(s) from the following numeric string. <br>
 
Sample Output: '2,543.12' <br>
Expected Output: 2543.12 </b>";

echo "<br> <br>";
$str8= '2,543.12';
echo str_replace(',','',$str8);

////////////////////////////////////////////////19
echo "<br> <br>";
echo "=========================================<br>";
echo "<b>19. Write a PHP script to print letters from 'a' to 'z'. <br>
Expected Output: a b c d e f g h I j k l m n o p q r s t u v w x y z  </b>";

echo "<br> <br>";
for($i='a'; $i<='z'; $i++){
    echo $i." ";
    if ($i == 'z') break;
}