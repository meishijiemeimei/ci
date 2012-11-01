<?php 
$connection = mysql_connect ('172.18.1.51' , 'dfemall2' , '123456')
 or die ('不能连接到MySQL Server: ' . mysql_error());
echo '已经成功连接MySQL数据库<br/>';
mysql_select_db('test') or die ('不通选择数据库');
echo '连接test数据库已经成功';
?>