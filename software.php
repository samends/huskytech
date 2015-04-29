<?php
  /*
  Template Name: Software
  */
   get_header();?>
   <?php 
   /* Freeware Pictures */
	$current_url=get_stylesheet_directory_uri();
    $mse=get_attachment_url_by_slug('mse');
	$ccleaner=get_attachment_url_by_slug('ccleaner');
	$zip7=get_attachment_url_by_slug('7zip');
	$chrome=get_attachment_url_by_slug('chrome');
	$dropbox=get_attachment_url_by_slug('dropbox');
	$firefox=get_attachment_url_by_slug('firefox');
	$itunes=get_attachment_url_by_slug('itunes');
	$java=get_attachment_url_by_slug('java');
	$libreoffice=get_attachment_url_by_slug('libreoffice');
	$malwarebytes=get_attachment_url_by_slug('malwarebytes');
	$ninite=get_attachment_url_by_slug('ninite');
	$openoffice=get_attachment_url_by_slug('openoffice');
	$preview_mac=get_attachment_url_by_slug('preview-mac');
	$spybot=get_attachment_url_by_slug('spybot');
	$vlc=get_attachment_url_by_slug('VLC');
	$adobe_reader=get_attachment_url_by_slug('adobe-reader');
	$archive_utility=get_attachment_url_by_slug('archive-utility');
	
	?>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
	  <script src="<?php echo $current_url.'/google-polymer/platform/platform.js' ?>"></script>
  <link href="<?php echo $current_url.'/google-polymer/core-icons/core-icons.html' ?>" rel="import">
  <link href="<?php echo $current_url.'/google-polymer/paper-button/paper-button.html' ?>" rel="import">
  <link href="<?php echo $current_url.'/google-polymer/core-toolbar/core-toolbar.html' ?>" rel="import">
  <link href="<?php echo $current_url.'/google-polymer/paper-icon-button/paper-icon-button.html' ?>" rel="import">
    <link href="<?php echo $current_url.'/google-polymer/paper-tabs/paper-tabs.html' ?>" rel="import">
   <style shim-shadowdom>
  
    body {
      font-family: RobotoDraft, 'Helvetica Neue', Helvetica, Arial;
      margin: 0;
      color: #333;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -webkit-tap-highlight-color: rgba(0,0,0,0);
      -webkit-touch-callout: none;
    }
    
    paper-tabs, core-toolbar {
      color: #fff;
      box-shadow: 0px 3px 2px rgba(0, 0, 0, 0.2);
    }
    
    core-toolbar paper-tabs {
      box-shadow: none;
    }
    
    paper-tabs[noink][nobar] paper-tab.core-selected {
      color: #7a7a7a;
    }
    
    paper-tabs.transparent-teal {
      background-color: $uconn-blue !important;
      color: #606060;
      box-shadow: none;
    }
    
    paper-tabs.transparent-teal::shadow #selectionBar {
      background-color: #0F1938 !important;
    }
    
    paper-tabs.transparent-teal paper-tab::shadow #ink {
      color: #606060;
	}
	

    
    h3 {
      font-weight: 400;
    }
	
	.core-selected{
		-webkit-transition: background-color .4s;
		transition:background-color .4s;
		background-color:transparent;	
		color:#4f4f4f;
	}
	
	paper-tabs #selectionBar{
		color:#0F1938;
		background-color:#0F1938;	
	}
    
  </style>
  
  <style>
  		#uc-main{
			min-height:700px;	
		}
  </style>
  
   <div class="paper-shadow-bottom-z-2 row-fluid top-swerve software-row1 about-row1">
   		<div class="span6 offset1"><h2 >Software</h2>
        </div>
   </div>
   
      <div class="paper-tab-row row-fluid software-row2">
       <paper-tabs selected="0" class="transparent-teal">
  
            <paper-tab id="freeware">Freeware</paper-tab>
            <paper-tab id="adobe">Adobe</paper-tab>
            <paper-tab id="antivirus">Antivirus</paper-tab>
            <paper-tab id="apple">Apple</paper-tab>
            <paper-tab id="microsoft">Microsoft</paper-tab>
            <paper-tab id="skybox">Skybox</paper-tab>
        
      </paper-tabs>
   	</div>
   
     <div class="paper-tab-row row-fluid software-row2-mobile">
			<div class="btn-group mobile-group">
              <a class="btn dropdown-toggle mobile-menu" data-toggle="dropdown" href="#">
                Software menu
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li class="mobile-tab" id="freeware">Freeware </li><br>
                <li class="mobile-tab" id="adobe">Adobe </li><br>
                <li class="mobile-tab" id="antivirus">Antivirus</li><br>
                <li class="mobile-tab" id="apple">Apple </li><br>
                <li class="mobile-tab" id="microsoft">Microsoft </li><br>
                <li class="mobile-tab" id="skybox">Skybox </li><br>
              </ul>
            </div>
     </div>
   
   <div class="software-row3">
   <!-- Freeware Tab -->
   <div id="software-freeware" class="row-fluid software-row tabContent">
   <?php
// The Query
$the_query = new WP_Query( 'name=SOFTWARE-FREEWARE' );

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
  </div>     
  </div>
  
    <!-- Adobe Tab -->
    <div id="software-adobe" class="row-fluid software-row tabContent">
	<?php
// The Query
$the_query = new WP_Query( 'name=SOFTWARE-ADOBE' );

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
  </div>
  
  
    <!-- Antivirus Tab -->
    <div id="software-antivirus" class="row-fluid software-row tabContent">
	<?php
// The Query
$the_query = new WP_Query( 'name=SOFTWARE-ANTIVIRUS' );

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
  </div>
  
      <!-- Apple Tab -->
    <div id="software-apple" class="row-fluid software-row tabContent">
	<?php
// The Query
$the_query = new WP_Query( 'name=SOFTWARE-APPLE' );

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
  </div>
  
        <!-- Microsoft Tab -->
    <div id="software-microsoft" class="row-fluid software-row tabContent">
	<?php
// The Query
$the_query = new WP_Query( 'name=SOFTWARE-MICROSOFT' );

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
  </div>
  
        <!-- Skybox Tab -->
    <div id="software-skybox" class="row-fluid software-row tabContent">
	<?php
// The Query
$the_query = new WP_Query( 'name=SOFTWARE-SKYBOX' );

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
  </div>
  
  
  
  
  
 
<?php get_footer(); ?>
