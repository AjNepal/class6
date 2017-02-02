<!DOCTYPE html>
<html lang="en">
<head>
  <title>Class 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <link type="text/css"rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
  <style type="text/css">
       div{
	   border:1px solid black;
	   }
	  
  </style>
  
</head>
<body>
    
    <!--
        xs (for phones)
        sm (for tablets)
        md (for desktops)
        lg (for larger desktops)
    -->

<div class="container-fluid">
    
  <div class="row">
        <div class="col-md-3">
		<a href="class3.html">
		  <img src="images/bag2.jpeg"  height="100"/>
        </a>
        </div>
        <div class="col-md-9 ">
		   <div class="col-md-9">
		     9
			 
		   </div>
		   <div class="col-md-3"> 
		      <?php include_once("templates/search.php"); ?>
		   
		      
           </div>
        </div>
  </div>
  <div class="row">
	     <div class="col-md-12">
          <?php  
		        include_once("templates/menu.php");
		  ?>
        </div>
  </div>
		
  
  
  
  <div class="row">
        <div class="col-md-2 ">
		 <?php 
		       include_once("templates/left.php");
		 ?>
		</div>
		<div class="col-md-8 ">
		  <?php 
		        include_once("templates/content.php");
		  ?>
		</div>
		<div class="col-md-2">
		  <?php include_once("templates/right.php");?>
		</div>
  </div>
  <div class="row">
        <div class="col-md-6 ">
		    <?php 
			     include_once("templates/subfooter1.php");
			?>
		</div>
		<div class="col-md-6 ">
		  <?php 
		       include_once("templates/subfooter2.php");
		  ?>
		
		</div>
  </div>
  <div class="row">
        <div class="col-md-3 ">
		    <?php 
			     include_once("templates/footer1.php");
			?> 
		</div>
		<div class="col-md-3 ">
		    <?php 
			     include_once("templates/footer2.php");
			?>
		</div>
		<div class="col-md-3 ">
		   <?php
		        include_once("templates/footer3.php");
		   ?>
		</div>
		<div class="col-md-3 ">
		     <?php 
			      include_once("templates/footer4.php");
			?>
		</div>
		
</div>
   <div class="row">
        <div class="col-md-12  ">
		     <?php 
			        include_once("templates/copyright.php");
			 ?>
	     </div>
    </div>
  
 </div>

</body>
</html>