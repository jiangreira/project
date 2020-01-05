<?php
session_start();
$db=new PDO("mysql:host=127.0.0.1;dbname=php_textdb01;charset=utf8","root","");
date_default_timezone_set('Asia/Taipei');

function select($table,$where){
    global $db; //把外面定義的$db 套用進來
    $sql="SELECT * FROM ".$table." WHERE ".$where;
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
    $db->query($sql);
    return $db->lastInsertId();  //回傳新增的那筆ID
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
function delete($ary,$table){
    global $db;
    foreach($ary as $do=>$data){
        switch($do){
            case 'del': //多筆刪除
            foreach($data as $key=>$value){
                $sql="DELETE FROM ".$table." WHERE id=".$value;
                $db->query($sql);
            }
            break;
            case 'delat':
                $sql="DELETE FROM ".$table." WHERE ".$data;
                $db->query($sql);
            break;
        }
    }
}
//PHP轉址
function plo($link){
    return header("location:".$link);
}

//JS轉址
function jlo($link){
    return "location.href='".$link."'";
    //外面要自己加上<script>
}
function addfile($file){
    $newname=time()."_".$file['name'];
    echo copy($file['tmp_name'],"upload/".$newname);
    return $newname;
}
//分頁           資料表,條件,一頁要幾個,目前哪頁
function navpage($table,$where,$range,$nowpage){
    $result=select($table,$where);
    $total=count($result);
    $many=ceil($total/$range);
    $pg['<<']=($nowpage==1)?1:$nowpage-1;
    for($i=1;$i<=$many;$i++) $pg[$i]=$i;
    $pg['>>']=($nowpage==$many)?$many:$nowpage+1;
    return $pg;
}
//for q1t3 start 標題區圖片
$result=select("q1t3_title","dpy=1");
$t3_img=$result[0]['img'];
$t3_text=$result[0]['text'];

//for q1t4 跑馬燈
$marqee=select("q1t4_maqe","dpy=1");
$t4_text="";
foreach($marqee as $row) $t4_text=$row['text']."  ";

//進站人數
if(empty($_SESSION['visit'])){
    $_SESSION['visit']="checked";//如果不認識的人 先把DB內的人數++
    $_POST['num+1']=1; //這裡1是id 
    update($_POST,"q1t7_total");
}
$rows=select("q1t7_total",1);
$t7_txt=$rows[0]['num'];

//輪播圖
$rows=select("q1t5_mvim","dpy=1");
foreach($rows as $row) $t5_array[]="upload/".$row['text'];

//首頁校園映像檔
$rows=select("q1t6_img","dpy=1");
$t6_num=count($rows);
$t6_text="";
foreach($rows as $key=>$row) {
    $t6_text.='<img src="upload/'.$row['text'].'" id="ssaa'.$key.'" class="im" width="150" height="103">';
}

//頁尾版權
$rows8=select("q1t8_footer",1);
$t8_txt=$rows8[0]['text'];

//最新消息
$rows=select("q1t9_news","dpy=1");
$t9_more=(count($rows)>5)?'<a href="news.php" style="float:right">More...</a>':'';
$rows=select("q1t9_news","dpy=1 limit 5");
$t9_list="";
foreach($rows as $t9select){
    $t9_list.='<li>'.mb_substr($t9select['text'],0,10).'<span class="all" style="display:none">'.$t9select['text'].'</span></li>';
}
//news.php
$nowpage=(empty($_GET['page']))?1:$_GET['page'];
$t9_begin=($nowpage-1)*5;
$rows=select("q1t9_news","dpy=1 limit ".$t9_begin.",5");
$t9_all="";
foreach($rows as $t9select){
    $t9_all.='<li>'.mb_substr($t9select['text'],0,10).'<span class="all" style="display:none">'.$t9select['text'].'</span></li>';
}
$result=navpage("q1t9_news","dpy=1",5,$nowpage);
$t9_navpage="";
foreach($result as $key=>$value){
    $t9_navpage.='<a class="bl" style="font-size:'.(($key==$nowpage)?60:30).'px;" href="?page='.$value.'">'.$key.'</a>';
}
    
//index main bar
$t12_idxmenu='';
$rowsFa=select("q1t12_menu","parent=0 AND dpy=1");
foreach ($rowsFa as $father) {
    $t12_idxmenu.='<a style="color:#000; font-size:13px; text-decoration:none;" href="'.$father['link'].'"><div class="mainmu">'.$father['text'];
    $rowsSon=select("q1t12_menu","parent=".$father['id']);
        foreach($rowsSon as $son){
            $t12_idxmenu.='<a class="mw" href="'.$son['link'].'" style="display:none"><div class="mainmu2">'.$son['text'].'</div></a>';
        }
    $t12_idxmenu.='</div></a>';
}


?>
