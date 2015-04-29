<?php
  /*

  */
   get_header();?>
   <?php 
	
	$current_site=get_current_site(); 
	$current_site='http://'.$current_site->domain;
	?>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
	  <script src="<?php echo $current_url.'/google-polymer/platform/platform.js' ?>"></script>
  <link href="<?php echo $current_url.'/google-polymer/core-icons/core-icons.html' ?>" rel="import">
  <link href="<?php echo $current_url.'/google-polymer/paper-button/paper-button.html' ?>" rel="import">
   
  
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


      <div class="row-fluid single-row1">
      <div class="row-fluid">
          <div class="single-r1r1 span12"><h2 ><?php echo the_title(); ?></h2>
          </div>
      </div>
      
      <div class="paper-shadow-bottom-z-2 row-fluid single-row2">
          <div class="single-r2r1 span12"><br><br><p><?php echo the_content(); ?>
          </div>
      </div>
      
   </div>
   
   <?php endwhile; ?>			
          
          <?php else : ?>
          
          <article id="post-not-found">
              <header>
                  <h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
              </header>
              <section class="post_content">
                  <p><?php _e("Sorry, but the requested article was not found on this site.", "wpbootstrap"); ?></p>
              </section>
          </article>
          
          <?php endif; ?>
   
  
<?php get_footer(); ?>
