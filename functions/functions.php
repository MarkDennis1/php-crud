<?php

//navigate webpages
function redirect($url){
    header("Location: $url");
    die();
}

//navigate subpages
function view($name, $contents = ''){
    global $view_bag;
    require(APP_PATH . "page/layout-page.php");
}

//check if request is post
function is_post(){
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

//check if request is get
function is_get(){
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}

//sanitize input
function sanitize($value){
    $term = filter_var(trim($value), FILTER_SANITIZE_STRING);

    if ($term === false) {
        return '';
    }

    return $term;
}