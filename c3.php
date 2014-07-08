
<?php
$name=$_POST['name'];
$pd=$_POST['password'];
$add=$_POST['add'];
$pd1=strlen($pd);
$name1=strlen($name);
if($name1>3)
{
if($pd1>2)
{
$d=mysql_connect('localhost','root','happy');
if(mysql_select_db("login",$d))
{
$SQL = "SELECT username FROM login WHERE (username='$name' )";
$result=mysql_query($SQL);
if($result)
{
if(mysql_num_rows($result)>0)
echo "username already exists";
else
{
$SQL="INSERT INTO login (username,password,email) VALUES ('$name','$pd','$add')";
$result=mysql_query($SQL);
mysql_close($d);
session_start();
$_SESSION['l']="1";
header("location:c1.php");
}
}}}
else
echo "password must be 3 characters long";
}
else 
echo "User name must be 4 characters long";
?>
