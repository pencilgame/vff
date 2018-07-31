<?php get_header(); ?>

<div id="mainContent">

    <?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
    
    	<div class="left_box" id="lb_page">
 
            <div class="page_image">	
            	<?php if ( has_post_thumbnail()) { ?>	
				<?php the_post_thumbnail(); ?>
				<?php	} ?>
            </div>
        	
        </div>

		<div id="content"><?php the_content(); ?>
        <?php include(TEMPLATEPATH . '/share.php'); ?>
        </div>

    
    
    <?php endwhile; ?>
        
	<?php else : ?>

	<h2>Not Found</h2>

	<?php endif; ?>
        

</div><!-- end #mainContent -->

<?php get_footer(); ?>





