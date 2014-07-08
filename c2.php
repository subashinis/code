<?php
$u_name=$_POST['name'];
$passwd=$_POST['passwd'];

$db=mysql_connect('localhost','root','happy');
$open=mysql_select_db('login',$db);
if($open)
{


$u_name = mysql_real_escape_string($u_name);
$passwd = mysql_real_escape_string($passwd);
$SQL="SELECT username,password FROM login WHERE (username='$u_name' AND password='$passwd')";
$result=mysql_query($SQL);
if($result)
{
$numrows=mysql_num_rows($result);

if($numrows>0)
{
session_start();
$_SESSION['login']="1";
header("location:c7.php");
}
else
{
session_start();
$_SESSION['login']="";
header("location:c1.php");
}
}
}
?>