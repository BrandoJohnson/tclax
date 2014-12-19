<?php
/**
 * Page Sidebar Right Large Template
 *
 * Template Name:  Page Sidebar Right FW Slider
 *
 * @file           page-sidebar-right-large.php
 * @package        ImpulsePress
 * @author         Two Impulse
 * @copyright      2014 Two Impulse
 * @version        Release: 1.2.6
 */

get_header(); ?>

<div class="container">
<div class="row">
    <div class="col-lg-12">

    </div>
</div>
	<div class="row">
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
                    <img class="fixed_width" src="<?php bloginfo('template_directory') ?>/images/slider4Full.png" alt="..." height="315" width="1200">
                </div>
                <div class="item">
                    <img class="fixed_width" src="<?php bloginfo('template_directory') ?>/images/slider1Full.png" alt="..." height="315" width="1200">

                </div>
                <div class="item">
                    <img class="fixed_width" src="<?php bloginfo('template_directory') ?>/images/slider3Full.png" alt="..." height="315" width="1200">

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
        <br/>
        <div class="col-lg-8 well">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div><!-- end of #col-lg-9 -->

        <div class="col-lg-4">
            <div id="widgets" class="well welliam">
                <?php if (!dynamic_sidebar('sidebar-right')) : ?>
                    <div class="widget-title-home"><h3><?php _e('Sidebar Right', 'impulse-press'); ?></h3></div>
                    <div class="textwidget"><?php _e('To edit please go to Appearance > Widgets and choose Sidebar Right.', 'impulse-press'); ?></div>
                <?php endif;  ?>
            </div>
        </div><!-- end of col-lg-3 -->
        
	</div><!-- end of row -->
    
</div><!-- end of container -->
<?php get_footer(); ?>