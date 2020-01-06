<?php
require_once('../library.php');

switch ($_GET['cata']) {
    case 'add':
        $rows = insertcata($_POST, "Picker_cate");
        plo("../cataloge.php");
        break;
    case 'list':
        $rows = selectcata("Picker_cate", 1);
        $list = array();
        foreach ($rows as $row) {
            $list[] = array(
                'Id' => $row['Id'],
                'Floor' => $row['Floor'],
                'Name' => $row['Name'],
                'ParentId' => $row['ParentId']
            );
        }
        $catalist = json_encode($list);
        echo $catalist;
        break;
    case 'addsub':
        if (!empty($_POST['Catasubname'])) {
            insertcata($_POST, "Picker_cate");
            plo("../cataloge.php");
        } else {
            plo("../cataloge.php");
        }
        break;
    case 'cataname':
        $rows = selectcolumn("Picker_cate", "Id,Name", "");
        $list = array();
        foreach ($rows as $row) {
            $list[] = array('Id' => $row['Id'], 'Name' => $row['Name']);
        }
        $cataname = json_encode($list);
        echo $cataname;
        // foreach($rows as $row)
        // print_r($row);

        break;
    case 'catamain':
        $rows = select("Picker_cate", "ParentId=0");
        $list = array();
        foreach ($rows as $row) {
            $list[] = array('Id' => $row['Id'], 'Name' => $row['Name']);
        }
        $catamain = json_encode($list);
        echo $catamain;

        break;
    case 'catasublist':
        // print_r($_POST);
        $rows = select("Picker_cate", "ParentId=" . ($_POST['id']));
        $list = array();
        foreach ($rows as $row) {
            $list[] = array('Id' => $row['Id'], 'Name' => $row['Name'], 'Floor' => $row['Floor'], 'ParentId' => $row['ParentId']);
        }
        $cataname = json_encode($list);
        echo $cataname;
        // print_r($cataname);
        break;
    case 'mdy':

        // print_r(empty($_POST['catasubname']));//true
        if ((!empty($_POST['catamainname'])) && (empty($_POST['catasubname']))) {

            $sql = "UPDATE Picker_cate SET Upddate=NOW(),Name='" . $_POST['catamainname'] . "' WHERE Id=" . $_POST['catamainid'];
            $db->query($sql);
        } elseif ((!empty($_POST['catasubname'])) && (!empty($_POST['catasubid']))) {
            unset($_POST['catamainname'], $_POST['catamainid']);
            $sql = "UPDATE Picker_cate SET Upddate=NOW(),Name='" . $_POST['catasubname'] . "' WHERE Id=" . $_POST['catasubid'];
            $db->query($sql);
            // print_r($_POST);
        };
        plo("../cataloge.php");
        break;
    case 'del':
        if (($_POST['floor'] == 0)) {
            $chsql = "DELETE FROM Picker_cate WHERE ParentId=" . $_POST['id'];
            $db->query($chsql);
            $sql = "DELETE FROM Picker_cate WHERE Id=" . $_POST['id'];
            $db->query($sql);
        } elseif ($_POST['floor'] == 1) {
            $sql = "DELETE FROM Picker_cate WHERE Id=" . $_POST['id'];
            $db->query($sql);
        }
        echo "OK";
        break;
        
}
