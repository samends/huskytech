<div class="homepage-size">

   <?php
  /*
  Template Name: Home Page
  !TAKE OUT MAIN!
  */
   get_header();?>
   <?php 
   /*Variables */
	$current_url=get_stylesheet_directory_uri();
    $ht_picuture1=get_attachment_url_by_slug('huskytech-main1');
	$ht_picuture2=get_attachment_url_by_slug('huskytech-main2');
	$ht_picuture3=get_attachment_url_by_slug('huskytech-main3');
	
	$current_site=get_current_site(); 
	$current_site='http://'.$current_site->domain;
	?>
  <!-- Close uc-main tag -->
  </div>  
  <script src="<?php echo $current_url.'/google-polymer/platform/platform.js' ?>"></script>
  <link href="<?php echo $current_url.'/google-polymer/core-icons/core-icons.html' ?>" rel="import">
  <link href="<?php echo $current_url.'/google-polymer/paper-button/paper-button.html' ?>" rel="import">
  <link rel="stylesheet" type="text/css"  href="<?php echo $current_url.'/stylesheets/paper-button.css' ?>" rel="import">
  <style>
  	@media only screen and (max-width:980px){
		.row-fluid .span12,.row-fluid .span11, .row-fluid .span10,.row-fluid .span9,.row-fluid .span8,.row-fluid .span7,.row-fluid .span6,.row-fluid .span5,.row-fluid .span4,.row-fluid .span3,.row-fluid .span2,.row-fluid .span1{
			width:100%;	
		}
	}
  </style>
    
   <div class="row1-blue-background">
           <div class="row-fluid container homepage-row1">
                <div class="span6NoGutter mobile-four image-slider r1c1">
                        <div class="span12 r1c2">
                                </div>  
                        <div id="carousel1" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel1" data-slide-to="1"></li>
                            <li data-target="#carousel1" data-slide-to="2"></li>
                          </ol>
                        
                          <!-- Wrapper for slides -->
                          <div class="carousel-pictures carousel-inner">
                            <div class="item active">
                              <img class="top-picture" src="<?php echo $ht_picuture1 ?>" alt="Huskytech Main Image 1">
                        
                            </div>
                            <div class="item">
                              <img class="top-picture" src="<?php echo $ht_picuture2 ?>" alt="Huskytech Main Image 1">
                        
                            </div>
                            
                            <div class="item">
                              <img class="top-picture" src="<?php echo $ht_picuture3 ?>" alt="Huskytech Main Image 1">
                            </div>
                        
                          </div>
                        
                        </div>
        </div>
        
        <!-- Get Started -->
                       <div class="span6NoGutter r1c3">
                       <h2 class="r1c2-title" >Free Student <br>Technology Support</h2>
                           <div class="get-started row-fluid" >
                               <h2 class="bold get-started-title"> Get Started </h2>
                                   <div class="home-btn-group mobile-two span4 btn-group">
                                  <button type="button" class="home-btn dropdown-toggle" data-toggle="dropdown">
                                   FAQ <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo $site_url."new-student" ?>">New Students</a></li>
                                    <li><a href="<?php echo $site_url."current-student" ?>">Current Students</a></li>
                                    <li><a href="<?php echo $site_url."grad-student" ?>">Graduating Students</a></li>
                                    <li><a href="<?php echo $site_url."online-student" ?>">Online Students</a></li>
                                  </ul>
                                </div> 
                                <span class="button-space span1"></span>
                                <a href="<?php echo $site_url."services"?>">
                                <button type="button" class="mobile-two span4 offset1 home-btn">
                                   Services
                                 </button>
                                 </a>
                           </div>
                       </div>
                   <!-- Get Started End --> 
 
   			</div>
	</div>
   
<div class="announce-contact-container container">
   
                   
                   
                   <!-- Announcements/Contact Us Title -->
                <div class="row-fluid  homepage-title-row">
            		<div class="homepage-title announcement homepage-title mobile-four span4 r1c2">
                            <img class="mobile-one span2" src="<?php echo $current_url."/img/announcements.jpg" ?>"alt="announcements-logo">
                            <h2 class="mobile-three span10 bold contact-us-title">Announcements</h2> 
                	</div>
                    <div class="None980 homepage-title contact-us homepage-title mobile-four span4 r1c2 offset3">
                            <img class="span2" src="<?php echo $current_url."/img/contact-us.jpg" ?>"alt="contact-us-logo">
                            <h2 class="span10 bold contact-us-title">Contact Us</h2> 
                    </div>
                </div>
                <!-- Announcements -->
                <div class="row-fluid homepage-row2">
                    <div class="announcement mobile-four span7 r1c2">
                        <p class="announcement-content"><h2><?php _e( '', $current_site.'/main/' ); ?></h2>

<?php $item = new WP_Query( array( 'posts_per_page' => '2', 'category_name' => 'announcement', 'orderby' => 'date')); ?>
			<?php if ( $item->have_posts() ) : ?><ul class="announcment-list">
  				<?php while ( $item->have_posts() ) : $item->the_post(); ?>
               				<li>
                                <a href="<?php echo the_permalink(); ?>" class="announcement-mobile-half-content announcement-rss-content">
                                    <?php echo '<p class="announcement-titles">'; echo the_title().'</p>';
									      echo '<br>'; echo '<p class="announcement-des">'.the_excerpt().'</p>'; ?>
                                </a>
                            </li>
                            <hr>
              	<?php endwhile; ?>
                    <li>
                    	<p class="announcement-titles"><a href="<?php echo $site_url."/category/announcement" ?>" class="announcement-mobile-half-content announcement-rss-content">More announcements</a></p>
                    </li>
                </ul>
     		<?php endif; ?>
                        </p>
                    </div>
                    <!-- Contact Us -->
                    <div class="span4 mobile-four contact-us-container contact-us">
                    <div class="Show980 homepage-title contact-us homepage-title mobile-four span4 r1c2 offset4">
                            <img class="span2 mobile-one" src="<?php echo $current_url."/img/contact-us.jpg" ?>"alt="contact-us-logo">
                            <h2 class="span10 mobile-three bold contact-us-title">Contact Us</h2> 
                    </div>
                    <?php
// The Query
$the_query = new WP_Query( 'name=homepage-contact-us' );

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
                            <div class="social-icon row"><br>
                            	<div id="social-icons-id" class="offset1 span12 bold mobile-four">                          
                                      <a href="https://www.facebook.com/huskytech" ><img class="social-media" src="<?php echo $current_url.'/img/facebook.png' ?>" alt='facebook'></a>
                                      <a href="https://plus.google.com/103980430080238936928/about" ><img class="social-media" src="<?php echo $current_url.'/img/google-plus.png' ?>" alt='facebook'></a>
                                      <a href="https://twitter.com/huskytechuconn" ><img class="social-media" src="<?php echo $current_url.'/img/twitter.png' ?>" alt='facebook'></a>

                            	</div>
                            </div>
                     </div>                 
            </div>
   <!-- Announcements/Contact Us End -->
   
                  
    </div>
    </div>
</div>
</div><!--#uc-main-->

<?php get_footer(); ?>
</body>
</html>  