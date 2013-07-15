<?php
 $absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
 $wp_load = $absolute_path[0] . 'wp-load.php';
 require_once($wp_load);
 header('Content-type: text/css');
 define('WP_USE_THEMES', false);
 //require('./wp-blog-header.php');
?>
<?php
	$mypost = array('post_type'=>'colors');
 	$loop= new WP_Query($mypost);
	while($loop->have_posts()) : $loop->the_post();
	$title=get_the_title();
	$headings=get_post_meta(get_the_ID(),'headings',true);
	$navbar=get_post_meta(get_the_ID(),'navbar','true');
	$txt=get_post_meta(get_the_ID(),'textcolor','true');
	$background=get_post_meta(get_the_ID(),'background','true');
	endwhile;
?>
@import url('bootstrap/css/bootstrap.css'); 
@import url('bootstrap/css/bootstrap-responsive.css'); 
body { 
     padding-top: 60px; 
     padding-bottom: 40px; 
}

.navbar-inverse .navbar-inner {
  background-color: #1b1b1b;
  background-image: -moz-linear-gradient(top, <?php echo $navbar; ?>, #111111);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo $navbar; ?>), to(#111111));
  background-image: -webkit-linear-gradient(top, <?php echo $navbar; ?>, #111111);
  background-image: -o-linear-gradient(top, <?php echo $navbar; ?>, #111111);
  background-image: linear-gradient(to bottom, <?php echo $navbar; ?>, #111111);
  background-repeat: repeat-x;
  border-color: #252525;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 10px 0;
  font-family: inherit;
  font-weight: bold;
  line-height: 20px;
  color: <?php echo $headings; ?>;
  text-rendering: optimizelegibility;
}
body{
color: <?php echo $txt; ?>;
background-color: <?php echo $background; ?>;
}
