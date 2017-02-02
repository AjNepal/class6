<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add/Edit Student</h3>
    </div>

    <form role="form" method="post" action="?page=students">


        <div class="box-body">
            <div class="form-group">
                <label>Name:</label>
                <input class="form-control" type="text" name="name" value="<?php echo $f[0]['name']; ?>">
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input class="form-control" type="text" name="email" value="<?php echo $f[0]['email']; ?>">
            </div>

            <div class="form-group">
                <label>Phone:</label>
                <input class="form-control" type="text" name="phone" value="<?php echo $f[0]['phone']; ?>">
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