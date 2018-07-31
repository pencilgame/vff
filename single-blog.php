<?php get_header(); ?>

<div id="mainContent">
    
    	<div class="left_box" id="lb_page">
       <div class="page_image"><img src="<?php bloginfo('template_url'); ?>/images/VFF19.jpg" width="2000" height="1339" alt=""/></div>
       </div>
       
       <div class="page_title"><h1>Rewilding Happen(ing)s!</h1></div>
       
        <div class="sidebar" id="sidebar3"><?php include(TEMPLATEPATH . '/sidebar3.php'); ?></div>
    
    
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
