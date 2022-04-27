<?php
$fNum= (int)$_POST['firstNum'];
$operation= $_POST['operation'];
$sNum= (int)$_POST['secondNum'];
$result;
switch ($operation){
    case"+":
        $result= $fNum + $sNum;
        break;
    case"-":
        $result= $fNum - $sNum;
        break;
    case"*":
        $result= $fNum * $sNum;
        break;
    case"/":
        $result= $fNum / $sNum;
        break;
}
echo "Result= ".$result;