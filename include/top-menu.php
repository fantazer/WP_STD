<div class="header">
	<div class="main-cont">
		<div class="header-wrp">
			<a href="/" class="header-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-light.png" alt="" />
			</a>
			<div class="header-cnt">
				<div class="header-info">
					<a href="/" class="header-logo--small">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-light.png" alt="" class="header-logo--light" />
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png" alt="" class="header-logo--dark" />
					</a>
					<div class="header-slogan">
						<span>Аутсорсинг и
							<br> лизинг персонала</span>
					</div>
					<div class="header-time">
						<div class="header-time__el"><?=get_field('contact_time-one', 'option');?></div>
						<div class="header-time__el"><?=get_field('contact_time-two', 'option');?></div>
					</div>
					<!-- <a href="tel:<?=get_field('contact_phone', 'option');?>" class="header-contact"> -->
						<div class="header-contact">
							<div class="header-contact__phone">
									<a href="tel:8 (495) 401-73-76" class="call_phone_1">

									</a>
							</div>
							<a href="mailto:<?= get_field('contact_mail', 'option'); ?> "class="header-contact__mail"><?= get_field('contact_mail', 'option'); ?></a>
						</div>
					<!-- </a> -->
					<a href="#" class="header-call btn--light get-modal-order">Позвонить нам</a>
					<div class="header-nav__toggle">
						<div class="header-nav__toggle-el">
							<svg class="icon">
								<use xlink:href="#menu"></use>
							</svg>
						</div>
					</div>
				</div>
				<div class="header-nav__wraper">
		
					<div class="header-nav">

						<?php if ($menu_items = wp_get_nav_menu_items('main')): ?>
								<?php foreach ((array) $menu_items as $key => $menu_item ): ?>

									<?php if($menu_item->object_id!='34'): ?>
									<div class="header-nav__el">
										<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
									</div>
									<?php else: ?>
										<div class="header-nav__el header-nav__el-level header-nav__el-service">
											<a href="/uslugi/">Услуги</a>
											<svg class="icon">
												<use xlink:href="#arrow-down"></use>
											</svg>
											<div class="header-nav__el-sub">
												<div class="header-nav__el-sub-col">
													<div class="header-nav__el-sub-title">Разовые</div>
														 <?
															$args = array(
															'cat'=> 9,
															'orderby' => 'date', 
															'order' => 'ASC'
															);
														?>
														<? query_posts($args);?>
														<? while (have_posts()) : the_post(); ?>
																<div class="header-nav__el-sub-el">
																	<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
																</div>
														<? endwhile; ?> 
														<? wp_reset_query();?> 
												</div>
												<div class="header-nav__el-sub-col">
													<div class="header-nav__el-sub-title">Постоянные</div>
													 <?
														$args = array(
														'cat'=>10,
														'orderby' => 'date', 
														'order' => 'ASC'
														);
													?>
													<? query_posts($args);?>
													<? while (have_posts()) : the_post(); ?>
															<div class="header-nav__el-sub-el">
																<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
															</div>
													<? endwhile; ?> 
													<? wp_reset_query();?> 
												</div>
											</div>
										</div>
									<?php endif ?>
								<?php endforeach ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>