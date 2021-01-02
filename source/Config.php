<?php

/*
* SITE CONFIG
*/
define("SITE", [
    "name" => "Auth MVC com PHP",
    "description" => "Desenvolvimento de sistema de Login usando PHP",
    "domain" => "localauth.com",
    "locale" => "pt_BR",
    "root" => "http://localhost/auth-login"
]);

/*
* SITE MINIFY
*/
if($_SERVER['SERVER_NAME'] == "localhost") {
    require __DIR__."/Minify.php";
}

/**
 * DATA BASE CONFIG
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "auth",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * SOCIAL CONFIG 
*/

define("SOCIAL", [
    "facebook_page" => "robsonvleite",
    "facebook_author" => "robsonvleite",
    "facebook_appId" => "2193729837289",
    "twitter_creator" => "@yurineves92",
    "twitter_site" => "@yurineves92"
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [

]);

/**
 * SOCIAL LOGIN: FACEBOOK
 */
define("FACEBOOK_LOGIN", [

]);

/**
 * SOCIAL LOGIN: GOOGLE
 */
define("GOOGLE_LOGIN", [

]);
    
