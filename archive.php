<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<section class="section bgg">
    <div class="container">    
        <div class="title-area">
            	<?php  
            		if ( is_day() ) 
            			printf( __( '<h2> Daily Archive for %s', 'techmaglaptop' ), get_the_date() );
            		elseif ( is_month() )
            			printf( __( '<h2> Monthly Archive for %s', 'techmaglaptop' ), get_the_date( _x( 'F Y', 'Monthly Archive Date Format', 'techmaglaptop') ) );
            		elseif ( is_year() )
            			printf( __( '<h2> Yearly Archive for %s', 'techmaglaptop' ), get_the_date( _x( 'Y', 'Yearly	 Archive Date Format', 'techmaglaptop') ) );
            		else
            			_e( 'Archive', 'techmaglaptop');
            	?>		
          </div><!-- /.pull-right -->
    </div><!-- end container -->
</section>
<div class="container sitecontainer bgw">
    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12 m22 single-post">
            <div class="widget searchwidget indexslider">
                <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ) ?>    
                <?php endwhile ?>
                <?php // echo techmaglaptop_paging_nav(); ?>
                <?php echo techmaglaptop_numbered_pagination(); ?>
                 <?php else: ?>
                    <?php get_template_part( 'content', 'none' ); ?>   
                <?php endif ?>
            </div>
        </div><!-- end col -->

        <?php get_sidebar(); ?>
    </div><!-- end row -->
</div>
<?php endif ?>
<?php get_footer(); ?>