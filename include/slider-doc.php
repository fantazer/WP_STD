<div class="slider-items slider-items-docs">
	<div class="slider-items-title">Наши клиенты</div>
	<div class="slider-items__wraper owl-carousel slider-items__wraper--doc">
		 <?
			$args = array(
			'post_type' => 'attachment',
		    'post_status' => 'any',
		    'tax_query' => array(
		        array(
		        	'taxonomy' => 'media_category', 
		            'field' => 'id',
		            'terms' => 16 
		        )
		    )
			);
			?>
			<? query_posts($args);?>
			<? while (have_posts()) : the_post(); ?>
			<? 
						$curentImg= get_the_ID();
						$size = 'full'; 
			?>	
						<a href="<?=wp_get_attachment_image_url($curentImg,$size); ?>" rel="group-elemen" style="background-image:url(<?=wp_get_attachment_image_url($curentImg,$size); ?>)" class="fancybox slider-items__el"></a>
			<? endwhile; ?> 
			<? wp_reset_query();?> 
	</div>
</div>