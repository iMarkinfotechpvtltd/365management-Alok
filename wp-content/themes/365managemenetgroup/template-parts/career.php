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
       <!---- <form class="form-inline">
    <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12 set-form">
      <input type="text" class="form-control" placeholder="Name:" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name:'">
    </div>
    <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12 set-form">
      <input type="email" class="form-control" placeholder="Email:" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email:'">
    </div>
    
    <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12 set-form">
      <input type="text" class="form-control" placeholder="Phone:" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone:'">
    </div>
    
            
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 set-form">
      <textarea placeholder="Message:" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message:'"></textarea>
    </div>
            
            <div class="cap-code form-group set-form">
            <input type="file" class="form-control" placeholder="Phone:" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone:'">
        </div>
        <div class="cap-code">
            <img src="<?php //echo get_template_directory_uri(); ?>/images/cap-code.jpg" alt="" class="img-responsive" />
        </div>
        <button type="button" class="btn frm-btns">Upload</button>
    <button type="submit" class="btn frm-btns">Submit</button>
  </form>-->    
              
    </div>
    </section>
<!--===================== Contact Form Section ==================================-->   

<?php
get_footer();