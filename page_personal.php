<?
/*
Template Name: personal
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
			<div class="box-text box">
				<div class="type"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolores sint mollitia distinctio, aut facilis ut, soluta, quo ipsam, ad autem! Corporis, itaque incidunt. Provident animi aliquam illum, maiores incidunt, rem sit dignissimos aperiam
					qui cupiditate eligendi illo, esse quidem fugiat? Corrupti ab, esse, nemo iusto dolorum dignissimos aut eius eum a optio quos, libero ipsa. Error hic dolorem itaque voluptatem doloribus vel quia illo, deleniti dolore. Maxime eius, cumque saepe,
					porro quo oribus voluptatem beatae quisquam.</div>
			</div>
			<!--block personal-galary-->
			<div class="personal-galary">
				 <?
					$args = array(
					'post_type' => 'attachment',
					'posts_per_page' => 300,
				    'post_status' => 'any',
				    'tax_query' => array(
				        array(
				        	'taxonomy' => 'media_category', 
				            'field' => 'id',
				            'terms' => 14 
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
								<a href="<?=wp_get_attachment_image_url($curentImg,$size); ?>" rel="group-elemen" style="background-image:url(<?=wp_get_attachment_image_url($curentImg,$size); ?>)" class="fancybox personal-galary__el"></a>
					<? endwhile; ?> 
					<? wp_reset_query();?> 
			</div>
				
			<!--block personal-galary end-->
		
			<!--block two-botton-block-->
			<? include('include/two-button-block.php');?>
			<!--block two-botton-block end-->
		</div>
	</div>
	<!--block slider-pers-->
	<? include('include/slider-personal.php');?>
	<!--block slider-pers end-->
<? get_footer(); ?>