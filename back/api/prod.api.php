<?php
require_once('../library.php');
switch ($_GET['prod']) {
    case 'add';
        // if (
        //     !empty($_POST['prodname']) && (!empty($_POST['subcate'])) && (!empty($_POST['costprice'])) && (!empty($_POST['price'])) &&
        //     (!empty($_POST['nprice'])) && (!empty($_POST['pkprice'])) && (!empty($_POST['prodspec']))
        // ) {
            $Name = $_POST['prodname'];
            $CateId=$_POST['subcate'];
            $CostPrice=$_POST['costprice'];
            $Price=$_POST['price'];
            $NPrice=$_POST['nprice'];
            $PkPrice=$_POST['pkprice'];
            $ProdDesc=$_POST['proddesc'];
            $ShortDesc=$_POST['prodshortdesc'];
            // 壓縮--
            $unprodspec=($_POST['prodspec']);
            $prodspec= serialize($unprodspec);
            //記得壓縮---


            $sql="INSERT INTO picker_prod (Id,Name,CateId,CostPrice,Price,NPrice,PkPrice,ShortDesc,Spec,ProdDesc,Credate,Upddate) 
                VALUES (null,'".$Name."',".$CateId.",".$CostPrice.",".$Price.",".$NPrice.",".$PkPrice.",'".$ShortDesc."','".$prodspec."','".$ProdDesc."',NOW(),NOW())";
            
            print_r($sql);
            print('<hr>');
            print_r($prodspec);
            print('<hr>');
            print_r(unserialize($prodspec));
            // print_r($sql);
            // print_r($sql);



        // }

        //        Array

        // Array
        // (
        //     [prodname] => 商品名稱
        //     [maincate] => 3
        //     [subcate] => 10
        //     [costprice] => 150
        //     [price] => 145
        //     [nprice] => 350
        //     [pkprice] => 99
        //     [prodspec] => Array(
        //             [color] => Array([0] => 黑色,[1] => 黑色)
        //             [size] => Array([0] => S,[1] => M)
        //             [spec] => Array([0] => BS,[1] => BM))
        //     [prodshortdesc] => shortscript
        //     [proddesc] =>  longggggggscript-->

        //         $total = count($_FILES['prodpic']['name']);
        //         print_r($total);
        //         print_r($_POST);

        // Loop through each file
        // for ($i = 0; $i < $total; $i++) {

        //     //Get the temp file path
        //     $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

        //     //Make sure we have a file path
        //     if ($tmpFilePath != "") {
        //         //Setup our new file path
        //         $newFilePath = "./uploadFiles/" . $_FILES['upload']['name'][$i];

        //         //Upload the file into the temp dir
        //         if (move_uploaded_file($tmpFilePath, $newFilePath)) {

        //             //Handle other code here

        //         }
        //     }
        // }
        break;
}
// $ary = array(
//     'a' => array(1, 2, 3),
//     'b' => array(4, 5, 6),
//     'c' => array(7, 8, 9)
// );
// print_r($ary);
// print_r(array_column($ary, 1));

?>

<!-- Array

Array
(
    [prodname] => 商品名稱
    [maincate] => 3
    [subcate] => 10
    [costprice] => 150
    [price] => 145
    [nprice] => 350
    [pkprice] => 99
    [prodspec] => Array(
            [color] => Array([0] => 黑色,[1] => 黑色)
            [size] => Array([0] => S,[1] => M)
            [spec] => Array([0] => BS,[1] => BM))
    [prodshortdesc] => shortscript
    [proddesc] =>  -->