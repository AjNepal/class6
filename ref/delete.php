<?php
mysql_select_db("ecommerce_db");
$sql = "DELETE FROM tb title='shoes' where id = 1";
mysql_query($sql);
echo "Complete";
?>