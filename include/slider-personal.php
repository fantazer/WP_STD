<div class="main-cont">
	<div class="slider-items slider-items-pers">
		<div class="slider-items-title">Наш персонал</div>
		<div class="slider-items__wraper owl-carousel">
				 <?
					$args = array(
					'cat'=> 7,
					'orderby' => 'date', 
					'order' => 'ASC'
					);
				?>
				<? query_posts($args);?>
				<? while (have_posts()) : the_post(); 
					if (get_field('img')) {$stafImg = get_field('image');}
						else{$stafImg = "/wp-content/themes/AAK/img/user.jpg";}
					if (get_field('staf')) {$stafName = get_field('staf');}
						else{$stafName = "Грузчик";}
					if (get_field('pay')) {$stafPay = get_field('pay');}
						else{$stafPay = "от 100 р";}
					?>
						<a href="<?=get_permalink(); ?>" class="slider-items-pers__el">
							<div style="background-image:url(<?=get_field('img');?>)" class="slider-items-pers__img"></div>
							<div class="slider-items-pers__title"><?=get_field('staf');?></div>
							<div class="slider-items-pers__pay"><?=get_field('pay');?></div>
						</a>
				<? endwhile; ?> 
				<? wp_reset_query();?> 
		</div>
	</div>
</div>