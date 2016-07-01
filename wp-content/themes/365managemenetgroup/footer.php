<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

 <!-- Main Footer Starts-->
    <footer class="main-footer">
        <div class="container">
        <ul class="footer-menu">
						<?php 
                    $defaults = array(
                    'theme_location'  => 'footer',
                    'menu'            => 'Footer',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'walker'          => ''
                   );

                wp_nav_menu( $defaults ); ?>
           <!-- <li><a href="index.html">Home</a></li>      |     
            <li><a href="#">About Us</a></li>      |     
            <li><a href="artist.html">Artists</a></li>      |     
            <li><a href="portfolio.html">Portfolio</a></li>      |     
            <li><a href="news.html">News & Events</a></li>      |     
            <li><a href="career.html">Careers</a></li>      |     
            <li><a href="contact.html">Contact Us</a></li>-->
        </ul>
           <p class="copy-rgt"><?php echo get_option_tree('copy_right'); ?> Powered by <a href="http://www.imarkinfotech.com/" target="_blank">iMark <span>I</span>nfotech</a></p>
        </div>
    </footer>
	<?php wp_footer(); ?>
    <!-- Main Footer Ends-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mosaicflow.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <script>
   jQuery(document).ready(function(){
    jQuery(".see-menu").click(function(){
       jQuery(".menu-open").toggleClass("show");
    });
});
    </script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
    <script>
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 150,
            mobile: true,
            live: true,
            callback: function (box) {},
            scrollContainer: null
        });
        wow.init();
    </script>

    <script>
        jQuery(document).ready(function () {
            jQuery('#myCarousel').carousel({
                interval: 0
            })

           jQuery('#myCarousel').on('slid.bs.carousel', function () {
                //alert("slid");
            });


        });
    </script>
	 <script>
	jQuery(function () {
    jQuery('input,textarea').focus(function () {
        jQuery(this).data('placeholder',jQuery(this).attr('placeholder'))
               .attr('placeholder', '');
    }).blur(function () {
        jQuery(this).attr('placeholder',jQuery(this).data('placeholder'));
    });
});
 </script>
</body>
</html>
