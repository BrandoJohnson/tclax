<?php
/**
 * Page Sidebar Left Large Template
 *
 * Template Name:  Page Sidebar Left Large
 *
 * @file           page-sidebar-left-large.php
 * @package        ImpulsePress
 * @author         Two Impulse
 * @copyright      2014 Two Impulse
 * @version        Release: 1.2.6
 */

get_header(); ?>

<div class="container">

	<div class="row">

    	<div class="col-lg-4">
          	<div id="widgets" class="well">
                <?php if (!dynamic_sidebar('sidebar-left')) : ?>
                    <div class="widget-title-home"><h3><?php _e('Sidebar Left', 'impulse-press'); ?></h3></div>
                    <div class="textwidget"><?php _e('To edit please go to Appearance > Widgets and choose Sidebar Left.', 'impulse-press'); ?></div>
                <?php endif;  ?>
            </div>
        </div><!-- end of col-lg-3 -->
    
        <div class="col-lg-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php bloginfo('template_directory') ?>/images/slider1.png" alt="...">
                        <div class="carousel-caption">
                            <h3>Caption Text</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory') ?>/images/slider2.png" alt="...">
                        <div class="carousel-caption">
                            <h3>Caption Text</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory') ?>/images/slider3.png" alt="...">
                        <div class="carousel-caption">
                            <h3>Caption Text</h3>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div> <!-- Carousel -->

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

        </div><!-- end of #col-lg-9 -->

          
        
	</div><!-- end of row -->
    
</div><!-- end of container -->
<?php get_footer(); ?>