<?php
require_once('library.php');
switch ($_GET['prod']) {
    case 'add';
    print_r($_POST);
        if (
            !empty($_POST['prodname']) && (!empty($_POST['subcate'])) && (!empty($_POST['costprice'])) && (!empty($_POST['price'])) &&
            (!empty($_POST['nprice'])) && (!empty($_POST['pkprice'])) && (!empty($_POST['prodspec']))
        ) {
            $Name = $_POST['prodname'];
            $CateId = $_POST['subcate'];
            $CostPrice = $_POST['costprice'];
            $Price = $_POST['price'];
            $NPrice = $_POST['nprice'];
            $PkPrice = $_POST['pkprice'];
            $ProdDesc = $_POST['proddesc'];
            $ShortDesc = $_POST['prodshortdesc'];
            $SpecName=(empty($_POST['SpecName']))?'無規格':$_POST['Spec'];
            // 壓縮--
            $unprodspec = ($_POST['prodspec']);
            $prodspec = serialize($unprodspec);
            // 記得壓縮---

            $sql = "INSERT INTO picker_prod (Id,Name,CateId,CostPrice,Price,NPrice,PkPrice,SpecName,ShortDesc,Spec,ProdDesc,Credate,Upddate) 
            VALUES (null,'" . $Name . "'," . $CateId . "," . $CostPrice . "," . $Price . "," . $NPrice . "," . $PkPrice . ",'" .$SpecName."','". $ShortDesc . "','" . $prodspec . "','" . $ProdDesc . "',NOW(),NOW())";
            print_r($sql);
            $db->query($sql);
            $returnid = $db->lastInsertId();
            
            // 如果有圖片的話再進入這裡
            if (count($_FILES['prodpic']['name'])) {
                $counts = count($_FILES['prodpic']['name']);
                $imgs = array();
                for ($i = 0; $i < $counts; $i++) {
                    $newname = time() . "_" . $_FILES['prodpic']['name'][$i];
                    copy($_FILES['prodpic']['tmp_name'][$i], "../upload/prod/" . $newname);
                    $imgs[] = $newname;
                }
                $img = serialize($imgs);
                $sql = "UPDATE Picker_prod SET MainPic='" . $img . "' WHERE Id=" . $returnid;
                $db->query($sql);
            }
            plo('../pages/prod.php');
        } else {
            return false;
            plo('../pages/prodadd.php');
        }
        break;
    case 'list':
        $sql = "SELECT Id,Name,CateId,Price,NPrice,PkPrice,isMainSale FROM Picker_prod";
        $rows = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $list = json_encode($rows);
        echo $list;
        break;
    case 'cataprod':
        $sql = "SELECT Id,Name,CateId,Price,NPrice,PkPrice,isMainSale FROM Picker_prod WHERE CateId=" . $_GET['id'];
        $rows = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $list = json_encode($rows);
        echo $list;
        break;
    case 'unhome';
        $sql = "SELECT Id,Name,CateId,Price,NPrice,PkPrice,isMainSale FROM Picker_prod WHERE CateId=0";
        $rows = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $list = json_encode($rows);
        echo $list;
        break;
}
