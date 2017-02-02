<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Links</h3>
    <a class="btn btn-primary" href="?action=add&page=links">Add</a>
  </div>
  <div class="box-body no-padding">
      <table class="table table-striped">
        <tr>
          <th>Title</th>
          <th>Link Url</th>
          <th>Actions</th>
        </tr>
      <?php
           foreach ($list as $k => $v) 
           {
              ?>
            
         <tr>
          <td><?php echo $v -> title; ?></td>
          <td><?php echo $v -> linkUrl; ?></td>
          <td>
            <a class="btn btn-danger" href="?page=links&action=delete&id=<?php echo $v -> id; ?>">Delete</a>
            |
            <a class="btn btn-info" href="?page=links&action=update&id=<?php echo $v -> id; ?>">Edit</a></td>
         </tr>

        <?php  
           }
      ?>
    </table>
  </div>
</div>