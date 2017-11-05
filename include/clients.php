<div class="main-cont">
	<div class="slider-items slider-items-clients">
		<div class="slider-items-title">Наши клиенты</div>
		<div class="slider-items__wraper owl-carousel">
			 <?
				$args = array(
				'post_type' => 'attachment',
			    'post_status' => 'any',
			    'tax_query' => array(
			        array(
			        	'taxonomy' => 'media_category', 
			            'field' => 'id',
			            'terms' => 13 
			        )
			    )
				);
				?>
				<? query_posts($args);?>
				<? while (have_posts()) : the_post(); ?>
						<a href="/otzyvy/"><div style="background-image:url(<?=wp_get_attachment_image_url(get_the_ID()); ?>)" class="slider-items__el"></div></a>
				<? endwhile; ?> 
				<? wp_reset_query();?> 
		</div>
	</div>
</div>