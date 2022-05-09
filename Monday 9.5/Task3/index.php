<?php
// 3-For this PHP exercise, you will use the same format as the previous exercise, requesting input in the first part, and responding in the second, through the magic of PHP's if-else statement. In the first section, give the user an input field and request that they enter a day of the week.

// For the second section, you'll need the following poem:

// Laugh on Monday, laugh for danger.
// Laugh on Tuesday, kiss a stranger.
// Laugh on Wednesday, laugh for a letter.
// Laugh on Thursday, something better.
// Laugh on Friday, laugh for sorrow.
// Laugh on Saturday, joy tomorrow.

// Using the else-elseif-else construction, set each line to output in response to the day the user inputs, with a general response for any input that is not in the poem.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days</title>
</head>
<body>
    <form action="" method="post">
        <label for="day">Enter a day:</label>
        <input type="text" id="day" name="day">
        <button type="submit">Submit</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $day= $_POST["day"];
            if($day == "Monday" || $day == "monday" || $day == "MONDAY"){
                echo "<h1> Laugh on Monday, laugh for danger.</h1>";
            }else if ($day == "Tuesday" || $day == "tuesday" || $day == "TUESDAY"){
                echo "<h1> Laugh on Tuesday, kiss a stranger.</h1>";
            }else if ($day == "Wednesday" || $day == "wednesday" || $day == "WEDNESDAY"){
                echo "<h1> Laugh on Wednesday, laugh for a letter.</h1>";
            }else if ($day == "Thursday" || $day == "thursday" || $day == "THURSDAY"){
                echo "<h1> Laugh on Thursday, something better.</h1>";
            }else if ($day == "Friday" || $day == "friday" || $day == "FRIDAY"){
                echo "<h1> Laugh on Friday, laugh for sorrow.</h1>";
            }else if ($day == "Saturday" || $day == "saturday" || $day == "SATURDAY"){
                echo "<h1> Laugh on Saturday, joy tomorrow.</h1>";
            }else{
                echo "<br>";
                echo "<span style='color:red;'> Please enter a valid input!</sapn>";
            }
        }
    ?>
</body>
</html>