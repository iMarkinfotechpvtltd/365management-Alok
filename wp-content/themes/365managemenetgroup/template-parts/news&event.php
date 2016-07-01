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
   <script src="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.js"></script>
   <link rel="stylesheet" href="http://exibirhost.com.br/supplypaper/front/css/owl.carousel.css">
  <!-- <link rel="stylesheet" href="http://exibirhost.com.br/supplypaper/front/css/owl.transitions.css">-->
   <link rel="stylesheet" href="http://exibirhost.com.br/supplypaper/front/css/owl.theme.css">
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
                
               <!-- <div class="item">
                    <a href=""><div class="img-holder"><img src="<?php// echo get_template_directory_uri(); ?>/images/news02.jpg" alt="news" class="img-responsive" /></div></a>
                    <div class="news-content"><h3><a href="">Lorem ipsum dolor sit amet, adipiscing elit</a></h3>
                    <h4>04 . 06 . 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <ul>
                        <li><a href="">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                        <li><a href="">Comments <i class="fa fa-comments" aria-hidden="true"></i></a></li>
                        <li><a href="">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="item">
                    <a href=""><div class="img-holder"><img src="<?php// echo get_template_directory_uri(); ?>/images/news03.jpg" alt="news" class="img-responsive" /></div></a>
                    <div class="news-content"><h3><a href="">Lorem ipsum dolor sit amet, adipiscing elit</a></h3>
                    <h4>04 . 06 . 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <ul>
                        <li><a href="">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                        <li><a href="">Comments <i class="fa fa-comments" aria-hidden="true"></i></a></li>
                        <li><a href="">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                  
                <div class="item">
                    <a href=""><div class="img-holder"><img src="<?php// echo get_template_directory_uri(); ?>/images/news01.jpg" alt="news" class="img-responsive" /></div></a>
                    <div class="news-content"><h3><a href="">Lorem ipsum dolor sit amet, adipiscing elit</a></h3>
                    <h4>04 . 06 . 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <ul>
                        <li><a href="">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                        <li><a href="">Comments <i class="fa fa-comments" aria-hidden="true"></i></a></li>
                        <li><a href="">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="item">
                    <a href=""><div class="img-holder"><img src="<?php// echo get_template_directory_uri(); ?>/images/news02.jpg" alt="news" class="img-responsive" /></div></a>
                    <div class="news-content"><h3><a href="">Lorem ipsum dolor sit amet, adipiscing elit</a></h3>
                    <h4>04 . 06 . 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <ul>
                        <li><a href="">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                        <li><a href="">Comments <i class="fa fa-comments" aria-hidden="true"></i></a></li>
                        <li><a href="">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="item">
                    <a href=""><div class="img-holder"><img src="<?php// echo get_template_directory_uri(); ?>/images/news03.jpg" alt="news" class="img-responsive" /></div></a>
                    <div class="news-content"><h3><a href="">Lorem ipsum dolor sit amet, adipiscing elit</a></h3>
                    <h4>04 . 06 . 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <ul>
                        <li><a href="">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                        <li><a href="">Comments <i class="fa fa-comments" aria-hidden="true"></i></a></li>
                        <li><a href="">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                  
                <div class="item">
                    <a href=""><div class="img-holder"><img src="<?php// echo get_template_directory_uri(); ?>/images/news01.jpg" alt="news" class="img-responsive" /></div></a>
                    <div class="news-content"><h3><a href="">Lorem ipsum dolor sit amet, adipiscing elit</a></h3>
                    <h4>04 . 06 . 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <ul>
                        <li><a href="">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                        <li><a href="">Comments <i class="fa fa-comments" aria-hidden="true"></i></a></li>
                        <li><a href="">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="item">
                    <a href=""><div class="img-holder"><img src="<?php// echo get_template_directory_uri(); ?>/images/news02.jpg" alt="news" class="img-responsive" /></div></a>
                    <div class="news-content"><h3><a href="">Lorem ipsum dolor sit amet, adipiscing elit</a></h3>
                    <h4>04 . 06 . 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <ul>
                        <li><a href="">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                        <li><a href="">Comments <i class="fa fa-comments" aria-hidden="true"></i></a></li>
                        <li><a href="">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="item">
                    <a href=""><div class="img-holder"><img src="<?php //echo get_template_directory_uri(); ?>/images/news03.jpg" alt="news" class="img-responsive" /></div></a>
                    <div class="news-content"><h3><a href="">Lorem ipsum dolor sit amet, adipiscing elit</a></h3>
                    <h4>04 . 06 . 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <ul>
                        <li><a href="">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                        <li><a href="">Comments <i class="fa fa-comments" aria-hidden="true"></i></a></li>
                        <li><a href="">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>-->
            <?php endwhile; ?>
              </div>
            </div>

    </div>



    
        
        
        
    </div>
    </section>
<!--===================== Artist Page Section ==================================-->  


<?php
get_footer();