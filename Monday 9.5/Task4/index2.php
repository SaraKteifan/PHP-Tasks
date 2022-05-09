<?php
$day= $_POST["day"];
// print($day);
switch ($day) {
    case 'Monday':
        echo "<h1> Laugh on Monday, laugh for danger.</h1>";
        break;
    case 'Tuesday':
        echo "<h1> Laugh on Tuesday, kiss a stranger.</h1>";
        break;
    case 'Wednesday':
        echo "<h1> Laugh on Wednesday, laugh for a letter.</h1>";
        break;
    case 'Thursday':
        echo "<h1> Laugh on Thursday, something better.</h1>";
        break;
    case 'Friday':
        echo "<h1> Laugh on Friday, laugh for sorrow.</h1>";
        break;
    case 'Saturday':
        echo "<h1> Laugh on Saturday, joy tomorrow.</h1>";
        break;
    default:
        echo "<br>";
        echo "<span style='color:red;'> Please enter a valid input!</sapn>";
        break;
}

echo "<button><a href='index.php'>Back</a></button>";
?>