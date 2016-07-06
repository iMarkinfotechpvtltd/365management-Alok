<?php
/**
 * The template for displaying all Artist posts and attachments
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>

<!--===================== Artist Page Section ==================================-->
    <section class="artist-content individual">
    <div class="container">
        <h1 class="gen-heading"><?php the_title(); ?></h1>
        <div class="row artist-i-bio">
		<?php
           function get_numerics ($str)
             {
              preg_match_all('/\d+/', $str, $matches);
              return $matches[0];
               }
                while ( have_posts() ) : the_post();
                 $one1 = get_the_content(); ?>
                  <?php
                              $arr1=get_numerics($one1);
                              foreach($arr1 as $val1)
                              {
                              $val1;
                                          
                              $small_image_url1 = wp_get_attachment_image_src($val1, 'indi-image');
                              ?>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div class="img-hold">
                      <img src="<?php echo $small_image_url1[0]; ?>" alt="image"/>
                    </div>
			</div>
			<?php }
			endwhile; 
            wp_reset_query(); ?> 
            
        </div>
       
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="sub-head">Follow Me On:</h3>
            <ul class="follow-artist">
            <li>
				 <?php
		         $face=get_option_tree('facebook');
		         if($face==""){}else{ ?>
				 <a target="_blank" href="<?php echo $face; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?></li>
            <li>
				 <?php
				 $inst=get_option_tree('instagram');
				 if($inst==""){}else { ?>
				 <a target="_blank" href="<?php echo $inst; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php } ?></li>
            <li>
				 <?php 
				 $twi=get_option_tree('twitter');
				 if($twi==""){}else { ?>
				 <a target="_blank" href="<?php echo $twi; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php }?>
				 </li>
            <li>
				 <?php
				 $spo=get_option_tree('spotify');
				 if($spo==""){}else { ?>
				 <a target="_blank" href="<?php echo $spo; ?>"><i class="fa fa-spotify" aria-hidden="true"></i>
</a><?php }?>
				 </li>

 <li>
				 <?php
				 $sound=get_option_tree('soundcloud');
				 if($sound==""){}else { ?>
				 <a target="_blank" href="<?php echo $sound; ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i>
</a><?php }?>
				 </li>
            </ul>
            <p><?php the_field('about_us'); ?></p>
           
            

            </div>
        </div>
    </div>
    </section>
<!--===================== Artist Page Section ==================================-->     

<?php
get_footer();