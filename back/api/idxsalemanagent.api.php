<?php
require_once('../library.php');
switch ($_GET['managent']) {
    case 'carousellist':
        $sql = "SELECT * FROM picker_carouselpic ORDER BY Sort Asc";
        $rows = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $list = array();
        foreach ($rows as $row) {
            $list[] = array(
                'Sort' => $row['Sort'],
                'UUID' => $row['UUID'],
                'Name' => $row['Name'],
                'isShow' => $row['isShow']
            );
        }
        $carousellist = json_encode($list);
        echo $carousellist;
        break;
    case 'carouselpicadd':
        if (!empty($_FILES['idxcarousel']['name'])) {
            $total = $db->query('SELECT COUNT(*) FROM picker_carouselpic')->fetchColumn();
            if ($total >= 10) {
                echo "<script>alert('可上傳數量已達上限')," . jlo('../salecarousel.php') . "</script>";
            } else {
                $columnnum = $db->query('SELECT MAX(Sort) FROM picker_carouselpic')->fetchColumn();
                $newname = time() . "_" . $_FILES['idxcarousel']['name'];
                $sql = "";
                copy($_FILES['idxcarousel']['tmp_name'], "../upload-carouselpic/" . $newname);
                if ($total == 0) {
                    $sql = "INSERT INTO picker_carouselpic (UUID,Sort,Name,isShow,Credate,Upddate) VALUES(null,'1','" . $newname . "','1',NOW(),NOW())";

                    $sql2 = '1';
                } else {
                    $columnnum = $columnnum + 1;
                    $sql = "INSERT INTO picker_carouselpic (UUID,Sort,Name,isShow,Credate,Upddate) VALUES(null,'" . $columnnum . "','" . $newname . "','1',NOW(),NOW())";
                    $sql2 = '2';
                }
                $db->query($sql);
                plo('../salecarousel.php');
            }
        } else {
            echo "<script>alert('請再確認圖片是否有上傳')," . jlo('../salecarousel.php') . "</script>";
        }
        break;
    case 'carouselisshow':
        $sql = "UPDATE picker_carouselpic SET isShow=" . $_POST['status'] . ",Upddate=NOW()" . " WHERE UUID=" . $_POST['id'];
        $db->query($sql);
        print_r($sql);
        // echo 'done';
        break;
    case 'carouseldel':
        $sql = "DELETE FROM picker_carouselpic WHERE UUID=" . $_POST['id'];
        $db->query($sql);
        echo 'OK';
        break;
    case 'carouselshortup':
        $sql="UPDATE picker_carouselpic SET Sort=" . $_POST['prevsort'] . ",Upddate=NOW()" . " WHERE UUID=" . $_POST['id'];
        $db->query($sql);
        $sql2="UPDATE picker_carouselpic SET Sort=" . $_POST['sort'] . ",Upddate=NOW()" . " WHERE UUID=" . $_POST['previd'];
        $db->query($sql2);
        echo 'OK';
        break;
    case 'carouselshortdown':
        $sql="UPDATE picker_carouselpic SET Sort=" . $_POST['nextsort'] . ",Upddate=NOW()" . " WHERE UUID=" . $_POST['id'];
        $db->query($sql);
        $sql2="UPDATE picker_carouselpic SET Sort=" . $_POST['sort'] . ",Upddate=NOW()" . " WHERE UUID=" . $_POST['nextid'];
        $db->query($sql2);
        echo 'OK';
        break;
}

    
 
