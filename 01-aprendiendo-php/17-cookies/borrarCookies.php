<?php

unset($_COOKIE['micookie']);
unset($_COOKIE['unyear']);

setcookie('micookie', '', time()-100);
setcookie('unyear', '', time()-100);


header('Location:ver_cookies.php');

?>