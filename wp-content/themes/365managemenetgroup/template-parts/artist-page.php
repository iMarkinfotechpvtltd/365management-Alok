<?php
/**
 * Template Name: Artist Page
 * @package WordPress
 */

get_header(); ?>

<!--===================== Artist Page Section ==================================-->
    <section class="artist-content">
    <div class="container">
        <h1 class="gen-heading"><?php the_title(); ?></h1>
        <div class="row">
			  <?php	
		      $args = array('post_type' => 'artists','posts_per_page'=>'-1','order'=>'DESC');
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 artist-cat">
            <div class="art-hold">
                <a href="<?php the_permalink(); ?>">
				<div class="img-responsive">
				<?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail('artists-image');
                  } else { ?>
                 <img src="http://placehold.it/339x365&amp;text=No image found" alt="<?php the_title(); ?>"/>
                 <?php } ?>
				</div><span class="hov-bar"></span></a>
				<!--<img src="<?php// echo get_template_directory_uri(); ?>/images/artist01.jpg" alt="artist name" class="img-responsive"/>-->
            </div>
            <h3 class="sub-head-artist"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
         <?php endwhile; ?>   
        </div>
		
       <!-- <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 artist-cat">
            <div class="art-hold">
                <a href=""><img src="<?php// echo get_template_directory_uri(); ?>/images/artist05.jpg" alt="artist name" class="img-responsive" /><span class="hov-bar"></span></a>
            </div>
            <h3 class="sub-head-artist"><a href="">Lorem ipsum dolor</a></h3>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 artist-cat">
            <div class="art-hold">
                <a href=""><img src="<?php //echo get_template_directory_uri(); ?>/images/artist04.jpg" alt="artist name" class="img-responsive" /><span class="hov-bar"></span></a>
            </div>
            <h3 class="sub-head-artist"><a href="">Lorem ipsum dolor</a></h3>
        </div>
            
            
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 artist-cat">
            <div class="art-hold">
                <a href=""><img src="<?php// echo get_template_directory_uri(); ?>/images/artist01.jpg" alt="artist name" class="img-responsive" /><span class="hov-bar"></span></a>
            </div>
            <h3 class="sub-head-artist"><a href="">Lorem ipsum dolor</a></h3>
        </div>
            
            
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 artist-cat">
            <div class="art-hold">
                <a href=""><img src="<?php// echo get_template_directory_uri(); ?>/images/artist02.jpg" alt="artist name" class="img-responsive" /><span class="hov-bar"></span></a>
            </div>
            <h3 class="sub-head-artist"><a href="">Lorem ipsum dolor</a></h3>
        </div>
            
        </div>-->
    </div>
    </section>
<!--===================== Artist Page Section ==================================-->   

<?php
get_footer();