<?php

 # Content pagina voor portfolio overzichten. 
 # Hoort in Package Portfolio.
 # Vorm van de figure gekozen op basis van het te bereiken effect (zoe als voorbeeld)
 
 #Variablen
 $effect_class 		= 	'effect-zoe'; //van de css classes 
 $item_class   		= 	'col-sm-4 text-center';
 $full_image_link 	= 	false; //voegt div en anchor toe om het beeld direct te laten linken naar de post..
	
?>

<?php 
 $title = get_the_title(); 
 $feature_url = get_permalink(); ?>

<?php if ( has_post_thumbnail() ) : // check if the post has a Post Thumbnail assigned to it.?>								

	<section class="portfolio-item <?= $item_class ?> ">
		<figure  class="<?= $effect_class ?>">
	
			<?= $full_image_link ? "<a href='$feature_url' title='$title'><div>" : ''; ?>
			
			<?php the_post_thumbnail('medium'); ?>
			
			<?php //link naar de full width nodig om fancybox mogelijk te maken.								
				$thumbnail_id = get_post_thumbnail_id();					
				$thumb = wp_get_attachment_image_src($thumbnail_id, 'full');
			?>																										
	
			<!-- Teksten en captions van portfolio beelden, links naar pagina's etc. -->
				<figcaption>
					<div>
						<h2 class="title"> <?php the_title();?> </h2>
						
						<p class="icon-links">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="<?= $feature_url; ?>"><i class="fa fa-link"></i></a>
							<a href="<?= $thumb[0]; ?>" rel="group-portfolio" class="fancybox"><i class="fa fa-picture-o"></i></a>
						</p>
						<p class="description">
							<?php echo get_the_excerpt(); ?>
						</p>
					</div>
				</figcaption>
			
			<?= $full_image_link ? "</div></a>" : ''; ?>	
		</figure>
	</section>

<?php endif; ?>