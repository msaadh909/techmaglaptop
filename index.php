<!-- BEGIN HEADER HERE -->
    <?php get_header() ?>
<!-- END HEADER HERE -->

        <div class="container sitecontainer bgw">
            <?php get_template_part( 'partials/news' ); ?>
            <!-- end row -->
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <?php get_template_part( 'partials/slider' ); ?>
                    <!-- end property-slider -->
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
                    <!-- end widget -->
                    <?php get_template_part( 'partials/latest_product' ); ?>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="ads-widget">
                                    <a href="#"><img src="<?php echo IMAGES ?>/ads/ads-970-90.jpg" alt="" class="img-responsive"></a>
                                </div>
                                <!-- end ads-widget -->
                            </div>
                            <!-- end widget -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- end col -->

                <!-- BEGIN SIDEBAR HERE -->
                <?php get_sidebar() ?>
                <!-- END SIDEBAR HERE -->
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

        <!-- BEGIN FOOTER HERE -->
        <?php get_footer() ?>
        <!-- END FOOTER HERE