$lang = "en";
if( isset( $_POST["lang"] ) ) 
{
    $lang = $_POST["lang"];
    setcookie ( 'language', $lang, time() + 60*60*24*30, '/', 'mydomain.com');
    header( "Location: /file1.php" );
}