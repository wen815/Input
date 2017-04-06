<?php
      $date=date('20y-m-d h:i:s');
$text=$_GET['text'];
if($text==""){
    return;
}
else{
$mysqli=new mysqli();
$mysqli->connect('localhost', 'root', 'root', 'c');
$mysqli->set_charset("utf8");
$sql="insert into t1(time,content)values('$date','$text')";
$rs=$mysqli->query($sql);
$mysqli->close();
}


