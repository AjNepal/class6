<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Settings</h3>
    <a class="btn btn-primary" href="?action=add&page=settings">Add</a>
  </div>
  <div class="box-body no-padding">
      <table class="table table-striped">
        <tr>
          <th>Key</th>
          <th>Value</th>
          <th>Actions</th>
        </tr>
      <?php
           foreach ($list as $k => $v) 
           {
              ?>
            
         <tr>
          <td><?php echo $v['m_key']; ?></td>
          <td><?php echo $v['value']; ?></td>
          <td>
            <a class="btn btn-danger" href="?page=settings&action=delete&id=<?php echo $v['id']; ?>">Delete</a>
            |
            <a class="btn btn-info" href="?page=settings&action=update&id=<?php echo $v['id']; ?>">Edit</a></td>
         </tr>

        <?php  
           }
      ?>
    </table>
  </div>
</div>