<?php
session_start();
$_SESSION["Task"] .= $_POST['task']."+";
echo $_SESSION["Task"];
$dataArr= explode("+", $_SESSION["Task"]);
$l= count($dataArr);
echo "<form>";
for($i=0; $i<$l; $i++){
    echo "<input type='checkbox' name='value$i'>";
    echo $dataArr[$i]."<br>";
}
echo "</form>";

?>