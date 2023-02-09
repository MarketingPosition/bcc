<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$domain = "https://" . $_SERVER['SERVER_NAME'];
$assets = $domain . "/assets";

function printr($value)
{
    echo "<pre>", print_r($value), "</pre>";
}
