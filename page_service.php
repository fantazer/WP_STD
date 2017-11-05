<?
/*
Template Name: service
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
			<div class="container__service">
				<div class="service__col">
					<div class="service__title" >
						Разовые
					</div>
					<div class="service__wraper">
							 <?
								$args = array(
								'cat'=> 9,
								/*'orderby' => 'date',
								'order' => 'DESC'*/
								);
							?>
							<? query_posts($args);?>
							<? while (have_posts()) : the_post(); ?>
									<div class="service__el">
										<div class="service__el-content">
											<div class="service__el-header">
												<div class="service__el-info">
													<!--<div class="service__el-type">Разовые</div>-->
													<a href="<?=get_permalink(); ?>" class="service__el-name"><?=get_the_title(); ?> </a>
												</div>
												<div class="service__el-icon">
													<svg class="icon">
														<use xlink:href="#<?=get_field('icon');?>"></use>
													</svg>
												</div>
											</div>
										</div>
										<a href="<?=get_permalink(); ?>" class="service__el-get">
											<div class="link-more">
												<div class="link-more__text">Подробнее</div>
												<div class="link-more__icon">
													<svg class="icon">
														<use xlink:href="#arrow-right"></use>
													</svg>
												</div>
											</div>
										</a>
									</div>
							<? endwhile; ?> 
							<? wp_reset_query();?> 
					</div>
				</div>
				<div class="service__col">
					<div class="service__title">Постоянные</div>
					<div class="service__wraper">
							 <?
								$args = array(
								'cat'=> 10,
								/*'orderby' => 'date',
								'order' => 'DESC'*/
								);
							?>
							<? query_posts($args);?>
							<? while (have_posts()) : the_post(); ?>
									<div class="service__el">
										<div class="service__el-content">
											<div class="service__el-header">
												<div class="service__el-info">
													<!--<div class="service__el-type">Постоянные</div>-->
													<a href="<?=get_permalink(); ?>" class="service__el-name"><?=get_the_title(); ?> </a>
												</div>
												<div class="service__el-icon">
													<svg class="icon">
														<use xlink:href="#<?=get_field('icon');?>"></use>
													</svg>
												</div>
											</div>
										</div>
										<a href="<?=get_permalink(); ?>" class="service__el-get">
											<div class="link-more">
												<div class="link-more__text">Подробнее</div>
												<div class="link-more__icon">
													<svg class="icon">
														<use xlink:href="#arrow-right"></use>
													</svg>
												</div>
											</div>
										</a>
									</div>
							<? endwhile; ?> 
							<? wp_reset_query();?> 
					</div>
				</div>
			</div>
	
		</div>
		<div class="main-cont">
			<? include('include/two-button-block.php');?>
		</div>
		<? include('include/clients.php');?>
	
	</div>
<!--block slider-pers-->
<? get_footer(); ?>