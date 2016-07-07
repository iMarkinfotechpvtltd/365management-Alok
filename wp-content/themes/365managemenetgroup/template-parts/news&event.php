<?php
/**
 * Template Name: NEWS & EVENTS
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!--========================== Owl ==========================-->

    <script>
    jQuery(document).ready(function() {

      jQuery("#owl-demo").owlCarousel({
        itemsCustom: [
[320, 1],
[480, 2], 
[992, 3],
[1200, 3],
[1500, 3]],
      });

    jQuery('.link').on('click', function(event){
        var jQuerythis = jQuery(this);
        if(jQuerythis.hasClass('clicked')){
          jQuerythis.removeAttr('style').removeClass('clicked');
        } else{
          jQuerythis.css('background','#7fc242').addClass('clicked');
        }
      });


    });
    </script>
    
<!--========================== Owl ==========================-->

<!--===================== Artist Page Section ==================================-->
    <section class="artist-content">
    <div class="container">
        <h1 class="gen-heading"><?php the_title(); ?></h1>
        
        
        <div id="events">
            <div class="row news-area">

              <div id="owl-demo" class="owl-carousel">
			  <?php	
		      $args = array('post_type' => 'news','posts_per_page'=>'5','order'=>'DESC');
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post(); ?>
			  
                <div class="item">
                    <a href="<?php the_permalink(); ?>"><div class="img-holder">
                  <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail('news-image');
                  } else { ?>
                 <img src="http://placehold.it/460x297&amp;text=No image found" alt="<?php the_title(); ?>"/>
                 <?php } ?>
					</div></a>
                    <div class="news-content"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <h4><?php the_time('d . m . Y'); ?></h4>
                    <?php the_content(); ?>
                        <ul>
                        <li><?php echo do_shortcode('[wp_ulike]'); ?></li>
                        <!--<li><a href="">Comments <i class="fa fa-comments" aria-hidden="true"></i></a></li>-->
                        <li><?php echo do_shortcode('[addtoany]'); ?></li>
                        </ul>
                    </div>
                </div>
            <?php endwhile; ?>
              </div>
            </div>

    </div>

    </div>
    </section>
<!--===================== Artist Page Section ==================================-->  


<?php
get_footer();