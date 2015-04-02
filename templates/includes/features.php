<?php 
	# Haalt de features van de website op,
	# URl voor in de text link is voorzien, niet ingevuld: geen link, geen knop.
	# nog geen eigen css... 
	
	# image
	# title
	# content
	# btn
	// extra tekst regel beschikbaar..
	
	/*
	Bootstrap image:
		.img-rounded: adds border-radius:6px to give the image rounded corners.
		.img-circle: makes the entire image round by adding border-radius:500px.	
		.img-thumbnail: adds a bit of padding and a gray border:
	
	Bootstrap button:
		btn-default
		btn-primary
		btn-success
		btn-info
		btn-warning
		btn-danger
		btn-link 
	
	Bootstrap text align
		text-center
	
	*/
	//variablen
	$thumb_size		= 'thumbnail';
	$image_class 	= 'img-circle img-thumbnail';
	$btn_class   	= 'btn-primary';
	$align			= 'text-center';

//start Query
query_posts( array( 'post_type' => 'feature', 'posts_per_page' => 3, ) );
		
	if ( have_posts() ) : $count = 0; ?>    
		  
	  <div class="content clearfix" id="features">
	  	<div class="container">
	  		<div class="row">
    	
				<?php while ( have_posts() ) : the_post(); $count++; ?>
					
					<?php $title = get_the_title(); 
					$url = get_post_meta( get_the_ID(), 'wpcf-url', true );
					$extra_regel = get_post_meta( get_the_ID(), 'wpcf-by-line', true );
					 ?>
					
					<section class="feature col-sm-4 <?= $align ?>">
					
						<?php 
							///image 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								
								$default_attr = array(									
									'class' => $image_class,
									'alt'   => trim( $title ),
								);
								//the_permalink();
								if( ! empty( $url ) ) {
									echo "<a href='$url' title='$title'>";
									the_post_thumbnail($thumb_size, $default_attr );
									echo "</a>";
								}else{
									the_post_thumbnail($thumb_size, $default_attr );
								}
						} ?>
						
						<h3>
						<?php 
							///title
							if( ! empty( $url ) ) {
									echo "<a href='$url' title='$title'> $title</a>";
								}else{
									the_title();	
								} ?>
						</h3>
						<?php the_content(); //content ?>
						<?php 
						// button
						if( ! empty( $url ) ) {
						  
						  echo "<a class='read-more btn btn-primary' href='$url' title='$title'>Lees verder</a>";
						  
						} 
						?>
												
					</section>
	
				<?php endwhile; ?>
	  		</div>
	  	</div>	
	  </div>

<?php endif; ?>			    		
<?php wp_reset_query(); ?>