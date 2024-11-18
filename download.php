<?php
function download($file , $name) {
    $size = filesize($file);
    header("Content-type: application/octet-stream");
    header("Content-disposition: attachment; filename=".$name);
    header("Content-Length: ".$size);
    header("Pragma: no-cache");
    header("Expires: 0");
    readfile($file);
}



mysql_connect("localhost", "dbu1146460", "7n.hdfy7");
mysql_select_db("db1146460-1");

list($avail) = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `8bitboy` WHERE `file`='".$_GET['file']."'"));
if($avail<=0) mysql_query("INSERT INTO `8bitboy` (`file`) VALUES ('".$_GET['file']."')");

mysql_query("UPDATE `8bitboy` SET `count`=`count`+1 WHERE `file`='".$_GET['file']."'");



download("latest/".$_GET['file'],$_GET['file']);
?> 