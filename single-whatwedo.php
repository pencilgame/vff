<?php get_header(); ?>

<div id="mainContent">
    
    	<div class="left_box" id="lb_page">
       <div class="page_image"><img src="<?php bloginfo('template_url'); ?>/images/VFF8.jpg" width="2100" height="1406" alt=""/></div>
       </div>
       
       <div class="page_title"><h1>What We Do</h1></div>
       
        <div class="sidebar" id="sidebar5"><?php include(TEMPLATEPATH . '/sidebar5.php'); ?></div>
    
    
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
