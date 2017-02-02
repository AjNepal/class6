<form method="post" action="?page=category">

  Title: <input type="text" name="title" value="<?php echo $f[0]['title']; ?>">
  Price: <input type="text" name="price" value="<?php echo $f[0]['price']; ?>">
  <?php

    if($_REQUEST['action']=='add')
    {
  ?>
      <input type="hidden" name="action" value="add">
      <input type="submit" value="add">

  <?php   
    }
    else
    {
   ?>

     <input type="hidden" name="action" value="update">
     <input type="hidden" name="id" value="<?php echo $f[0]['id']; ?>">
     <input type="submit" value="update">

   <?php

    }
  ?>

</form>