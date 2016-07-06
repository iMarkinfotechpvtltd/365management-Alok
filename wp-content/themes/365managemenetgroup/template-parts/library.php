<?php
/**
 * Template Name: Library Page
 * @package WordPress
 */

get_header(); ?>

<!--===================== Library Page Section ==================================--> 
    <section class="artist-content about">
    <div class="container">
        <h1 class="gen-heading"><?php the_title(); ?></h1>
        <div class="row library-page-content">
        <div class=" col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <div class="library-img img-responsive">
			<?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail('library-image');
                  } else { ?>
                 <img src="http://placehold.it/583x797&amp;text=No image found" alt="<?php the_title(); ?>"/>
                 <?php } ?>
		
			</div>
        </div>
        
        <div class="library-content col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content();?>
        <?php endwhile;?>
        <ul class="library-d">
		<?php	
		$args = array('post_type' => 'library','posts_per_page'=>'-1','order'=>'DESC');
		$i=1;
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php 
		$music = get_field('track');
		?>
            <li><span class="num"><?php echo $i; ?></span> <span class="name">
			<?php 
                $title  = the_title('','',false);
                  if(strlen($title) > 45):
                     echo trim(substr($title, 0, 40)).'...';
                  else:
                    echo $title;
                  endif;?>
                  </span> <div class="music-btn"><?php echo do_shortcode( '[sc_embed_player fileurl="'.$music.'"]' );?></div></li>
             <?php
		     $i++;
		     endwhile; ?> 
        </ul>    
        
        
        
         <ul class="library-p">
		<?php	
		$args = array('post_type' => 'library','posts_per_page'=>'-1','order'=>'DESC');
		$i=1;
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php 
		$music = get_field('track');
		?>
            <li><span class="num"><?php echo $i; ?></span> <span class="name">

                <?php 
                   $title  = the_title('','',false);
                  if(strlen($title) > 20):
                    echo trim(substr($title, 0, 16)).'...';
                  else:
                   echo $title;
                 endif; ?>

            </span> <div class="music-btn"><?php echo do_shortcode( '[sc_embed_player fileurl="'.$music.'"]' );?></div></li>
        <?php
		$i++;
		endwhile; ?> 
        </ul> 
        
        
       </div>
        
    
        
    </div>
    </section>
<!--===================== Library Page Section ==================================--> 


<?php
get_footer();
