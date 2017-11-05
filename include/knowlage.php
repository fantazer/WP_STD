<div class="knowlage">
	<div class="knowlage__title">База знаний</div>
	<div class="knowlage__slider slider-one-item owl-carousel">
			 <?
				$args = array(
				'cat'=> 15,
				'posts_per_page' => 4,
				'orderby' => 'date', 
				'order' => 'DESC'
				);
			?>
			<? query_posts($args);?>
			<? while (have_posts()) : the_post(); ?>
					<a href="<?=get_permalink(); ?>" class="knowlage__el">
						<div class="knowlage__text"><?=get_the_title(); ?></div>
					</a>
			<? endwhile; ?> 
			<? wp_reset_query();?> 
	</div>
</div>