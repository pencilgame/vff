<?php get_header(); ?>

<div id="mainContent">
    
    	<div class="left_box" id="lb_page">
       <div class="page_image"><img src="<?php bloginfo('template_url'); ?>/images/VFF24.jpg" width="2000" height="1336" alt=""/></div>
       </div>
       
       <div class="page_title"><h1>Upcoming Workshops & Events</h1></div>
       
        <div class="sidebar" id="sidebar2"><?php include(TEMPLATEPATH . '/sidebar2.php'); ?></div>
    
    
<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
    
	
		<div id="content">
        <div class="content_title"><h1><?php the_title(); ?></h1></div>
        <?php the_content(); ?>
        <?php include(TEMPLATEPATH . '/share.php'); ?>
        </div>

    
    
    <?php endwhile; ?>
        
	<?php else : ?>

	<h2>Not Found</h2>

	<?php endif; ?> 


</div><!-- end #mainContent -->

<?php get_footer(); ?>
