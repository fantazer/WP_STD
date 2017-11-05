<?
/*
Template Name: vacancy
*/
?>
<?php get_header(); ?>

<!--block header end-->
<div class="container-general">
	<!--block bread-->
	<div class="main-cont">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
	</div>
	<!--block bread end-->
	<div class="main-cont">
		
		<div class="title-page"><? echo get_the_title(); ?></div>
		<div class="container container--content">
			<div class="container__info">
				 <?
					$args = array(
					'cat'=> 17,
					'posts_per_page' => 6,
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
						<!--block vacany-el-->
						<div class="vacany-el">
							<div class="vacany-el__title"><?=get_the_title(); ?></div>
							<div class="vacany-el__pay"><?=get_field('price');?></div>
							<div class="vacany-el__text"><?=wp_trim_words( get_the_content(), 25, ' ...' );?></div>
							<div class="vacany-el__date"><?=get_field('town');?>, <?=get_the_date('j F Y'); ?></div>
							<a href="<?=get_permalink(); ?>" class="vacany-el__get">
								<div class="link-more">
									<div class="link-more__text">подробнее о вакансии</div>
									<div class="link-more__icon">
										<svg class="icon">
											<use xlink:href="#arrow-right"></use>
										</svg>
									</div>
								</div>
							</a>
						</div>
					<!--block vacany-el end-->
				<? endwhile; ?> 
				<?php the_posts_pagination($argsPag); ?>
				<? wp_reset_query();?> 
			</div>

			<div class="container__toolbar">
				
				<!--block reward-->
				<? include('include/reward.php');?>
				<!--block reward end-->

				<!--block knowlage-->
				<? include('include/knowlage.php');?>
				<!--block knowlage end-->

				<!--block keys-->
				<? include('include/keys.php');?>
				<!--block keys end-->
			</div>
		</div>
	</div>
</div>

<!--block slider-clients-->
	<? include('include/clients.php');?>
<!--block slider-clients end-->

<!--block slider-pers-->
	<? include('include/slider-personal.php');?>
<!--block slider-pers end-->
<?php get_footer(); ?>
