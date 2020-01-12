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
    case'carouselpic':
        $sql = "SELECT Name FROM picker_carouselpic ORDER BY Sort Asc";
        $rows = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rows);
    break;
    case'proddetail':
        $re=select('picker_prod', 'id=' . $_GET['id']);
        $rows= $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        print_r($rows);
    break;
}


?>