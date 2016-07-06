<?php
/**
 * Template Name: Home Page
 * @package WordPress
 */

get_header(); ?>

<!--===================== Slider ==================================-->
    <section id="myCarousel" class="carousel slide">
        <!-- Indicators -->

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
		<?php	
		$args = array('post_type' => 'slider','posts_per_page'=>'5','order'=>'DESC');
        $loop = new WP_Query( $args );
	    $i=0;
        while ( $loop->have_posts() ) : $loop->the_post();
        if($i==0){ ?>	
		<div class="item active">
		<?php } else { ?>
		<div class="item">
		<?php } ?>
           <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail('slider-image');
                  } else { ?>
                 <img src="http://placehold.it/1920x840&amp;text=No image found" alt="<?php the_title(); ?>"/>
                 <?php } ?>
        </div>
        <?php	
		$i++;
		endwhile;
		?> 
            <!-- Controls -->
        <div class="container">
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span></span>
        </a>
        </div>
            
        </div>

        
    </section>
<!--===================== Slider ==================================-->   

<?php
get_footer();