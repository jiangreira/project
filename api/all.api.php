<?php
require_once('library.php');
switch ($_GET['do']) {
    case 'login':
        $re = $db->query("SELECT * FROM picker_member WHERE ACC='" . $_POST['name'] . "' AND PWD='" . $_POST['password'] . "'")->fetchAll(PDO::FETCH_ASSOC);
        if ($re) {
            $_SESSION['admin'] = $_POST['name'];
            print_r($re);
            $_SESSION['membertype'] = $re[0]['MemberType'];
            plo('../index.php');
        } else echo "<script>alert('帳號或密碼錯誤');" . jlo("../login.php") . "</script>";
        break;
    case 'register':
        $re = $db->query("SELECT * FROM picker_member WHERE ACC='" . $_POST['name'] . "'")->fetchAll(PDO::FETCH_ASSOC);;
        if ($re) {
            echo "<script>alert('帳號重複,請再更換一組帳號');" . jlo("../login.php") . "</script>";
        } else {
            $sql = "INSERT INTO picker_memberinfo(Id,ACC,PWD,Email,Type,Credate,Upddate) 
            VALUES(null,'" . $_POST['name'] . "','" . $_POST['password'] . "','" . $_POST['email'] . "',0,NOW(),NOW())";
            $db->query($sql);
            $returnid = $db->lastInsertId();

            $sql2="INSERT INTO picker_member(UUID,ACC,PWD,MemberId,MemberType,Credate,Upddate) 
            VALUES(null,'" . $_POST['name'] . "','" . $_POST['password'] . "','" . $returnid . "',0,NOW(),NOW())";
            $db->query($sql2);
            
            $finalid = $db->lastInsertId();
            if ($finalid) {
                echo "<script>alert('註冊成功!請再重新登入!');" . jlo("../login.php") . "</script>";
            } else echo "<script>alert('註冊失敗!請再重新登入!');" . jlo("../login.php") . "</script>";
        }

        break;
}
