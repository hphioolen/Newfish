<?php
/**

 *  Homepage Slider OWLSLIDER Package
 *  javascript in _main.js 
 */
	global $wp_query, $post, $panel_error_message;
	
	//settings 
	$settings['featured_order']  = 'ASC';
	$featposts                   = 4;
	$orderby                     = 'date';  //rand, none, menu_order
	$full_width                  = true;
	$show_title	                 = false;
	$show_description            = false;
	$mobile_detection			 = false;

//mobile detect
if ($mobile_detection):
	include_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;
endif;

?>


<?php 
	$slides = get_posts(array('post_type' => 'slide', 'numberposts' => $featposts, 'order' => $settings['featured_order'], 'orderby' => $orderby, 'suppress_filters' =>0
	)); ?>

<?php $slide_class = (count($slides) == 1 ? "no-carousel" : "owl-carousel"); ?>
<?php $slide_id = (count($slides) == 1 ? "no-carousel" : "owl-slider"); ?>		

<?php if (( count($slides) > 0 )) { ?>


<div class="slider-container">
	
	<?php if (!$full_width): ?>
	<div class="container">
	<?php endif; ?>
		
		    <div id="<?= $slide_id ?>" class="<?= $slide_class ?> owl-theme">
		        
	            <?php foreach($slides as $post) : setup_postdata($post); $count++; ?>    
		            
		            <div id="slide-<?php echo $count; ?>" class="item slide-id-<?php the_ID(); ?>" >
		        		
	    	    		<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
															
									
									if ($mobile_detection && $detect->isMobile() ) {
 
										the_post_thumbnail('mobile-width');
										
									}else{
										if ($full_width):
											the_post_thumbnail('full-width-slider');
										else:
											the_post_thumbnail('site-width');
										endif;
									
									}
								}
						?>
						<?php if ($show_title): ?>
							<h2 class="slider-title"><?php the_title(); ?></h2>
						<?php endif; ?>
						<?php if ($show_description): ?>
							<div class="slider-content-holder"
								<p class="slider-content"><?php the_content(); ?></p>
			            	</div>
						<?php endif; ?>
	    	    			            	
		            </div><!--/.slide-->
		            
				<?php endforeach; ?> 
				
		    </div>
	<?php if (!$full_width): ?>
	</div>
	<?php endif; ?>
</div>    
<?php }?>

