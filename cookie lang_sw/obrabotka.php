<?php
if ( !empty( $_GET['lang_set'] ) )
{
    $lang = $_GET["lang_set"];
    setcookie ( 'language', $lang, time() + 60*60*24*30);
    header( "Location: file1.php" );
}

$lang = "eng";
?>