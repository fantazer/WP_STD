<?
/*
Template Name: review
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
			<div class="container__info">
				<!--block slider-docs-->
				<? include('include/slider-doc.php');?>
				<!--block slider-docs end-->
				<div class="review__container">
					<!--block review-block-->
						 <?
							$args = array(
							'cat'=> 4,
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
								<div class="review-block">
									<div class="review-block__text">
										<?=get_the_content();?>
									</div>
									<div class="review-block__info">
										<div style="background-image:url(<?=get_field('image');?>" class="review-block__avatar"></div>
										<div class="review-block__name"><?=get_field('name');?></div>
									</div>
								</div>
						<? endwhile; ?> 
						 <?php the_posts_pagination($argsPag); ?>
						<? wp_reset_query();?> 
					<!--block review-block-end-->
				</div>
			</div>

			<div class="container__toolbar">
				<div class="send-review">
					<div class="send-review__title">Оставьте отзыв</div>
					<div class="get-more get-modal-review">
						<a href="#" class="btn--light">Написать отзыв</a>
					</div>
				</div>
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
