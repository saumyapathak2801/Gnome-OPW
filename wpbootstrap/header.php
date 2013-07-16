<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>GNOME | Custom theme</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- styles -->
      <!--    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">-->
      <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/style2.php" />

      <?php wp_enqueue_script("jquery"); ?>
      <?php wp_head(); ?>
   </head>
   <body>
      <div class="navbar navbar-inverse navbar-fixed-top" >
	 <div class="navbar-inner">
	    <div class="container">
	       <a class="brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/logo.png" alt="GNOME"/>GUADEC</a>
	       <div class="nav-collapse collapse pull-right">
		  <ul class="nav">
		     <li><?php wp_list_pages(array('title_li' => '','exclude' =>4)); ?></li>
		  </ul>

	       </div>
	    </div>
	 </div>
      </div>
      <div class="container">

