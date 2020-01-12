<?php
require_once('library.php');
switch($_GET['idx']){
    case'mainprod':
        $sql="SELECT * FROM picker_prod WHERE isMainSale=1 ORDER BY Id";
        $rows = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        foreach($rows as $row){
            $list[]=array(
                'Id'=>$row['Id'],
                'Name'=>$row['Name'],
                'Price'=>$row['Price'],
                'Nprice'=>$row['Nprice'],
                'PkPrice'=>$row['PkPrice'],
                'MainPic'=>unserialize($row['MainPic'])[0]
            );

        }
        echo json_encode($list);

    break;
}


?>