<?php

mysql_connect("localhost", "ftp81305", "7n.hdfy7");
mysql_select_db("andre_michelle_com");

$qry = mysql_query("SELECT * FROM `8bitboy` ORDER BY file ASC");

while($row = mysql_fetch_array($qry))
{
   echo $row['file']." -> ".$row['count']."<br/>";
}

?>