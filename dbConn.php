<?php


class dbConn
{
    protected static $db;


    //veritabanına bağlanan fonksiyon
    public function __construct()
    {
        try{
            self::$db = new PDO("mysql:host=localhost;dbname=tarzyazi_vt1;charset=utf8", "tarzyazi_vt1", "tarzyazi_vt1");
        }
        catch (PDOException $exception)
        {
            print $exception->getMessage();
        }
    }

    //paketleri getiren fonksiyon
    public function getPadiList()
    {
        $data=array();
        $query = self::$db->query("SELECT DISTINCT padi from paketler", PDO::FETCH_ASSOC);
        if($query->rowCount())
        {
            foreach ($query as $row)
            {
                $data[]=$row["padi"];
            }
        }
        echo json_encode($data);
    }


    //kullanıcı sayılarını getiren fonksiyon
    public function getksayisiList($padi){
        $data=array();
        $query = self::$db->prepare("SELECT DISTINCT ksayisi FROM paketler WHERE padi=:padi");
        $query->execute(array(":padi"=>$padi));
        if($query->rowCount())
        {
            foreach ($query as $row)
            {
                $data[]=$row["ksayisi"];
            }
        }
        echo json_encode($data);
    }

      //fiyatları getiren fonksiyon
    public function getFiyatList($ksayisi){
        $data=array();
        $query = self::$db->prepare("SELECT DISTINCT fiyat FROM paketler WHERE ksayisi=:ksayisi");
        $query->execute(array(":ksayisi"=>$ksayisi));
        if($query->rowCount())
        {
            foreach ($query as $row)
            {
                $data[]=$row["fiyat"];
            }
        }
        echo json_encode($data);
    }

       //fiyatları getiren fonksiyon
    public function getitutariList($ksayisi){
        $data=array();
        $query = self::$db->prepare("SELECT DISTINCT itutari FROM paketler WHERE ksayisi=:ksayisi");
        $query->execute(array(":ksayisi"=>$ksayisi));
        if($query->rowCount())
        {
            foreach ($query as $row)
            {
                $data[]=$row["itutari"];
            }
        }
        echo json_encode($data);
    }


      //fiyatları getiren fonksiyon
    public function getifiyatList($ksayisi){
        $data=array();
        $query = self::$db->prepare("SELECT DISTINCT ifiyat FROM paketler WHERE ksayisi=:ksayisi");
        $query->execute(array(":ksayisi"=>$ksayisi));
        if($query->rowCount())
        {
            foreach ($query as $row)
            {
                $data[]=$row["ifiyat"];
            }
        }
        echo json_encode($data);
    }
    
}