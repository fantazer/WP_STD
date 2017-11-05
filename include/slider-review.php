<div class="slider-review">
	<div class="slider-review__title">Наши отзывы</div>
	<div class="slider-review-wraper owl-carousel">
		  	  <?
		  	 	$args = array(
		  		 	'cat'=> 4,
		  		 	'posts_per_page' => 4,
		  	 	);
		   		query_posts($args);
		  	 	while (have_posts()) : the_post(); 
		  	 	if (get_field('image')) {$reviewImg = get_field('image');}
		  	 		else{$reviewImg = "/wp-content/themes/AAK/img/user.jpg";}
		  	 	?>
		  		 	<div class="slider-review__el">
		  		 		<div class="slider-review__text"><?=wp_trim_words( get_the_content(), 30, ' ...' ); ?></div>
		  		 		<div class="slider-review__user">
		  		 			<div style="background-image:url(<?=$reviewImg ;?>)" class="slider-review__icon"></div>
		  		 			<div class="slider-review__names"><?=get_field('name'); ?></div> 
		  		 		</div>
		  		 	</div>
	  		<? endwhile; ?> 
	  		<? wp_reset_query();?> 
	</div>
</div>