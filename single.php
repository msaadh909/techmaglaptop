<?php get_header(); ?>
<?php if (have_posts()) : the_post() ?>
<div class="container sitecontainer single-wrapper bgw">
    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12 m22 single-post">                                
            <div class="widget">
                <div class="large-widget m30">
                    <div class="post clearfix">
                        <div class="title-area">
                            <?php $category_list = get_the_category_list( '| ' ); ?>
			                <?php if ($category_list): ?>
			                    <div class="colorfulcats">
			                        <span class="label label-info category-list-class">
			                            <?php echo $category_list ?>
			                        </span>
			                    </div>
			                <?php endif ?>
                            <h3><?php the_title(); ?></h3>

                            <?php techmaglaptop_post_meta(); ?> 
                             <!-- end meta -->

                        </div><!-- /.pull-right -->

                        <div class="post-media">
                            <?php if ( has_post_thumbnail() ) : ?>
                    			<?php the_post_thumbnail(); ?>
			                <?php else: ?>
			                    <h3>No Image found!</h3>
			                <?php endif ?>
                        </div>
                    </div><!-- end post -->

                    <div class="post-desc">
                        <p><?php the_content(); ?></p>
                    
                        
                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="https://www.facebook.com/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="hidden-xs">Share on Facebook</span></a></li>
                                <li><a href="https://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php echo the_permalink(); ?>" target="_blank" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="hidden-xs">Tweet on Twitter</span></a></li>
                                <li><a href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" target="_blank" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end post-desc -->

                    <div class="post-bottom">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="tags">
                                    <h4>Specification</h4>
                                    <table class="table table-hover">
                                		<tr>
                                			<td>Processor Type</td>
                                			<td>&nbsp;</td>
                                		</tr>
                                		<tr>
                                			<td>Processor Type</td>
                                			<td>&nbsp;</td>
                                		</tr>
                                		<tr>
                                			<td>Processor Type</td>
                                			<td>&nbsp;</td>
                                		</tr>
                                		<tr>
                                			<td>Processor Type</td>
                                			<td>&nbsp;</td>
                                		</tr>
                                		<tr>
                                			<td>Processor Type</td>
                                			<td>&nbsp;</td>
                                		</tr>
                                		<tr>
                                			<td>Processor Type</td>
                                			<td>&nbsp;</td>
                                		</tr>
                                		<tr>
                                			<td>Processor Type</td>
                                			<td>&nbsp;</td>
                                		</tr>
                                		<tr>
                                			<td>Processor Type</td>
                                			<td>&nbsp;</td>
                                		</tr>
                                		<tr>
                                			<td>Processor Type</td>
                                			<td>&nbsp;</td>
                                		</tr>
                                		<tr>
                                			<td>Processor Type</td>
                                			<td>&nbsp;</td>
                                		</tr>

                                    </table>
                                </div><!-- end tags -->
                            </div><!-- end col -->

                            <!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end bottom -->
                    <div class="post-bottom">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="tags">
                                    <h4>Gallery</h4>
                                </div><!-- end tags -->
                            </div><!-- end col -->

                            <!-- end col -->
                        </div><!-- end row -->
                    </div>

                    <?php if ( get_the_author_meta( 'description' )): ?>
                    <div class="authorbox">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="post clearfix">
                                    <div class="avatar-author">
                                        <a href="author.html">
                                            <?php echo get_avatar( get_the_author_meta( 'user_email' ), 80, '' ); ?>
                                        </a>
                                    </div>
                                    <div class="author-title desc">
                                        <a href="single.html"><?php __( 'Written by', 'techmaglaptop') . the_author_meta( 'display_name' ); ?></a>
                                        <a class="authorlink" href=""><?php the_author_meta( 'url' ); ?></a>
                                        <p><?php the_author_meta( 'description' ); ?>  </p>
                                        <ul class="list-inline authorsocial">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div><!-- end authorbox -->
					<?php endif ?>
                    
                    <div class="row m22 related-posts">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4>You May Also Like <span><a href="#">View all</a></span></h4>
                                    <hr>
                                </div><!-- end widget-title -->

                                <div class="review-posts row m30">
                                    <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-media entry">
                                            <img src="upload/news_01.jpg" alt="" class="img-responsive">
                                            <div class="magnifier">
                                                <div class="hover-title-left">
                                                    <span><a href="#" title=""><i class="fa fa-folder-open"></i> Mobile</a></span>
                                                </div><!-- end title -->
                                                <div class="hover-title">
                                                    <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                </div><!-- end title -->
                                            </div><!-- end magnifier -->
                                        </div><!-- end media -->
                                        <div class="post-title">
                                            <h3><a href="single.html">TechMag's all the details of the March 21 event at Apple!</a></h3>
                                        </div><!-- end post-title -->
                                    </div><!-- end post-review -->

                                    <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-media entry">
                                            <img src="upload/news_02.jpg" alt="" class="img-responsive">
                                            <div class="magnifier">
                                                <div class="hover-title-left">
                                                    <span><a href="#" title=""><i class="fa fa-folder-open"></i> Automotive</a></span>
                                                </div><!-- end title -->
                                                <div class="hover-title">
                                                    <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                </div><!-- end title -->
                                            </div><!-- end magnifier -->
                                        </div><!-- end media -->
                                        <div class="post-title">
                                            <h3><a href="single.html">Say Hello to Apple Titan Automative News Released</a></h3>
                                        </div><!-- end post-title -->
                                    </div><!-- end post-review -->

                                    <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-media entry">
                                            <img src="upload/news_03.jpg" alt="" class="img-responsive">
                                            <div class="magnifier">
                                                <div class="hover-title-left">
                                                    <span><a href="#" title=""><i class="fa fa-folder-open"></i> Space</a></span>
                                                </div><!-- end title -->
                                                <div class="hover-title">
                                                    <span><a href="#" title=""><i class="fa fa-comments-o"></i> 12 Comments</a></span>
                                                </div><!-- end title -->
                                            </div><!-- end magnifier -->
                                        </div><!-- end media -->
                                        <div class="post-title">
                                            <h3><a href="single.html">Starts over the world travel to Mars in March 2017</a></h3>
                                        </div><!-- end post-title -->
                                    </div><!-- end post-review -->

                                    <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-media entry">
                                            <img src="upload/news_04.jpg" alt="" class="img-responsive">
                                            <div class="magnifier">
                                                <div class="hover-title-left">
                                                    <span><a href="#" title=""><i class="fa fa-folder-open"></i> Space</a></span>
                                                </div><!-- end title -->
                                                <div class="hover-title">
                                                    <span><a href="#" title=""><i class="fa fa-comments-o"></i> 13 Comments</a></span>
                                                </div><!-- end title -->
                                            </div><!-- end magnifier -->
                                        </div><!-- end media -->
                                        <div class="post-title">
                                            <h3><a href="single.html">Supported Uber for next month, last time to change anything</a></h3>
                                        </div><!-- end post-title -->
                                    </div><!-- end post-review -->

                                    <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-media entry">
                                            <img src="upload/news_05.jpg" alt="" class="img-responsive">
                                            <div class="magnifier">
                                                <div class="hover-title-left">
                                                    <span><a href="#" title=""><i class="fa fa-folder-open"></i> Mobile</a></span>
                                                </div><!-- end title -->
                                                <div class="hover-title">
                                                    <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                </div><!-- end title -->
                                            </div><!-- end magnifier -->
                                        </div><!-- end media -->
                                        <div class="post-title">
                                            <h3><a href="single.html">Freddie Mac Die time 2016 News and Updates</a></h3>
                                        </div><!-- end post-title -->
                                    </div><!-- end post-review -->

                                    <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-media entry">
                                            <img src="upload/news_06.jpg" alt="" class="img-responsive">
                                            <div class="magnifier">
                                                <div class="hover-title-left">
                                                    <span><a href="#" title=""><i class="fa fa-folder-open"></i> Automotive</a></span>
                                                </div><!-- end title -->
                                                <div class="hover-title">
                                                    <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                </div><!-- end title -->
                                            </div><!-- end magnifier -->
                                        </div><!-- end media -->
                                        <div class="post-title">
                                            <h3><a href="single.html">Bloomberg Has been released new site called Name..</a></h3>
                                        </div><!-- end post-title -->
                                    </div><!-- end post-review -->
                                </div><!-- end review-post -->
                            </div><!-- end widget -->   
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div id="comments" class="row">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4>What other's say about : How ThePhone thriller..</h4>
                                    <hr>
                                </div><!-- end widget-title -->

                                <div class="comments">
                                    <div class="well">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                  <img class="media-object img-circle" src="upload/avatar_02.png" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">John DOE</h4>
                                                <div class="time-comment clearfix">
                                                    <small class="pull-left">21 Jun 2015</small>
	                                                </div><!-- end time-comment -->
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end well -->
                                </div><!-- end collapse -->
                            </div><!-- end widget -->   
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4>Leave a Comment</h4>
                                    <hr>
                                </div><!-- end widget-title -->

                               <div class="commentform">
                                    <form class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <label>Comment <span class="required">*</span></label>
                                            <textarea class="form-control" placeholder=""></textarea>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <label>Website</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <input type="submit" value="Send Comment" class="btn btn-primary" />
                                        </div>
                                    </form>
                                </div><!-- end newsletter -->
                            </div><!-- end widget -->   
                        </div><!-- end col -->
                    </div><!-- end row -->

                </div><!-- end large-widget -->
            </div><!-- end widget -->
        </div><!-- end col -->

        <?php get_sidebar(); ?><!-- end col -->
    </div><!-- end row -->
</div>
<?php endif ?>
<?php get_footer(); ?>