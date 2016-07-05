<?php
/**
 * Template Name: Portfolio Page
 * @package WordPress
 */

get_header(); ?>

    
<!--===================== Artist Page Section ==================================-->
    <section class="artist-content">
    <div class="container">
        <h1 class="gen-heading"><?php the_title(); ?></h1>
        
        <div class="row folio">
            
            
            <div class="mosaicflow" data-item-height-calculation="attribute">
		<div class="mosaicflow__item">
            <a target="_blank" href="<?php the_field('first_image_link',30); ?>">
			
		     <?php
               $first=get_post_meta(30,"first_image",true);
               $thumb = wp_get_attachment_image_src($first, 'first-image' );?>
		       <?php if($thumb==""){?>
		           <img src="http://placehold.it/460x358&amp;text=No image found" alt="Image"/>
		      <?php
		          }else{?>
		           <img src="<?php echo $url = $thumb['0'];?>"><?php } ?>
				  
			<span class="icon-mid"><img src="<?php echo get_template_directory_uri(); ?>/images/sound-c.png" /></span>
            </a>
		</div>

		<div class="mosaicflow__item">
			<a target="_blank" href="<?php the_field('second_image_link',30); ?>">
		     <?php
               $second=get_post_meta(30,"second_image",true);
               $thumb = wp_get_attachment_image_src($second, 'second-image' );?>
		       <?php if($thumb==""){?>
		           <img src="http://placehold.it/460x416&amp;text=No image found" alt="Image"/>
		      <?php
		          }else{?>
		           <img src="<?php echo $url = $thumb['0'];?>"><?php } ?>
            </a>
		</div>

		<div class="mosaicflow__item">
             <a target="_blank" href="<?php the_field('third_image_link',30); ?>">
		     <?php
               $third=get_post_meta(30,"third_image",true);
               $thumb = wp_get_attachment_image_src($third, 'third-image' );?>
		       <?php if($thumb==""){?>
		           <img src="http://placehold.it/460x194&amp;text=No image found" alt="Image"/>
		      <?php
		          }else{?>
		           <img src="<?php echo $url = $thumb['0'];?>"><?php } ?>
			<span class="icon-mid"><img src="<?php echo get_template_directory_uri(); ?>/images/i-tune.png" /></span>
            </a>
		</div>

		<div class="mosaicflow__item">
			 <a target="_blank" href="<?php the_field('fourth_image_link',30); ?>">
		     <?php
               $fourth=get_post_meta(30,"fourth_image",true);
               $thumb = wp_get_attachment_image_src($fourth, 'fourth-image' );?>
		       <?php if($thumb==""){?>
		           <img src="http://placehold.it/460x324&amp;text=No image found" alt="Image"/>
		      <?php
		          }else{?>
		           <img src="<?php echo $url = $thumb['0'];?>"><?php } ?>
			<span class="icon-mid"><img src="<?php echo get_template_directory_uri(); ?>/images/y-tube.png" /></span>
            </a>
		</div>

		<div class="mosaicflow__item">
			 <a target="_blank" href="<?php the_field('fifth_image_link',30); ?>">
		     <?php
               $fifth=get_post_meta(30,"fifth_image",true);
               $thumb = wp_get_attachment_image_src($fifth, 'fifth-image' );?>
		       <?php if($thumb==""){?>
		           <img src="http://placehold.it/460x268&amp;text=No image found" alt="Image"/>
		      <?php
		          }else{?>
		           <img src="<?php echo $url = $thumb['0'];?>"><?php } ?>
            </a>			
		</div>

		<div class="mosaicflow__item">
			 <a target="_blank" href="<?php the_field('sixth_image_link',30); ?>">
		     <?php
               $sixth=get_post_meta(30,"sixth_image",true);
               $thumb = wp_get_attachment_image_src($sixth, 'sixth-image' );?>
		       <?php if($thumb==""){?>
		           <img src="http://placehold.it/460x489&amp;text=No image found" alt="Image"/>
		      <?php
		          }else{?>
		           <img src="<?php echo $url = $thumb['0'];?>"><?php } ?>
			<span class="icon-mid"><img src="<?php echo get_template_directory_uri(); ?>/images/albums.png" /></span>
            </a>
		</div>
	</div>
     
        </div>
        
    </div>
    </section>
<!--===================== Artist Page Section ==================================-->   
      

<?php
get_footer();