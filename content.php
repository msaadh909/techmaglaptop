<div id="post-<?php the_ID(); ?>" class="large-widget m30">
    <div class="post row clearfix">
        <div class="col-md-5">
            <div class="post-media">
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php else: ?>
                    <h3>No Image found!</h3>
                <?php endif ?>
              </div>
        </div>

        <div class="col-md-7">
            <div class="title-area">
                <?php $category_list = get_the_category_list( '| ' ); ?>
                <?php if ($category_list): ?>
                    <div class="colorfulcats">
                        <span class="label label-info category-list-class">
                            <?php echo $category_list ?>
                        </span>
                    </div>
                <?php endif ?>
                
                <?php if ( is_single()): ?>
                    <h3><?php the_title(); ?></h3>
                <?php else: ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php endif ?>

                <?php if ( is_search() ) : ?>
                    <p><?php the_excerpt(); ?></p>
                <?php else: ?>
                    <p><?php the_content(); ?></p>
                <?php endif ?>

                <?php techmaglaptop_post_meta(); ?>                
                <!-- end meta -->
            </div>
            <!-- /.pull-right -->
        </div>
    </div>
    <!-- end post -->
</div>