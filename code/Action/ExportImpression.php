<?php
session_start();
require "../Classe/Impression.Class.php";
include_once "../config.php";



//retrieve impression from database


function ExportFullTable(String $Table, Array $Param = []){
    $conn = new mysqli(Config::SERVEUR, Config::UTILISATEUR, Config::MOTDEPASSE, Config::BDD);

    $sql_querry = "SELECT * FROM " . $Table;
    if($Param[0] != null){
        $sql_querry = $sql_querry . " WHERE " . $Param[0][0] . "= \"" . $Param[0][1] . "\"";
        for($i=1;$i<count($Param);$i++){
            $sql_querry = $sql_querry . " AND " . $Param[$i][0] . "= \"" . $Param[$i][1] . "\"";
        }
    }
    $result = $conn->query($sql_querry);
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    return json_encode(array('data'=> $rows));

}


function ExportWithParam(String $Table, Array $Param){
    $request = "SELECT * FROM " . $Table;

}






