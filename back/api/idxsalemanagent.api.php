<?php
require_once('../library.php');
switch ($_GET['managent']) {
    case 'carousellist':

        break;
    case 'carouselpicadd':
        if (!empty($_FILES['idxcarousel']['name'])) {
            // $sql = "SELECT MAX(Sort) FROM picker_carouselpic;";
            $mweo="SELECT MAX (Sort) FROM picker_carouselpic";
            $maxnum = $db->query($mweo)->fetchAll();

            // $newname = time() . "_" . $_FILES['idxcarousel']['name'];
            // // copy($_FILES['idxcarousel']['tmp_name'], "../upload-carouselpic/" . $newname);
            // if (!empty($maxnum)) {
            //     $sql = "INSERT INTO picker_carouselpic (UUID,Sort,Name,isShow,Credate,Upddate) VALUES(null,'1','" . $newname . "','1',NOW(),NOW())";
               
            //     $sql2='1';
            // } elseif($maxnum>1){
            //     $maxnum=$maxnum+1;
            //      $sql = "INSERT INTO picker_carouselpic (UUID,Sort,Name,isShow,Credate,Upddate) VALUES(null,'" . $maxnum . "','" . $newname . "',' ',NOW(),NOW())";
            //     $sql2='2';
            // }
            // $db->query($sql);
            print_r($maxnum);
            // print_r($sql);
            // print_r("<br>");
            // print_r($sql2);
            // print_r(!empty($maxnum));
        }
        break;
}
