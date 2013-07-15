<?php get_header(); ?>
<div class="container">
	<div class="hero-unit">
		<img src="<?php echo get_template_directory_uri(); ?>/bit.svg" alt="team"/>
	</div>
</div>

<div class="row">
	<div class="span8">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h3><?php the_title(); ?></h3>	
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink();?>">Read more</a>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		<!--<p><a class="btn" href="<?php echo get_template_directory_uri(); ?>/logo.jpg">View details &raquo;</a></p>-->
	</div>
	<div class="span4">
		<h3>Sponsors</h3>
		<p>The logos of the sponsors can be put up here.</p>
		<img src="<?php echo get_template_directory_uri(); ?>/sponsors/redhat.png"/>
		<img src="<?php echo get_template_directory_uri(); ?>/sponsors/ubuntu.png"/>
		<img src="<?php echo get_template_directory_uri(); ?>/sponsors/google.png"/>
		<img src="<?php echo get_template_directory_uri(); ?>/sponsors/gnome.png"/>
		<p><a class="btn" href="#">View details &raquo;</a></p>
	</div>
</div>
<?php get_footer(); ?>
