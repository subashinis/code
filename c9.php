<?php
$name=$_POST['name'];
$db=mysql_connect('localhost','root','happy');
$open=mysql_select_db('location',$db);
if($open)
{


$SQL="SELECT location  FROM location WHERE (location='$name' )";
$result=mysql_query($SQL);
if($result)
{
$numrows=mysql_num_rows($result);

if($numrows>0)
{
$query="SELECT description,image FROM location ";
$res=mysql_query($query);

while($row = mysql_fetch_array($res,MYSQL_ASSOC))
{
$des=$row['description'];
$des=htmlspecialchars($row['description'],ENT_QUOTES);



echo "<div style='margin:30px 0px;'>
Description : $des<br>
</div>";
}
}
}
}
?>
