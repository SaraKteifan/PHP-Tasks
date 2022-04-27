<?php
setcookie("user","Sara",time()+(60),"/","",true,true);
echo $_COOKIE["user"]."<br>";
echo isset($_COOKIE["user"]);
#To delete the cookie:
// setcookie("user","Sara",time()-(60),"/","",true,true);
?>