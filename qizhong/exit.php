<?php
setcookie("user", "", time()-3600);
setcookie("uid", "", time()-3600);
header("Location:userlogin.php");
?>