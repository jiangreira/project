<?php
require_once('library.php');
switch($_GET['do']){
    case'addcart':
        if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
        $_SESSION['cart'][]=array(
            'prodid'=>$_POST['prodid'],
            'name'=>$_POST['name'],
            'qty'=>$_POST['qty'],
            'size'=>$_POST['size'],
            'price'=>$_POST['price'],
            'spec'=>$_POST['spec']
        );
    break;
    case'order':
        print_r($_SESSION['cart']).'=>session';
        print_r($_POST).'=>post';
        print_r($_GET).'=>session';
        $userid=$_SESSION['userid'];
        $membertype=$_SESSION['membertype'];
        $total=0;
        foreach($_SESSION['cart'] as $prod){
            $total+=$prod['price']*$prod['qty'];
        }
        $odrdetail=serialize($_SESSION['cart']);
        $sql="INSERT INTO picker_orderinfo (Id,MemberId,MemberType,OdrDetail,DealPrice,Status,Credate,Upddate) 
        VALUES(null,".$userid.",".$membertype.",'".$odrdetail."',".$total.",0,NOW(),NOW())" ;
        // print_r($sql);
        $db->query($sql);
        $returnid=$db->lastInsertId();

        if($returnid){
            $sql="INSERT INTO picker_trans (UUId,OrderId,MemberId,Recipient,Re_Addr,Re_Phone,Credate,Upddate) 
                VALUES(null,".$returnid.",".$userid.",'".$_POST['recipient']."','".$_POST['re_phone']."','".$_POST['re_addr']."',NOW(),NOW())";
                $db->query($sql);
        }
        unset($_SESSION['cart']);

        
        
    break;
}

?>