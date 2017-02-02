<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Social</h3>
    <a class="btn btn-primary" href="?action=add&page=social">Add</a>
  </div>
  <div class="box-body no-padding">
      <table class="table table-striped">
        <tr>
          <th>Social Media</th>
          <th>Link</th>
          <th>Actions</th>
        </tr>
      <?php
           foreach ($list as $k => $v) 
           {
              ?>
            
         <tr>
          <td><?php echo $v['social_media']; ?></td>
          <td><?php echo $v['link']; ?></td>
          <td>
            <a class="btn btn-danger" href="?page=social&action=delete&id=<?php echo $v['id']; ?>">Delete</a>
            |
            <a class="btn btn-info" href="?page=social&action=update&id=<?php echo $v['id']; ?>">Edit</a></td>
         </tr>

        <?php  
           }
      ?>
    </table>
  </div>
</div>