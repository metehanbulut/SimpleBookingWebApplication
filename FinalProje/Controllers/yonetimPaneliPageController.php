<?php 
require_once(realpath(dirname(__FILE__) . '/..') . '/DatabaseOperations/Connect/veritabaniBaglantisi.php');



function getAllUsers(){
    $db=dbResetle();
    $data=$db->prepare("select usr.*,gvs.soru as \"Guvenlik_Soru\" from users usr inner join guv_sorular gvs on usr.Guvenlik_Soru_Id=gvs.id");
    $data->execute();
    $result=array();

    while($duzenlenenData=$data->fetch(PDO::FETCH_ASSOC))
    {
        array_push($result, $duzenlenenData);
    }
    return $result;
}

function getAllGuvSorular(){
    $db=dbResetle();
    $data=$db->prepare("select * from guv_sorular");
    $data->execute();
    $result=array();

    while($duzenlenenData=$data->fetch(PDO::FETCH_ASSOC))
    {
        array_push($result, $duzenlenenData);
    }
    return $result;
}

function getAllHotels(){
    $db=dbResetle();
    $data=$db->prepare("select * from oteller");
    $data->execute();
    $result=array();

    while($duzenlenenData=$data->fetch(PDO::FETCH_ASSOC))
    {
        array_push($result, $duzenlenenData);
    }
    return $result;
}

function getAllPansiyons(){
    $db=dbResetle();
    $data=$db->prepare("select * from pansiyonlar");
    $data->execute();
    $result=array();

    while($duzenlenenData=$data->fetch(PDO::FETCH_ASSOC))
    {
        array_push($result, $duzenlenenData);
    }
    return $result;
}
?>
