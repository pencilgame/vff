<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">

<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/classie.js"></script>


<?php wp_head(); ?>


<script type="text/javascript">
jQuery(window).scroll(function(){
    var fromTopPx = 100; // distance to trigger
    var scrolledFromtop = jQuery(window).scrollTop();
    if(scrolledFromtop > fromTopPx){
        jQuery('body').addClass('scrolled');
    }else{
        jQuery('body').removeClass('scrolled');
    }
});
</script>
  	
  	<script type="text/javascript">
jQuery(window).scroll(function(){
    var fromTopPx2 = 600; // distance to trigger
    var scrolledFromtop = jQuery(window).scrollTop();
    if(scrolledFromtop > fromTopPx2){
        jQuery('body').addClass('scrolled2');
    }else{
        jQuery('body').removeClass('scrolled2');
    }
});
</script>
  	
  	  	<script type="text/javascript">
jQuery(window).scroll(function(){
    var fromTopPx2 = 1000; // distance to trigger
    var scrolledFromtop = jQuery(window).scrollTop();
    if(scrolledFromtop > fromTopPx2){
        jQuery('body').addClass('scrolled3');
    }else{
        jQuery('body').removeClass('scrolled3');
    }
});
</script>
 
  <script type="text/javascript">	
 $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 100) {
    $('#leaf1').fadeIn();
  } else {
    $('#leaf1').fadeOut();
  }
}); 	
	</script>
  	
  	  <script type="text/javascript">	
 $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 350) {
    $('#leaf2').fadeIn();
  } else {
    $('#leaf2').fadeOut();
  }
}); 	
	</script>
  	
  	  <script type="text/javascript">	
 $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 700) {
    $('#leaf3').fadeIn();
  } else {
    $('#leaf3').fadeOut();
  }
}); 	
	</script>
  	
  	  <script type="text/javascript">	
 $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 1000) {
    $('#leaf4').fadeIn();
  } else {
    $('#leaf4').fadeOut();
  }
}); 	
	</script>

  	

</head>


<body <?php body_class($class); ?>>

<div id="container">
  <div id="header">
  
  <div id="sm_buttons">
		<ul>	
            <li class="txt_btn"><a href="<?php bloginfo('url') ?>/donate">DONATE</a></li>
            <li class="sm_btn" id="fb"><a href="https://www.facebook.com/VermontFamilyForests/" target="_blank">facebook</a></li>
			<li class="sm_btn" id="in"><a href="https://www.linkedin.com/company/vermont-family-forests/" target="_blank">linkedin</a></li>
            
		</ul>
    </div>
  
  	<div id="logo"><a href="<?php bloginfo('url') ?>">Vermont Family Forests</a></div>
    
    <div id="mobile">
    <div class="nav" id="mobile_nav">
    	<?php get_sidebar(); ?>
    </div>
    </div>
              
                         
  <div id="desktop">
    
  	<div class="nav">
    	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</div>
	
    <!--end #desktop --></div>
        
 <!--end #header --></div>
