<?
/*
Template Name: news
*/
?>
<?php get_header(); ?>
<div class="container-general">
	<!--block bread-->
	<div class="main-cont">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
	</div>
	<!--block bread end-->
	<div class="main-cont">
		<div class="title-page  type--icon">
			<?php if (get_field('icon')): ?>
				<div class="title-icon title-icon--orange">
					<svg class="icon">
						<use xlink:href="#<?=get_field('icon');?>"></use>
					</svg>
				</div>
			<?php endif ?>
			<?=get_the_title(); ?>
		</div>
		<div class="container container--content">
			<div class="container__news">
				<!--block news-el-->
			  <?
				 	$args = array(
					 	'cat'=> 5,
					 	'posts_per_page' => 8,
					 	'orderby' => 'date', 
					 	'order' => 'DESC',
					 	'paged' => $paged
				 	);
				 	$argsPag = array(
				 		'end_size'     => 1,     // количество страниц на концах
				 		'mid_size'     => 1,     // количество страниц вокруг текущей
				 		'prev_next'    => True,  // выводить ли боковые ссылки "предыдущая/следующая страница".
				 		'prev_text'    => __('Назад'),
				 		'next_text'    => __('Вперед'),
				 		'add_args'     => False,
				 		'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
				 		'screen_reader_text' => __( '' ),
				 	);
			 	?>
			 	<? query_posts($args);?>
			 	<? while (have_posts()) : the_post(); ?>
					<div class="news-el">
						<div class="news-el__date"><?=get_the_date('j F Y'); ?></div>
						<a href="<?=get_permalink(); ?>" class="news-el__text"><?=get_the_title(); ?></a>
						<a href="<?=get_permalink(); ?>" class="news-el__link">
							<div class="link-more">
								<div class="link-more__text">подробнее</div>
								<div class="link-more__icon">
									<svg class="icon">
										<use xlink:href="#arrow-right"></use>
									</svg>
								</div>
							</div>
						</a>
					</div>
				 <? endwhile; ?> 
				 <?php the_posts_pagination($argsPag); ?>
				 <? wp_reset_query();?> 
			</div>
		</div>
		<!--block two-botton-block-->
		<? include('include/two-button-block.php');?>
		<!--block two-botton-block end-->
	</div>
</div>
<?php get_footer(); ?>