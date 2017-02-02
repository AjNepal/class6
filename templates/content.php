<div class="text-success">
  <?php

      include_once("includes/settings.php");

      switch($_REQUEST['page'])
      {
          case 'category':
             include_once("modules/category/controller.php");
             break;

          default:
          include_once("modules/home/controller.php");

      }

    ?>
</div>