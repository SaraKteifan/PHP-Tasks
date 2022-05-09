<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days</title>
</head>
<body>
<!-- 4-You probably noticed that the if-elseif-else construction was repetitive and cumbersome in the last exercise. It works best with only one or two choices. A more appropriate construction for this exercise is the switch statement, combined with a select field in the form for the days of the week. So your assignment in this PHP exercise is to rewrite the previous exercise using a select field for the user input and the switch statement to process the response.

Once again, here's the poem:

Laugh on Monday, laugh for danger.
Laugh on Tuesday, kiss a stranger.
Laugh on Wednesday, laugh for a letter.
Laugh on Thursday, something better.
Laugh on Friday, laugh for sorrow.
Laugh on Saturday, joy tomorrow.

Remember to include a general response for any input that is not in the poem. To make things a little more interesting, include a 'Back' button on the response so that the user can go back and try different days. -->
    <form action="index2.php" method="post">
        <label for="day">Choose a day:</label>
        <select name="day" id="day">
            <option>Select</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>