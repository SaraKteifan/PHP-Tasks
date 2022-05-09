<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<!-- // 2-One very useful thing you can do with PHP is include the request for user input and the response in the same file, using conditional statements to tell PHP which one to show. For this PHP exercise, rewrite the two files of the previous exercise into one file using an if-else conditional statement.

// Hint: You'll need some way to tell if the form has been submitted. The function to determine if a variable has been set and is not null is isset(). -->
    <form action="" method="post">
        <label for="city">Enter Your Favorite City</label>
        <input type="text" id="city" name="city">
        <button type="submit">Submit</button>
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $city= $_POST["city"];
        if(!empty($city)){
            echo "<h1> Your favorite city is ".$city."</h1>";
        }else{
            echo "<span style='color:red;'>Please enter your favorite city!</span>";
        }
    }
    ?>
</body>
</html>