<?php

$request = $_SERVER['REQUEST_URI'];
 $str = str_replace("yourguide.city/src/","",$request);

if ($str == "/" || $str == "/home" )
    include('index.php');
else if ($str == "/explore" || $str == '/CombinePages.php') {
    $_SERVER['REQUEST_URI'] = '/explore';
    include('CombinePages.php');
}
else if ($str == "/apply")
    include('applynow.php');
else if ($str == "/contact")
    include('ContactUs.html');

?>