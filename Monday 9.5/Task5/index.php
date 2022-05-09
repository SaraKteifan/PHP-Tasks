<?php
// 5-Arrays allow you to assign multiple values to one variable. For this PHP exercise, write an array variable of weather conditions with the following values: rain, sunshine, clouds, hail, sleet, snow, wind. Using the array variable for all the weather conditions, echo the following statement to the browser:

//     We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. Then came sunshine with a few clouds and some rain. At least we didn't get any hail or sleet.
    
//     Don't forget to include a title for your page, both in the header and on the page itself.

echo "<h1 style='text-align:center;'>Weather</h1>";
$weather_conditions= array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

echo "We've seen all kinds of weather this month. At the beginning of the month, we had ".$weather_conditions[5]." and ".$weather_conditions[6].". Then came ".$weather_conditions[1]." with a few ".$weather_conditions[2]." and some ".$weather_conditions[0].". At least we didn't get any ".$weather_conditions[3]." or ".$weather_conditions[4].".";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
</head>
<body>
    
</body>
</html>