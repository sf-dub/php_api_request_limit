<?php
/*
* This code defaults to the else stmt where it will get data and store it in $_SESSION['data'].
* Refresh to see 'Got from session!' you can now assign $_SESSION['data'] and use it as much as you'd like. 
* To get new data change the URL and uncomment session_destroy() refresh and you will see 'Got from web!'. 
* This means that a new request was made and $_SESSION['data'] has a new value.
* Comment out session_destroy() and refresh the page.
*/
session_start();
//session_destroy();
if(isset($_SESSION['data']) && !empty($_SESSION['data'])){
    echo('Got from session!<br/>');
    var_dump($_SESSION['data']);
    // Do work ...
}else{
    echo('Got from web!<br/>');
    $data = file_get_contents('https://github.com'); // URL to API or Website
    $_SESSION['data'] = $data;
    var_dump($_SESSION['data']);
}
?>