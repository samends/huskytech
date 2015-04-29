
<?php
  /*
  Template Name: Getting Connected Single
  */
   get_header();?>
   <?php 
	$current_url=get_stylesheet_directory_uri();
    $pic_windows=get_attachment_url_by_slug('windows');
	$pic_mac=get_attachment_url_by_slug('apple');
	$pic_linux=get_attachment_url_by_slug('linux');
	$pic_android=get_attachment_url_by_slug('android');
	$pic_windows_phone=get_attachment_url_by_slug('windows-phone');
	$pic_ios=get_attachment_url_by_slug('ios');
	$pic_guest=get_attachment_url_by_slug('guest');
	$pic_wired=get_attachment_url_by_slug('wired');
	?>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
	  <script src="<?php echo $current_url.'/google-polymer/platform/platform.js' ?>"></script>
  <link href="<?php echo $current_url.'/google-polymer/core-icons/core-icons.html' ?>" rel="import">
  <link href="<?php echo $current_url.'/google-polymer/paper-button/paper-button.html' ?>" rel="import">
   
  
   <div class="paper-shadow-bottom-z-2 row-fluid top-swerve connected-row1 about-row1">
   		<div class="span6 offset1"><h2 >Getting Connected</h2>
        </div>
   </div>
   	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row-fluid connected-single-row2">
      <div class="row-fluid">
      	  <div class="span2 mobile-one"><?php 
			$current_url=get_stylesheet_directory_uri();
			$main_url=$current_url.'/img/no-picture.jpg';
			if ( has_post_thumbnail() ) {
        	set_post_thumbnail_size( 100, 100, true );
        	the_post_thumbnail();} 
            else{ ?>
            	<img src="<?php echo $main_url ?>" alt="no-image">
           <?php  } ?>
          </div>
          
          <div class="connected-single-r2r1 span4 mobile-three"><h2 ><?php echo the_title(); ?></h2>
          </div>
      </div>
      
      <div class="row-fluid">
          <div class="connected-single-r2r2 span12"><br><br><?php echo the_content(); ?>
          </div>
      </div>
      
      <?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
      
   </div>
   
  
<?php get_footer(); ?>
