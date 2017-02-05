<?php
include_once("thirdparty/phpdao/include_dao.php");

$dao = DAOFactory::getTblContentDAO();
$dbo = $dao->load(1);
?>
<div class="home_lt f_lt">
  <div class="home_lt_img f_lt"><img src="admin/images/sitecontent/<?php echo $dbo->image; ?>" alt="<?php echo $dbo->title; ?>" /></div>
  <div class="home_lt_txt f_rt">
    <h1><?php echo $dbo->title; ?></h1>
    <p>
    	<?php echo $dbo->content; ?>
    </p>
  </div>
  <div class="cl"></div>
</div>