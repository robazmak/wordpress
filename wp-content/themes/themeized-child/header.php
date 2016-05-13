<?php
/** * The template for displaying the header * * Displays all of the head element and everything up until the "site-content" div. * * @package WordPress * @subpackage Twenty_Fifteen * @since Twenty Fifteen 1.0 */
?>
<!DOCTYPE html><html <?php language_attributes(); ?> class="no-js">  <head>	<meta charset="<?php bloginfo( 'charset' ); ?>">	<link rel="profile" href="http://gmpg.org/xfn/11">	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1">		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.png">	
<?php  wp_head(); ?>
</head>
<body <?php $class="transition"; body_class( $class ); ?>>
		<?php global $post; $slug = get_post( $post )->post_name; echo $slug; ?>		
		<?php  $post2 = get_post(74); setup_postdata($post2); ?>
		<?php wp_get_attachment_image_src( get_post_thumbnail_id( $post2 ), 'single-post-thumbnail' );  ?>		<header>	<section class="hdr sticky-hdr cross-toggle" data-navitemlimit="7">		<div class="container">			<nav class="navbar navbar-default" role="navigation" id="slide-nav">			  <div class="container-fluid">				<!-- Brand and toggle get grouped for better mobile display -->				<div class="navbar-header">				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">					<span class="sr-only">Toggle navigation</span>					<span class="icon-bar"></span>					<span class="icon-bar"></span>					<span class="icon-bar"></span>				  </button>				    <a class="navbar-brand" href="#">	  	  					<?php        								$post = get_post(72);								setup_postdata($post);							?>														<span><?php the_post_thumbnail(); ?></span>							<!--<img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png"/>-->					</a>				</div>				<!-- Collect the nav links, forms, and other content for toggling -->				<div id="slidemenu">					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">						<?php						$defaults = array(							'theme_location'  => '',							'menu'            => 'main_menu',							'container'       => '',							'container_class' => '',							'container_id'    => 'bs-example-navbar-collapse-1',							'menu_class'      => 'nav navbar-nav main-nav  navbar-right',							'menu_id'         => '',							'echo'            => true,							'fallback_cb'     => 'wp_page_menu',							'before'          => '',							'after'           => '',							'link_before'     => '',							'link_after'      => '',							'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',							'depth'           => 0,							'walker'          => ''						);						wp_nav_menu( $defaults );						?>					</div><!-- /.navbar-collapse -->	            <form action="" class="search-form expand-search">                <div class="form-group has-feedback">                    <label for="search" class="sr-only">Search</label>                    <input type="text" class="form-control" name="search" id="search" placeholder="search">                    <button type="submit"><i class="glyphicon glyphicon-search"></i> Search</button>                </div>            </form>					</div><!-- /.navbar-collapse -->				</div>			  </div><!-- /.container-fluid -->			</nav>		</div>	</section></header>