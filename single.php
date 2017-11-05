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
			<div class="container__info container__info--light">
				<?
					while (have_posts()) : the_post(); 
						echo the_content();
				   endwhile; 
				   wp_reset_query(); 
				?>
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
