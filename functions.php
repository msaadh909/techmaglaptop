<?php

/**
 *
 * functions.php
 *
 */

/*----------  1.0  DEFINE CONSTANTS  ----------*/
	define('THEMEROOT', get_stylesheet_directory_uri());
	define('IMAGES', THEMEROOT . '/assets/images');
	define('STYLES', THEMEROOT . '/assets/css');
	define('SCRIPTS', THEMEROOT . '/assets/js');

/*----------  2.0  LOAD THE CUSTOM SCRIPTS FOR THE THEME.  ----------*/
	if ( ! function_exists( 'techmaglaptop_scripts' )) {
		function techmaglaptop_scripts(){
			
			// LOAD THE STYLESHEET.
			wp_enqueue_style( 'font-awesome', STYLES . '/font-awesome.min.css' );
			wp_enqueue_style( 'bootstrap', STYLES . '/bootstrap.css' );
			wp_enqueue_style( 'flexslider', STYLES . '/flexslider.css' );
			wp_enqueue_style( 'main', STYLES . '/main.css' );
			wp_enqueue_style( 'custom', STYLES . '/custom.css' );
			
			// REGISTER SCRIPTS.
			wp_register_script( 'bootstrap-js', SCRIPTS . '/bootstrap.js', [ 'jquery' ], '', $in_footer = true );
			wp_register_script( 'plugins-js', SCRIPTS . '/plugins.js', [ 'jquery' ], '', $in_footer = true );
			wp_register_script( 'flexslider-js', SCRIPTS . '/jquery.flexslider.js', [ 'jquery' ], '', $in_footer = true );

			// LOAD THE CUSTOM SCRIPTS.
			wp_enqueue_script( 'bootstrap-js' );
			wp_enqueue_script( 'plugins-js' );
			wp_enqueue_script( 'flexslider-js' );
		}

		add_action( 'wp_enqueue_scripts', 'techmaglaptop_scripts' );
	}

/*----------  3.0  SET UP THEME DEFAULT AND REGISTER VARIOUS SUPPORTED FEATURES.  ----------*/
	if ( ! function_exists( 'techmaglaptop_setup' )) {
		function techmaglaptop_setup(){
			//MAKE THE THEME AVAILABLE FOR TRANSLATION.
			$lang_dir = THEMEROOT . '/assets/language';
			load_theme_textdomain( 'techmaglaptop', $lang_dir );

			// ADD SUPPORT FOR AUTOMATIC FEED LINKS.
			add_theme_support( 'automatic_feed_links()' );

			// ADD SUPPORT FOR POST THUMBNAIL.
			add_theme_support( 'post-thumbnails' );

			// ADD SUPPORT FOR POST FORMAT.
			add_theme_support( 'post-formats', [
				'gallery', 'link', 'audio', 'video', 'quote', 'image'
			] );

			// REGISTER NAVIGATION MENU.
			register_nav_menus( [
				'top-menu' => __( 'Top Menu', 'techmaglaptop' ),
				'footer-menu' => __( 'Footer Menu', 'techmaglaptop' )
			] ); 
		}

		add_action( 'after_setup_theme', 'techmaglaptop_setup' );
	}

/*----------  4.0  DISPLAY META INFORMATION FOR A SPECIFIC POST.  ----------*/
	if ( ! function_exists( 'techmaglaptop_post_meta' )) {
		function techmaglaptop_post_meta()
		{
			echo '<div class="large-post-meta">';
			if ( get_post_type() === 'post') 
			{
				// THE POST IS STICKY, PIN IT
				if ( is_sticky() ) {
					echo '<span><i class="fa fa-sticky-note-o"></i> ' . __( 'Sticky', 'techmaglaptop') . '</span>';
					echo '<small class="hidden-xs">&#124;</small>';
				}

				// GET THE DATE
				echo '<span><i class="fa fa-clock-o"></i> ' . get_the_date() . '</span>';
				echo '<small class="hidden-xs">&#124;</small>';

				// GET THE POST AUTHOR
				printf(
					'<span><i class="fa fa-user"></i> <a href="%1$s">%2$s</a> ',
					esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), 
					get_the_author()
				);
				echo '<small class="hidden-xs">&#124;</small>';

				// GET THE TAGS
				$tag_list = get_the_tag_list('', ', ');
				if ($tag_list) {
					echo '<span><i class="fa fa-tags"></i> ' . $tag_list . '</span>';
					echo '<small class="hidden-xs">&#124;</small>';
				}

				// COMMENTS LINK
				if ( comments_open() ) {
					echo '<span class="hidden-xs"><i class="fa fa-comments-o"></i> ';
					comments_popup_link( 
						__( 'Leave a comment', 'techmaglaptop' ), 
						__( 'One Comment', 'techmaglaptop' ), 
						__( 'View all % comments', 'techmaglaptop' )
					);
					echo '</span>';
					echo '<small class="hidden-xs">&#124;</small>';
				}

				// EDIT LINK
				if ( is_user_logged_in() ) {
					echo '<span><i class="fa fa-pencil"></i> ';
					edit_post_link( __( 'Edit', 'techmaglaptop' ), '<span>', '</span>' );
					echo '</span>';
				}
			}
			echo '</div>';
		}
	}
/*----------  5.0  DISPLAY NAVIGATION TO THE NEXT/PREVIOUS SET OF POSTS.  ----------*/
	if (! function_exists( 'techmaglaptop_paging_nav' )) {
		function techmaglaptop_paging_nav(){
			echo '<ul class="list-inline">';
			if ( get_previous_posts_link())	
				echo '<li class="pull-right">' . get_previous_posts_link( __( 'Newer Posts &rarr;', 'techmaglaptop') ) . '</li>'; 
			
			if ( get_next_posts_link()) 
				echo '<li class="pull-left">' . get_next_posts_link( __( '&larr; Older Posts', 'techmaglaptop') ) . '</li>'; 

			echo '</ul>';
		}
	}
/*----------  6.0  NUMBERED PAGINATIONS.  ----------*/
	if ( ! function_exists( 'techmaglaptop_numbered_pagination' )) {
			function techmaglaptop_numbered_pagination(){
				$args = [
					'prev_next' => false,
					'type' => 'array'
				];

				echo '<div class="pagination-wrapper">';
				$paginates = paginate_links( $args );
				if ( is_array( $paginates )) {
					echo '<nav><ul class="pagination">';
					foreach ($paginates as $paginate) {
						if ( strpos($paginate, 'current' ) )
							echo '<li><a href="#">' . $paginate . '</a></li>';
						else
							echo '<li>' . $paginate . '</li>';
					}
					echo '</ul></nav>';
				}
				echo '</div>';
			}
		}	
?>
