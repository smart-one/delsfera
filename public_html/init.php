<?
//Конфигурационный файл
setlocale(LC_ALL, "ru_RU.utf-8");
ini_set("display_errors",1);
ini_set("display_startup_errors",1);
ini_set("error_reporting",E_ALL ^ E_NOTICE);

//define(_ADMIN_MAIL,"pravo@pravo-spb.net");
define(_ADMIN_MAIL,"evgeniy_conung@mail.ru");
define(CONTACT_PHONE, "(812) 920-72-09");
define(CONTACT_EMAIL, "9207209@bk.ru");

require_once $_SERVER['DOCUMENT_ROOT']."/libs/lib.debug.php";
?>