<?php

include_once "../config.php";
function ModifyData(String $Table, Array $Param = [], String $collumn, String $newValue){
    $conn = new mysqli(Config::SERVEUR, Config::UTILISATEUR, Config::MOTDEPASSE, Config::BDD);

    $sql_querry = "UPDATE " . $Table . " SET " . $collumn . " = \"" . "$newValue" . "\"";
    if($Param[0] != null){
        $sql_querry = $sql_querry . " WHERE " . $Param[0][0] . "= \"" . $Param[0][1] . "\"";
        for($i=1;$i<count($Param);$i++){
            $sql_querry = $sql_querry . " AND " . $Param[$i][0] . "= \"" . $Param[$i][1] . "\"";
        }
    }
    $conn->query($sql_querry);

}
