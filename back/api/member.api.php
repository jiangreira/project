<?php
require_once('../library.php');
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

        // print_r($memberlist);



        break;
}
