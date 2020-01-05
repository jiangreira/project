<?php
require_once('../library.php');

switch ($_GET['cata']) {
    case 'add':
        insertcata($_POST, "Picker_cate");
        plo("../cataloge.php");
        break;
    case 'list':
        $rows = selectcata("Picker_cate", 1);
        $list=array();
        foreach($rows as $row){
            $list[]=array(
                'Id'=>$row['Id'],
                'Floor'=>$row['Floor'],
                'Name'=>$row['Name'],
                'ParentId'=>$row['ParentId']);
        }
        $catalist=json_encode($list);
        echo $catalist;
        // print_r($list);
        break;
    case 'addsub':
        if(!empty($_POST['Catasubname'])){
            insertcata($_POST,"Picker_cate");
            plo("../cataloge.php");
        }else{
            plo("../cataloge.php");
        }
    break;
}
