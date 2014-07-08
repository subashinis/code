<?php
$name=$_POST['name'];
$des=$_POST['des'];

$db=mysql_connect('localhost','root','happy');
$open=mysql_select_db('location',$db);
if($open)
{
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) 
{ 
  $tmpName  = $_FILES['image']['tmp_name']; 
  $fp      = fopen($tmpName, 'r');
  $data = fread($fp, filesize($tmpName));
  $data = addslashes($data);
  fclose($fp);


$SQL="INSERT INTO location (location,description,image) VALUES ('$name','$des','$data')";
$result=mysql_query($SQL);
echo "your file has been uploaded..Thank you";
}
}
?>
<html>
<P><A HREF="C1.PHP">Log out </A>
</html>
