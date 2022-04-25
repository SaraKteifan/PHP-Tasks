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
Expected Result : First difference between two strings at position 7: 'a' vs 'o'
</b>";

echo "<br> <br>";
