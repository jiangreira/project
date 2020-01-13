<?php


function select2($table,$where){
    global $db,$time,$time_content;
    $sql="SELECT * FROM ".$table." WHERE ".$where;
    return $db->query($sql)->fetchAll();
}