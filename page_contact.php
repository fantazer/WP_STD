<?
/*
Template Name: contact
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
			<!--block contact-->
			<div class="contact">
				<div class="contact__wraper">
					<div class="contact__info">
                        <div class="contact__phone">
                            <a href="tel:<?= get_field('contact_phone', 'option'); ?>" class="call_phone_1">
                                <?= get_field('contact_phone', 'option'); ?>
                            </a>
                        </div>
						<div class="contact__text">
							<?=get_field('contact_info', 'option');?>
						</div>
					</div>
					<div class="contact__form">
						<form action="javascript:void(null);" id="contact-form" class="validate-form">
							<input type="text" placeholder="Введите ваше имя" name="name" />
							<input type="text" placeholder="Введите ваш телефон" name="phone" />
							<textarea cols="30" rows="10" placeholder="Вашe сообщение" name="text"></textarea>
							<input type="submit" value="Отправить" class="btn--light" />
						</form>
					</div>
				</div>
			</div>
			<!--block contact end-->
		</div>
	</div>
	<div class="map">
		
	<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=wkF1GhSDg4kZ3hDsyV_PPciU2OtbJsK4&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false"></script>
	</div>

	
<? get_footer(); ?>