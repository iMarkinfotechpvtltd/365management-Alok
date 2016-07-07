<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section class="post-interrnal">
    <div class="container">
    <h2 class="gen-heading"><?php the_title(); ?></h2>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail('news-image');
                  } else { ?>
                 <img src="http://placehold.it/370x215&amp;text=No image found" alt="<?php the_title(); ?>"/>
               <?php } ?>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><?php the_content(); ?></div>
    </div>
</section>

<?php get_footer(); ?>
