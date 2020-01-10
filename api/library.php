<?php
session_start();
$db=new PDO("mysql:host=127.0.0.1;dbname=s1080407;charset=utf8","root","");
// $db=new PDO("mysql:host=127.0.0.1;dbname=s1080407;charset=utf8","s1080407","s1080407");
date_default_timezone_set('Asia/Taipei');
$time=",Credate,Upddate";
$time_content=",NOW(),NOW()";



function select($table,$where){
    global $db,$time,$time_content;
    $sql="SELECT * FROM ".$table." WHERE ".$where;
    return $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
function selectcolumn($table,$column,$where){
    global $db,$time,$time_content;
    if(empty($where)){
        $sql="SELECT ".$column." From ".$table;
    }else
    $sql="SELECT ".$column." From ".$table." WHERE ".$where;
    // print_r($sql);
    return $db->query($sql)->fetchAll();
}


function selectcata($table,$where){
    global $db; //把外面定義的$db 套用進來
    $sql="SELECT * FROM ".$table." WHERE ".$where." ORDER BY Floor Asc,Id Asc";
    // print_r($sql);
    return $db->query($sql)->fetchAll();
}

function insert($ary,$table){
    global $db;
    $field="id";
    $data="null";
    foreach($ary as $key=>$value){
        $field.=",".$key;
        $data.=",'".$value."'";
    }
    $sql="INSERT INTO ".$table." (".$field.") VALUES (".$data.")";
    print_r($sql);
    // $db->query($sql);
    // return $db->lastInsertId();  //回傳新增的那筆ID
}
function insertcata($ary,$table){
    global $db,$time,$time_content;
    $field="Id";
    $data="null";
    $parentid=",ParentId";
    $pid=",0";
    if($_POST['Floor']==0){
        foreach($ary as $key=>$value){
            $field.=",".$key;
            $data.=",'".$value."'";
        }
        $field.=$parentid.=$time;
        $data.=$pid.=$time_content;
        $sql="INSERT INTO ".$table." (".$field.") VALUES (".$data.")";
        $db->query($sql);
        return $db->lastInsertId(); 
    }else{
        $field="Id,Floor,Name,ParentId,Credate,Upddate";
        $floor=$ary['Floor'];
        $name=$ary['Catasubname'];
        $parentid=$ary['Catamainid'];
        $data=$data.",".$floor.",'".$name."',".$parentid.$time_content;
        $sql="INSERT INTO ".$table." (".$field.") VALUES (".$data.")";
        $db->query($sql);
        return $db->lastInsertId(); 
        
    }
}



function update($ary,$table){
    global $db;
    //這裡的需要判斷是針對進場人數+1的修該 還是 直接修改值的修改
    foreach($ary as $do=>$data){
        switch($do){
            case 'num+1':
            $sql="UPDATE ".$table." SET num=num+1 WHERE id=".$data; 
            $db->query($sql);
            //$data=對象id
            break;
            case 'num-1':
            $sql="UPDATE ".$table." SET num=num-1 WHERE id=".$data;
            $db->query($sql);
            //$data=對象id
            break;
            default:
            foreach ($data as $key => $value) {
                //$data=內容結構,結構為['id']=修改新值              
                $sql="UPDATE ".$table." SET ".$do."='".$value."' WHERE id=".$key;
                $db->query($sql);
            }
            break;
            
        }
    }
}
// function delete($ary,$table){
//     global $db;
//     foreach($ary as $do=>$data){
//         switch($do){
//             case 'del': //多筆刪除
//             foreach($data as $key=>$value){
//                 $sql="DELETE FROM ".$table." WHERE id=".$value;
//                 $db->query($sql);
//             }
//             break;
//             case 'delat':
//                 $sql="DELETE FROM ".$table." WHERE ".$data;
//                 $db->query($sql);
//             break;
//         }
//     }
// }
//PHP轉址
function plo($link){
    return header("location:".$link);
}

//JS轉址
function jlo($link){
    return "location.href='".$link."'";
    //外面要自己加上<script>
}
// function addfile($file){
//     $newname=time()."_".$file['name'];
//     echo copy($file['tmp_name'],"upload/".$newname);
//     return $newname;
// }
function addfile($file){
    $newname=time()."_".$file['name'];
    echo copy($file['tmp_name'],"upload/".$newname);
    return $newname;
}
// //分頁           資料表,條件,一頁要幾個,目前哪頁
// function navpage($table,$where,$range,$nowpage){
//     $result=select($table,$where);
//     $total=count($result);
//     $many=ceil($total/$range);
//     $pg['<<']=($nowpage==1)?1:$nowpage-1;
//     for($i=1;$i<=$many;$i++) $pg[$i]=$i;
//     $pg['>>']=($nowpage==$many)?$many:$nowpage+1;
//     return $pg;
// }




// //輪播圖
// $rows=select("q1t5_mvim","dpy=1");
// foreach($rows as $row) $t5_array[]="upload/".$row['text'];





//最新消息
// $rows=select("q1t9_news","dpy=1");
// $t9_more=(count($rows)>5)?'<a href="news.php" style="float:right">More...</a>':'';
// $rows=select("q1t9_news","dpy=1 limit 5");
// $t9_list="";
// foreach($rows as $t9select){
//     $t9_list.='<li>'.mb_substr($t9select['text'],0,10).'<span class="all" style="display:none">'.$t9select['text'].'</span></li>';
// }
// //news.php
// $nowpage=(empty($_GET['page']))?1:$_GET['page'];
// $t9_begin=($nowpage-1)*5;
// $rows=select("q1t9_news","dpy=1 limit ".$t9_begin.",5");
// $t9_all="";
// foreach($rows as $t9select){
//     $t9_all.='<li>'.mb_substr($t9select['text'],0,10).'<span class="all" style="display:none">'.$t9select['text'].'</span></li>';
// }
// $result=navpage("q1t9_news","dpy=1",5,$nowpage);
// $t9_navpage="";
// foreach($result as $key=>$value){
//     $t9_navpage.='<a class="bl" style="font-size:'.(($key==$nowpage)?60:30).'px;" href="?page='.$value.'">'.$key.'</a>';
// }
