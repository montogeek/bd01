<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />
	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />
	<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@bytedesk">

	<?php if(is_single()): ?>
		<meta name="twitter:creator" content="<?php $getid = $post->post_author; switch ($getid) {
			case '4':
				echo "@moscoquera";
				break;
			case '2':
				echo "@juanmanuelots";
				break;
			default:
				echo "@montogeek";
				break;
		} ?>">
		<meta name="twitter:url" content="<?php the_permalink(); ?>">
		<meta name="twitter:title" content="<?php the_title(); ?>">
		<meta name="twitter:description" content="<?php excepto(); ?>">
		<meta name="twitter:image" content="<?php $image = wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); if($image == FALSE) {echo "http://bytedesk.com/wp-content/themes/bytedesk/images/no-image-half-landscape.png";} else echo $image; ?>">
	<?php endif; ?>
	<?php if(is_front_page()): ?>
		<meta name="twitter:url" content="<?php bloginfo('url'); ?>">
		<meta name="twitter:title" content="<?php bloginfo('name'); ?>">
		<meta name="twitter:description" content="<?php bloginfo('description'); ?>">
		<meta name="twitter:image" content="http://bytedesk.com/wp-content/uploads/2012/10/image-thumbnail-100.png">
	<?php endif; ?>
	<script type="text/javascript" src="//use.typekit.net/fdg3uxj.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- <div class="contain-to-grid sticky">
</div> -->
<div class="row">
	<header role="banner">
		<div class="small-12 columns">
			<h1>
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo360x90.png" alt="ByteDesk">
				<!--<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>-->
			</h1>
			<!-- <h4 class="subheader"><?php bloginfo('description'); ?></h4> -->
			<hr/>
		</div>
	</header>
</div>
<!-- Starting the Top-Bar -->
<div class="row">
	<div class="small-12">
		<nav class="top-bar">
		    <ul class="title-area">
		        <li class="name">
		        	<!-- <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
		        	<img src="<?php echo get_template_directory_uri(); ?>/img/logo360x90.png" alt="ByteDesk" style="width: 150px">
		        </li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		    </ul>
		    <section class="top-bar-section">
			    <?php
			        wp_nav_menu( array(
			            'theme_location' => 'primary',
			            'container' => false,
			            'depth' => 0,
			            'items_wrap' => '<ul class="right">%3$s</ul>',
			            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
			            'walker' => new reverie_walker( array(
			                'in_top_bar' => false,
			                'item_type' => 'li'
			            ) ),
			        ) );
			    ?>
			    <ul class="right">
			    	<!--<li class="divider hide-for-small"></li>-->
			    	<li class="has-form"><?php get_search_form(); ?></li>
			    </ul>
		    </section>
		</nav>
		<!-- End of Top-Bar -->
	</div>
</div>

<!-- Start the main container -->
<section class="container row" role="document">
  	<div class="small-12 columns">
		<div id="list" class="brilliant hide-for-small">
			<?php
				$args = array( 'posts_per_page'  => 3, 'numberposts' => 1, 'category' =>'285' );
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post); ?>
					<div class="large-4 columns">
						<div class="cajita">
							<figure>
								<?php the_post_thumbnail('brilliant');?>
								<figcaption><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></figcaption>
								<?php 
									$categorias = get_the_category();
									foreach ($categorias as $categoria) {
											if(strcasecmp($categoria->cat_name,"Brilliant") > 0){
												echo "<span>".$categoria->cat_name."</span>";
												break;
											}
									}
								?>
							</figure>
						</div>		
					</div>		
				<?php endforeach; ?>
		</div>
  	</div>
  	<!-- <section class="container row">
  		<div class="large-12 columns">
  			<div class="large-8 columns">
	  			<div class="first">
	  				<p>Libros de Papel o Electrónicos, cual prefieres?</p>
	  			</div>
	  			<div class="second">
	  				<p>Libros de Papel o Electrónicos, cual prefieres?</p>
	  			</div>
	  			<div class="third">
	  				<p>Libros de Papel o Electrónicos, cual prefieres?</p>
	  			</div>
  			</div>
  			<div class="large-4 columns">
  				<div class="ad">
  					.....
	  			</div>
  			</div>
  		</div>
  	</section> -->