<?php
/**
 * The footer template file
 *
 * @file           footer.php
 * @package        Impulse Press
 * @author         Two Impulse
 * @copyright      2014 Two Impulse

 * @version        Release: 1.2.6
 */
?>
 </div> <!--Wrap-->

<div class="footer">
  <div class="container">
    <div id="footer-wrapper">
      <div class="row">
          <div class="col-lg-6">
            <?php if (has_nav_menu('footer-menu')) { ?>
            <?php wp_nav_menu(array(
              'container'       => '',
              'depth'      => 1,
              'menu_class'      => 'footer-menu',
              'theme_location'  => 'footer-menu')
            );
            ?>
            <?php } ?>

          </div><!-- end of col-lg-6 -->

          <div class="col-lg-6">

        </div>
       </div><!-- end of row -->
      <div class="row">

        <div class="col-lg-4 copyright">
                 <?php echo __('Copyright','impulse-press'); ?> <?php echo date( 'Y' ); ?> &#124; <?php bloginfo('name'); ?>
        </div> <!-- end copyright -->


        <div class="col-lg-4 scroll-top">
            <a href="#wrapsit" class="scroll" title="<?php esc_attr_e( 'scroll to top', 'impulse-press' ); ?>"><?php _e( '<span class="glyphicon glyphicon-chevron-up"></span>', 'impulse-press' ); ?></a>
        </div>


        <div class="col-lg-4 powered">
            <?php echo __('Powered By','impulse-press'); ?> <a href="http://www.twoimpulse.com/products/impulse-press" target="_blank" rel="home">Impulse Press</a>

        </div><!-- end .powered -->
    </div><!-- end row -->
    </div><!-- end #footer-wrapper -->
  </div> <!-- end container -->
</div><!-- end #footer -->

<?php wp_footer(); ?>
</body>
</html>