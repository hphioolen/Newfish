<?php
/**
 * 		Homepage Slider
 * // javascript in _main.js 
 */
	global $wp_query, $post, $panel_error_message;
	
?>

<?php  
	$slides = get_posts(array('post_type' => 'logo', 'numberposts' => $featposts, 'order' => $settings['featured_order'], 'orderby' => $orderby, 'suppress_filters' =>0)); 	
?>

<footer class="logos">
	<div class="container">
		
		<?php if (( count($slides) > 0 )) { ?>
		
			    <div id="partner-slider" class="owl-carousel owl-theme">
			        
		            <?php foreach($slides as $post) : setup_postdata($post); $count++; ?>    
			            
			            <div id="slide-<?php echo $count; ?>" class="item slide-id-<?php the_ID(); ?>" >
			        		
		    	    		<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
																
										the_post_thumbnail();
									}
							?>
		    	    			            	
			            </div><!--/.slide-->
			            
					<?php endforeach; ?> 
					
			    </div>
		<?php }?>
	</div>
</footer>