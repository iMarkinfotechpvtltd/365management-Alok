<?php
/**
 * Template Name: About Us Page
 * @package WordPress
 */

get_header(); ?>

<!--===================== About Page Section ==================================--> 
    <section class="artist-content about">
    <div class="container">
        <h1 class="gen-heading"><?php the_title(); ?></h1>
        <div class="row about-page-content">
        <div class="about-img img-responsive">
		<?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail('about-image');
                  } else { ?>
                 <img src="http://placehold.it/781x782&amp;text=No image found" alt="<?php the_title(); ?>"/>
                 <?php } ?>
		</div>    
        <div class="about-content">
            <div id="" class="content mCustomScrollbar">
			<?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
			<?php endwhile; ?>
            </div>
        </div>
        <div class="guitar">
		<?php 
    $image = get_field('image');
    if( !empty($image) ): ?>
		<img src="<?php echo $image['url']; ?>" class="img-responsive" /></div>
    
        <?php endif; ?>
    </div>
    </section>
<!--===================== About Page Section ==================================--> 

<?php
get_footer();
    