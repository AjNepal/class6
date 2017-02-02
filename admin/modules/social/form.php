<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add/Edit Social</h3>
    </div>

    <form role="form" method="post" action="?page=social">
        
      <?php
        if(count($e) > 0)
          {
        ?>
        <div class="alert-warning">
           <ul>
             <?php
               foreach ($e as $v) 
                {
              ?>
              <li><?php echo $v; ?></li>
              <?php
            }
          ?>
          </ul>
        </div>
        <?php
          }
        ?>
        <div class="box-body">
            <div class="form-group">
                <label>Social Media:</label>
                <input class="form-control" type="text" name="social_media" value="<?php echo $f->socialMedia; ?>">
            </div>

            <div class="form-group">
                <label>Link:</label>
                <input class="form-control" type="text" name="link" value="<?php echo $f->link; ?>">
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
                 <input type="hidden" name="id" value="<?php echo $f->id; ?>">
                 <input class="btn btn-primary" type="submit" value="update">

               <?php

                }
              ?>
        </div>   

    </form>

</div>