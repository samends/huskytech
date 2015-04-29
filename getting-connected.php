
<?php
  /*
  Template Name: Getting Connected
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
	
	$current_site=site_url(); 
	?>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
	  <script src="<?php echo $current_url.'/google-polymer/platform/platform.js' ?>"></script>
  <link href="<?php echo $current_url.'/google-polymer/core-icons/core-icons.html' ?>" rel="import">
  <link href="<?php echo $current_url.'/google-polymer/paper-button/paper-button.html' ?>" rel="import">
   
  
   <div class="paper-shadow-bottom-z-2 row-fluid top-swerve connected-row1 about-row1">
   		<div class="span6 offset1"><h2 >Getting Connected</h2>
        </div>
   </div>
   <center><div class="row-master">
        <div class="master-col1 span12">
              <div class="row-fluid connected-row2">
              
              <div class="row-fluid">
                  <div class="connected-r2r2 span11"><br><br><p>Choose your operating system for assistance in connecting to the UConn network</p></div>
                  </div>
              </div>
              
           </div>
           
           <div class="row-fluid connected-row3">
                <a class="paper-shadow-bottom-z-2 connected-r3c1 connected-box span3 mobile-half" href="<?php echo $current_site.'/windows-getting-connected' ?>">
                <div class="row-fluid">
                <div class="span12">
                <div class="row-fluid">
                    <div class="span6">
                    <img src="<?php echo $pic_windows; ?>" alt="windows">
                    </div>
                    </div>
                </div>
                <div class="span12 grey-title row"><h2> UConn-Secure Windows </h2></div>
                </div>
                </a>
                
                <a class="paper-shadow-bottom-z-2 span3 mobile-half connected-r3c2 connected-box " href="<?php echo $current_site.'/mac-getting-connected' ?>">
                <div class="row-fluid">
                <div class="">
                <div class="row-fluid">
                    <div class="span6">
                    <img src="<?php echo $pic_mac; ?>" alt="mac">
                    </div>
                    </div>
                </div>
                <div class="span12 grey-title row"><h2> UConn-Secure Mac </h2></div>
                </div>
                </a>
                
                 <a class="paper-shadow-bottom-z-2 span3 mobile-half connected-r3c3 connected-box " href="<?php echo $current_site.'/linux-getting-connected' ?>">
                <div class="row-fluid">
                <div class="">
                    <div class="row-fluid">
                    <div class="span6">
                    <img src="<?php echo $pic_linux; ?>" alt="linux">
                    </div>
                    </div>
                </div>
                <div class="span12 grey-title row"><h2> UConn-Secure Linux </h2></div>
                </div>
                </a>
                
                <a class="paper-shadow-bottom-z-2 span3 mobile-half connected-r6c1 connected-box " href="<?php echo $current_site.'/guest-getting-connected' ?>">
                    <div class="row-fluid">
                    <div class="">
                        <div class="row-fluid">
                        <div class="span6">
                        <img src="<?php echo $pic_guest; ?>" alt="guest">
                        </div>
                        </div>
                    </div>
                    <div class="span12 grey-title row"><h2> UConn-Guest </h2></div>
                    </div>
                </a>
            <a class="paper-shadow-bottom-z-2 span3 mobile-half android-box connected-r4c1 connected-box " href="<?php echo $current_site.'/android-getting-connected' ?>">
                <div class="row-fluid">
                <div class="">
                    <div class="row-fluid">
                    <div class="span6">
                    <img src="<?php echo $pic_android; ?>" alt="android">
                    </div>
                    </div>
                </div>
                <div class="span12 grey-title row"><h2> UConn-Secure Android </h2></div>
                </div>
                </a>
                
                 <a class="paper-shadow-bottom-z-2 span3 mobile-half connected-r4c2 connected-box " href="<?php echo $current_site.'/ios-getting-connected' ?>">
                <div class="row-fluid">
                <div class="">
                    <div class="row-fluid">
                    <div class="span6">
                    <img src="<?php echo $pic_ios; ?>" alt="ios">
                    </div>
                    </div>
                </div>
                <div class="span12 grey-title row"><h2> UConn-Secure iOS </h2></div>
                </div>
                </a>
                
                <a class="paper-shadow-bottom-z-2 span3 mobile-half connected-r4c3 connected-box " href="<?php echo $current_site.'/windows-phone-getting-connected' ?>">
                <div class="row-fluid">
                <div class="windows-phone-box">
                    <div class="row-fluid">
                    <div class="span6">
                    <img src="<?php echo $pic_windows_phone; ?>" alt="windows phone">
                    </div>
                    </div>
                </div>
                <div class="span12 grey-title row"><h2> UConn-Secure Windows Phone </h2></div>
                </div>
                </a>
                
                <a class="paper-shadow-bottom-z-2 span3 mobile-half connected-r8c1 connected-box " href="<?php echo $current_site.'/wired-getting-connected' ?>">
                	<div class="row-fluid">
                    <div class="">
                        <div class="span6">
                        <img src="<?php echo $pic_wired; ?>" alt="windows">
                        </div>
                        </div>
                    <div class="span12 grey-title row"><h2> UConn-Wired</h2></div>
                   </div>
                </a>
                    
          </div>
      </div></center>
  </div>
  
  
<?php get_footer(); ?>
