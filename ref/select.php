<?php
mysql_connect("localhost", "root", "");
mysql_select_db("ecommerce_db");
$sql = "SELECT * FROM tb";
$rs = mysql_query($sql);
//while($row = mysql_fetch_assoc($rs))
while($row = mysql_fetch_object($rs))
{
	echo "<pre>";
	//print_r($row);
	//echo ($row['title']);
	echo $row -> title;
	echo "</pre>";
}
echo "Complete";
?>