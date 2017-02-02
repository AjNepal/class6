<?php
mysql_select_db("ecommerce_db");
$sql = "UPDATE tb SET title='shoes' where id = 1";
mysql_query($sql);
echo "Complete";
?>