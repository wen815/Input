<?php
$mysqli=new mysqli();
$mysqli->connect('localhost', 'root','root', 'c');
$mysqli->set_charset("utf8");
$sql="select * from t1 order by time desc";
$rs=$mysqli->query($sql);
while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)){
    $c=$row['content'];
    echo"<ul><li>$c</li></ul>";
    $mysqli->close();
}


