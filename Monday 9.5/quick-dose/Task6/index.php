<?php
// 6-In this PHP exercise, you will create an array, print it to the browser, then ask the user to add to it.

// Create an array of modes of transportation, including Automobile, Jet, Ferry, Subway. Print the following statement to the browser: "Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation:" Follow this with an unordered list created by iterating through the array variable you created.

// Next, give the user a text box and ask the user to add other modes of transportation to the list, separated by commas. When the user clicks 'Go', process the input with array functions to send back the original list with the user's additions. Include another text box with the text "Add more?" and another submit button. When the user clicks this button, the page should reload with the new additions added to the previously expanded list. Your code should allow the user to add items as many times as they like.

// session_start();
if(empty($array1)){
$array1=['Automobile', 'Jet', 'Ferry', 'Subway'];
}
// print_r($array);

if (isset($_POST["submit1"])){
    $trans= $_POST["trans"];
    $array2= explode(",",$trans);
    print_r($array2);
    print_r($array1);
    if(isset($x)){
        $array3= array_merge($x,$array2);
    }else{
        $array3= array_merge($array1,$array2);
    }  
    $x= $array3;
    // $_SESSION["all"]= $array1;
    // print_r($_SESSION["all"]);
}

// if (isset($_POST["submit2"])){
//     $trans2= $_POST["trans2"];
//     $array4= explode(",",$trans2);
//     // print_r($_SESSION["all"]);
//     $array5= array_merge($array1,$array4);
//     $array1= $array5;
// }

echo "Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation:<br>
<ul>";
if(isset($x)){
    foreach ($x as  $value) {
        echo "<li>".$value."</li>";
    }
}else{
foreach ($array1 as  $value) {
    echo "<li>".$value."</li>";
}
}
echo "</ul>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post">
        <label for="trans">Add other modes of transportation separated by commas:</label>
        <input type="text" id="trans" name="trans">
        <input type="submit" name="submit1" value="Go">

        <!-- <label for="trans2">Add More</label>
        <input type="text" id="trans2" name="trans2">
        <button type="submit" name="submit2">Go</button> -->

    </form>
</body>
</html>