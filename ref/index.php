<?php
mysql_connect("localhost", "root", "");
mysql_select_db("ecommerce_db");
$sql = "INSERT INTO tb(title) VALUES ('Elicrtonics')";
mysql_query($sql);
echo "Complete";
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>