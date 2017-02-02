<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add/Edit Settings</h3>
    </div>

    <form role="form" method="post" action="?page=settings">


        <div class="box-body">
            <div class="form-group">
                <label>Key:</label>
                <input class="form-control" type="text" name="m_key" value="<?php echo $f[0]['m_key']; ?>">
            </div>

            <div class="form-group">
                <label>Value:</label>
                <input class="form-control" type="text" name="value" value="<?php echo $f[0]['value']; ?>">
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