<?php get_header(); ?>

<div id="mainContent">
    
    	<div class="left_box" id="lb_page">
		<div id="sidebar3"><?php include(TEMPLATEPATH . '/sidebar3.php'); ?></div>
        </div>
    
    
    <div id="content">
	<h1>Search Results for "<?php the_search_query(); ?>"</h1>   
    
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
                  

<div class="post">

        <div class="entry">
        	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="metadata"><?php the_time('F j, Y') ?>, by <?php the_author(); ?></div>
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
