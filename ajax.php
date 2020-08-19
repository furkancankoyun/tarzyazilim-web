<?php
include ("dbConn.php");

$action=$_POST["action"];

switch ($action)
{
    case "padi":
        $db=new dbConn();
        return $db->getPadiList();
        break;

    case "ksayisi":
        $db=new dbConn();
        $padi=$_POST["name"];
        return $db->getksayisiList($padi);
        break;
        
    case "fiyat":
        $db=new dbConn();
        $ksayisi=$_POST["name"];
        return $db->getFiyatList($ksayisi);
        break;

    case "itutari":
        $db=new dbConn();
        $ksayisi=$_POST["name"];
        return $db->getitutariList($ksayisi);
        break;

    case "ifiyat":
        $db=new dbConn();
        $ksayisi=$_POST["name"];
        return $db->getifiyatList($ksayisi);
        break;
   
}