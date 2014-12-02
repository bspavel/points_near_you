<?php header('Content-Type: text/html; charset=utf-8');

function __autoload($class_name)
{
    include "./class/{$class_name}.class.php";
}

$lng0=!empty($_GET['lng'])? $_GET['lng'] : 0;
$lat0=!empty($_GET['lat'])? $_GET['lat'] : 0;


$db = new db_connect($lat0,$lng0,RADIUS);
$res=implode(', ',$db->getPointArr());

$html = new html($lat0,$lng0,$res);

echo $html;
?>