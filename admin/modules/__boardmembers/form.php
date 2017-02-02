<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add/Edit Board Of Members</h3>
    </div>

    <form role="form" method="post" action="?page=boardmembers">


        <div class="box-body">
            <div class="form-group">
                <label>Full Name:</label>
                <input class="form-control" type="text" name="full_name" value="<?php echo $f->fullName; ?>">
            </div>

            <div class="form-group">
                <label>Title:</label>
                <input class="form-control" type="text" name="title" value="<?php echo $f->title; ?>">
            </div>

            <div class="form-group">
                <label>Image:</label>
                <input class="form-control" type="text" name="image" value="<?php echo $f->image; ?>">
            </div>
            <div class="form-group">
                <label>Content:</label>
                <textarea class="form-control" name="content" value="<?php echo $f->content; ?>">
                  
                </textarea>
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