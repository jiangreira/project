<?php
require_once('library.php');
switch ($_GET['member']) {
    case 'list':
        $list = array();

        if ($_GET['type'] == 'pk') {
            $rows = select('picker_memberinfo', "type=1");
            
        } elseif ($_GET['type'] == 'normal') {
            $rows = select('picker_memberinfo', "type=0");
        } else {
            $rows = select('picker_memberinfo', "1");
        }
        
        foreach ($rows as $row) {
            $list[] = array(
                'Id' => $row['Id'],
                'Name' => $row['Name'],
                'Type' => $row['Type'],
            );
        }
        $memberlist = json_encode($list);
        echo ($memberlist);
        break;
    case'infochg':
        print_r($_SESSION['userid']);
        print_r($_POST);
        print_r($_GET);
        $sql="UPDATE picker_memberinfo SET Name='".$_POST['name']."',Gender='".$_POST['gender']."',Birth='".$_POST['birth']."',Credate=NOW(),upddate=NOW() WHERE Id=".$_SESSION['userid'];
        $db->query($sql);

        echo '<script>window.history.go(-1)</script>';

    break;
    case'memberordlist':
       
    break;
}
