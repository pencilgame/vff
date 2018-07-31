<?php get_header(); ?>

<div id="mainContent">
    
    	<div class="left_box" id="lb_page">
       <div class="page_image"><img src="<?php bloginfo('template_url'); ?>/images/VFF24.jpg" width="2000" height="1336" alt=""/></div>
       </div>
       
       <div class="page_title"><h1>Upcoming Workshops & Events</h1></div>
       
        <div class="sidebar" id="sidebar2"><?php include(TEMPLATEPATH . '/sidebar2.php'); ?></div>
    
    
    <div id="content">
    <div class="content_title"><h1><?php single_cat_title('Posts for: '); ?>.</h1></div>      
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
                  

<div class="post">


        <div class="thumbnail">
        <?php if ( has_post_thumbnail()) { ?>	
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<?php	} ?>
        </div>

        
        <div class="entry">
        	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="excerpt"><?php the_excerpt(); ?></div> 
        </div>
</div> 
      
    
<?php endwhile; ?>

		<div class="navigation">
			<div class="alignright"><?php next_posts_link('Next Page') ?></div>
			<div class="alignleft"><?php previous_posts_link('Previous Page') ?></div>
		</div>
        
        <?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

     </div> <!-- end .content -->  


</div><!-- end #mainContent -->

<?php get_footer(); ?>
