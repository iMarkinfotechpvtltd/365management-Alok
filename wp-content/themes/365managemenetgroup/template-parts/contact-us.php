<?php
/**
 * Template Name: Contact Us
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
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
    <section class="artist-content">
    <div class="container">
        <h1 class="gen-heading"><?php the_title(); ?></h1>
        <div class="row contact-page-area">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <ul class="contact-address">
                <li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><em><?php the_field('location',18); ?></em></a></li>
                <li><a href="tel:<?php the_field('phone',18); ?>"><span><i class="fa fa-mobile" aria-hidden="true"></i></span><em><?php the_field('phone',18); ?></em></a></li>
                <li><a href="mailto:<?php the_field('email_id',18); ?>"><span>@</span><em><?php the_field('email_id',18); ?></em></a></li>
            </ul>
            
        </div>
        
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
        <?php 
               $maps = get_field('maps',18);
               if( !empty($maps) ): ?>
              <div class="set-map"> <div class="acf-map">
	              <div class="marker" data-lat="<?php echo $maps['lat']; ?>" data-lng="<?php echo $maps ['lng']; ?>"></div>
               </div></div>
           <?php endif; ?>   
        </div>
        
    </div>
    </section>
<!--===================== Contact Page Section ==================================--> 
    
<!--===================== Contact Form Section ==================================-->   
    <section class="form-section">
    <div class="container">
        <h3 class="sub-head"><?php the_field('say_contact_text',18); ?></h3>
        <div class="row">
		<?php echo do_shortcode('[contact-form-7 id="4" title="Contact us form"]'); ?>
        <!--<form class="form-inline">
    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12 set-form">
      <input type="text" class="form-control" placeholder="Name:" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name:'">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12 set-form">
      <input type="email" class="form-control" placeholder="Email:" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email:'">
    </div>
    
    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12 set-form">
      <input type="text" class="form-control" placeholder="Phone:" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone:'">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12 set-form">
      <input type="text" class="form-control" placeholder="Companies Website:" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Companys Website:'">
    </div>
    
            
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 set-form">
      <textarea placeholder="Message:" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message:'"></textarea>
    </div>
        <div class="cap-code">
            <img src="<?php //echo get_template_directory_uri(); ?>/images/cap-code.jpg" alt="" />
        </div>
    <button type="submit" class="btn frm-btns">Submit</button>
  </form>   --> 
              
    </div>
    </section>
<!--===================== Contact Form Section ==================================-->   
<!--Google map script--> 
<style type="text/css">

.acf-map {
	width: 100%;
	height: 100%;
	border:;
	margin: 0px 0;
}
/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {
function new_map( $el ) {
	var $markers = $el.find('.marker');
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};	        	
	var map = new google.maps.Map( $el[0], args);
	map.markers = [];
	$markers.each(function(){
    	add_marker( $(this), map );
	});
	center_map( map );
	return map;
}
function add_marker( $marker, map ) {
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});
	map.markers.push( marker );
	if( $marker.html() )
	{
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open( map, marker );
		});
	}
}

function center_map( map ) {
	var bounds = new google.maps.LatLngBounds();

	$.each( map.markers, function( i, marker ){
		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
		bounds.extend( latlng );
	});
	
	if( map.markers.length == 1 )
	{
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		map.fitBounds( bounds );
	}
}
var map = null;

$(document).ready(function(){
	$('.acf-map').each(function(){
		map = new_map( $(this) );
	});
});
})(jQuery);
</script>
<?php
get_footer();