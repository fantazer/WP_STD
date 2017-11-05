<div class="keys">
	<div class="keys__content">
		<div class="keys__title">Лучшие кейсы</div>
		<div class="keys__date"></div>
			 <?
				$args = array(
				'cat'=> 6,
				'posts_per_page' => 1,
				'orderby' => 'date', 
				'order' => 'DESC'
				);
			?>
			<? query_posts($args);?>
			<? while (have_posts()) : the_post(); ?>
					<a href="<?=get_permalink(); ?>" class="keys__el">
						<div class="keys__el-date"><?=get_the_date('j F Y'); ?></div>
						<div class="keys__el-text"><?=get_the_title(); ?></div>
					</a>
			<? endwhile; ?> 
			<? wp_reset_query();?> 
	</div>
	<div class="keys__get">
		<a href="/kejsy/" class="keys__get__link">
			<div class="link-more">
				<div class="link-more__text">все кейсы</div>
				<div class="link-more__icon">
					<svg class="icon">
						<use xlink:href="#arrow-right"></use>
					</svg>
				</div>
			</div>
		</a>
	</div>
</div>