
<?php
  /*
  Template Name: Student
  */
   get_header();?>
   <?php 
	$current_url=get_stylesheet_directory_uri();
    $newstudent_pic1=get_attachment_url_by_slug('newstudent-picture1');
	/* Get pictures from wordpress */
	
	global $post;
    $post_slug=$post->post_name;
	$post_slug_picture=$post_slug.'-picture';
	$student_pic=get_attachment_url_by_slug($post_slug_picture);
	
	$post_slug_picture2=$post_slug.'-picture2';
	$student_pic2=get_attachment_url_by_slug($post_slug_picture2);
	
	
	?>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
	  <script src="<?php echo $current_url.'/google-polymer/platform/platform.js' ?>"></script>
  <link href="<?php echo $current_url.'/google-polymer/core-icons/core-icons.html' ?>" rel="import">
  <link href="<?php echo $current_url.'/google-polymer/paper-button/paper-button.html' ?>" rel="import">
   
  
   <div class="paper-shadow-bottom-z-2 row-fluid top-swerve student-row1 about-row1">
   		<div class="span4"><h2 ><?php echo the_title(); ?>  </h2>
        </div>
   </div>

  <div class="row-fluid student-row4"> 
     	     <?php
// The Query
$the_query = new WP_Query( 'name=STUDENT-QUESTIONS-'.$post_slug );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo the_content();
	}
} else {
	echo '<h1>'.error.'</h1>';
}
/* Restore original Post Data */
wp_reset_postdata();
?> 
  
<?php
// The Query
$the_query = new WP_Query( 'name=STUDENT-POSTIT-'.$post_slug );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo the_content();
	}
} else {
	echo '<h1>'.error.'</h1>';
}
/* Restore original Post Data */
wp_reset_postdata();
?>

  
<?php get_footer(); ?>