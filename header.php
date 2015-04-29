<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

$secondary = get_option( 'secondarytitle','');
$secondarylink = get_option( 'secondarylink','');
$nav1 = get_theme_mod( 'navoption1','textnav');
$nav2 = get_theme_mod( 'navoption2','with-drop');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
<?php the_title(); ?>
&#8250;
<?php bloginfo('name'); ?>
&#8250; UCONN</title>
<?php wp_head();?>
</head>
<!--[if lt IE 7]>      <body class="ie lte9 lte8 lte7 lte6"> <![endif]-->
<!--[if IE 7]>         <body class="ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]>         <body class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>         <body class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]><!-->
<body>
<!--<![endif]-->
<?php if(function_exists('uconn_banner_hook')){uconn_banner_hook();}?>
<div id="uc-titlebar" class="uc-titlebar-gradient gradient clearfix">
	<div class="container">
		<div id="uc-site-header">
			<?php
            if(strlen($secondary) > 0 && strlen($secondarylink) > 0){
				if(substr($secondarylink,0,4) != 'http'){
					$secondarylink = 'http://'.$secondarylink;
				}
                echo '<p id="uc-site-parent" class="clearfix"><a href="'.$secondarylink.'">'.$secondary.'</a></p>';
            }
        ?>
        	<h1 id="uc-department-title" class="clearfix"><a href="http://uits.uconn.edu/">
				University Information Technology Services
				</a></h1>
			<h1 id="uc-site-title" class="clearfix"><a href="<?php echo home_url(); ?>">
				<?php bloginfo('name'); ?>
				</a></h1>
		</div>
		<nav id="uc-navbar" class="navbar">
			<div class="navbar-inner">
			<a class="btn btn-navbar clearfix" id="uc-nav-mobile" data-toggle="collapse" data-target=".nav-collapse"> <span class="menu-icon"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></span> <span class="menu-label">Menu</span></a>
				<div class="nav-collapse collapse">
					<?php					
						wp_nav_menu( 
							array( 
								'menu' => 'primary', /* menu name */
								'menu_class' => 'nav '.$nav1.' '.$nav2,
								'theme_location' => 'primary', /* where in the theme it's assigned */
								'container' => false, /* container class */
								'fallback_cb' => 'hale_main_nav_fallback',
								'items_wrap' =>	'<ul id="%1$s" class="%2$s"><li><a href="'.home_url().'">Home</a></li>%3$s</ul>',
								'walker' => new Bootstrap_Nav_Walker()/*,
								'with_search' => true*/
							)
						);
				?>
				</div>
			</div>
		</nav>
	</div>
</div>
<div id="top-gradient"></div>
<div id="uc-main" class="container">