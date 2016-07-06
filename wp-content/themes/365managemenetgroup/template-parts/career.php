<?php
/**
 * Template Name: Career Page
 *
 * @package WordPress
 */

get_header(); ?>

<script type="text/javascript">
           jQuery(function () {
               jQuery("input[name='name']").keydown(function (e) {
                   if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1) {
                       // let it happen, don't do anything
                       return;
                   }
                   if (e.ctrlKey || e.altKey) {
                       e.preventDefault();
                   } else {
                       var key = e.keyCode;
                       if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                           e.preventDefault();
                       }
                   }
               });
           });
</script>

<!--===================== Contact Page Section ==================================-->   
    <section class="artist-content career">
	<div class="img-responsive career-b4">
	<?php 
    $image = get_field('image');
    if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	<?php endif; ?>
	</div>
    <div class="container">
        <h1 class="gen-heading"><?php the_title(); ?></h1>
        <div class="row career-page-content">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content();?>
        <?php endwhile;?>
            
        </div>
    
        
    </div>
    </section>
<!--===================== Contact Page Section ==================================--> 
    
<!--===================== Contact Form Section ==================================-->   
    <section class="form-section">
    <div class="container">
        <p><?php the_field('contact_uper_text',16); ?> </p>
        <div class="row">
        <?php echo do_shortcode('[contact-form-7 id="45" title="Carrers form"]'); ?>        
    </div>
    </section>
<!--===================== Contact Form Section ==================================-->   
<script>
jQuery(function() {                       //run when the DOM is ready
  jQuery(".wpcf7-submit").click(function() {  //use a class, since your ID gets mangled
    jQuery(this).addClass("err");      //add the class to the clicked element
  });
});
</script>
<?php
get_footer();