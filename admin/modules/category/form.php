<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add/Edit Category</h3>
    </div>

    <form role="form" method="post" action="?page=category">


        <div class="box-body">
            <div class="form-group">
                <label>Title:</label>
                <input class="form-control" type="text" name="title" value="<?php echo $f[0]['title']; ?>">
            </div>

            <div class="form-group">
                <label>Price:</label>
                <input class="form-control" type="text" name="price" value="<?php echo $f[0]['price']; ?>">
            </div>

        </div>

        <div class="box-footer">

              <?php

                if($_REQUEST['action']=='add')
                {
              ?>
                  <input type="hidden" name="action" value="add">
                  <input class="btn btn-primary" type="submit" value="add">

              <?php   
                }
                else
                {
               ?>

                 <input type="hidden" name="action" value="update">
                 <input type="hidden" name="id" value="<?php echo $f[0]['id']; ?>">
                 <input class="btn btn-primary" type="submit" value="update">

               <?php

                }
              ?>
        </div>   

    </form>

</div>