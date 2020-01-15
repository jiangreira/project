<?php
require_once('library.php');
switch($_GET['do']){
    case'list':
        $rows=$db->query("SELECT * FROM picker_orderinfo INNER JOIN picker_memberinfo on picker_orderinfo.MemberId=picker_memberinfo.Id")->fetchAll(PDO::FETCH_ASSOC);
        foreach($rows as $row){
            $list[]=array(
                'OrderId'=>$row['Id'],
                'Member'=>$row['Name'],
                'OdrDetail'=>unserialize($row['OdrDetail']),
                'DealPrice'=>$row['DealPrice'],
                'Credate'=>$row['Credate'],
                'Upddate'=>$row['Upddate'],
            );
        }
        
        echo json_encode($list);

    break;
}