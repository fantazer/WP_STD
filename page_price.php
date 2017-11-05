<?
/*
Template Name: price
*/
?>

<? get_header(); ?>
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
			<!--block table-price-->
			<div class="table-price">
				<table>
					<!--thead-->
					<tr>
						<th>Наш персонал</th>
						<th>Цена (руб.):</th>
						<th></th>
					</tr>
					<tbody>
						<!--  <?
							$args = array(
							'cat'=>  array(9,10),
							'orderby' => 'date', 
							'order' => 'DESC',
							'posts_per_page' => 40,
							);
						?>
						<? query_posts($args);?>
						<? while (have_posts()) : the_post(); ?>
								<tr>
									<td><a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a></td>
									<td>
										<span class="table-price-val"><?=get_field('price');?></span>
									</td>
									<td>
										<a href="/kontakty/" class="table-price__get">Связаться со мной</a>
									</td>
								</tr>
								can write
						<? endwhile; ?>  -->
						<?
							$args = array(
							'cat'=>  array(7),
							'orderby' => 'date', 
							'order' => 'DESC',
							'posts_per_page' => 40,
							);
						?>
						<? query_posts($args);?>
						<? while (have_posts()) : the_post(); ?>
								<tr>
									<td><a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a></td>
									<td>
										<span class="table-price-val"><?=get_field('pay');?></span>
									</td>
									<td>
										<a href="/kontakty/" class="table-price__get">Получить</a>
									</td>
								</tr>
								<!-- can write -->
						<? endwhile; ?>
						<? wp_reset_query();?> 


					
					</tbody>
				</table>
			</div>
			<!--block table-price end-->
		</div>
	</div>
	<!--block slider-pers-->
	<? include('include/slider-personal.php');?>
	<!--block slider-pers end-->
<? get_footer(); ?>