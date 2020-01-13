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
}

?>