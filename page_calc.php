<?
/*
Template Name: Calc
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
			<div class="container container--calc">
				<!--block calc-->
				<div class="calc-wraper">
					<div class="calc__row">
						<div class="calc__type">Специальность</div>
						<div class="calc__value">
							<select style="width:100%" class="calc-name-pers">
								 <?
									$args = array(
									'cat'=> 7,
									'orderby' => 'date', 
									'order' => 'ASC'
									);
								?>
								<? query_posts($args);?>
								<? while (have_posts()) : the_post();?>
										<option data-cost="<?=get_field('pay');?>"><?=get_the_title(); ?> <?=get_field('pay');?></option>
								<? endwhile; ?> 
								<? wp_reset_query();?> 
							</select>
						</div>
					</div>
					<!-- <div class="calc__row">
						<div class="calc__type">Количество персонала</div>
						<div class="calc__value">
							<select style="width:100%" class="calc-number-pers">
								<option value="2">1 - 3</option>
								<option value="7">5 - 10</option>
								<option value="15">10 - 20</option>
								<option value="30">20 - 40</option>
								<option value="70">40 - 100</option>
							</select>
							<input type="text" name="">
						</div>
					</div> -->
					<!-- <div class="calc__row">
						<div class="calc__type">Пол</div>
						<div class="calc__value">
							<label class="style-label style-label--checkbox">
								<input type="radio" name="Sex" class="sytle-input" />
								<div class="sytle-input-element">
									<svg class="icon-check">
										<use xlink:href="#checked"></use>
									</svg>
								</div>
								<div class="sytle-input-text">Мужской</div>
							</label>
							<label class="style-label style-label--checkbox">
								<input type="radio" name="Sex" class="sytle-input" />
								<div class="sytle-input-element">
									<svg class="icon-check">
										<use xlink:href="#checked"></use>
									</svg>
								</div>
								<div class="sytle-input-text">Женский</div>
							</label>
							<label class="style-label style-label--checkbox">
								<input type="radio" name="Sex" class="sytle-input" />
								<div class="sytle-input-element">
									<svg class="icon-check">
										<use xlink:href="#checked"></use>
									</svg>
								</div>
								<div class="sytle-input-text">Не имеет значения</div>
							</label>
						</div>
					</div> -->
					<!-- <div class="calc__row">
						<div class="calc__type">Количество часов в смену</div>
						<div class="calc__value">
							<select style="width:100%" class="calc-number-hour">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</div>
					</div>
					<div class="calc__row">
						<div class="calc__type">Количество рабочих дней в неделю</div>
						<div class="calc__value">
							<select style="width:100%" class="calc-number-days">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select>
						</div>
					</div> -->
					<div class="calc__row">
						<div class="calc__type">Общежитие предоставляется</div>
						<div class="calc__value">
							<label class="style-label style-label--checkbox">
								<input type="radio" name="Home" class="sytle-input" checked value="10"/>
								<div class="sytle-input-element">
									<svg class="icon-check">
										<use xlink:href="#checked"></use>
									</svg>
								</div>
								<div class="sytle-input-text">Исполнитель</div>
							</label>
							<label class="style-label style-label--checkbox">
								<input type="radio" name="Home" class="sytle-input" value="0"/>
								<div class="sytle-input-element">
									<svg class="icon-check">
										<use xlink:href="#checked"></use>
									</svg>
								</div>
								<div class="sytle-input-text">Заказчик</div>
							</label>
						</div>
					</div>
					<div class="calc__row">
						<div class="calc__type">Трансфер до объекта предоставляется</div>
						<div class="calc__value">
							<label class="style-label style-label--checkbox">
								<input type="radio" name="travel" class="sytle-input" checked value="10"/>
								<div class="sytle-input-element">
									<svg class="icon-check">
										<use xlink:href="#checked"></use>
									</svg>
								</div>
								<div class="sytle-input-text">Исполнитель</div>
							</label>
							<label class="style-label style-label--checkbox">
								<input type="radio" name="travel" class="sytle-input"  value="0"/>
								<div class="sytle-input-element">
									<svg class="icon-check">
										<use xlink:href="#checked"></use>
									</svg>
								</div>
								<div class="sytle-input-text">Заказчик</div>
							</label>
							<label class="style-label style-label--checkbox">
								<input type="radio" name="travel" class="sytle-input" value="0"/>
								<div class="sytle-input-element">
									<svg class="icon-check">
										<use xlink:href="#checked"></use>
									</svg>
								</div>
								<div class="sytle-input-text">Не требуется</div>
							</label>
						</div>
					</div>
					<div class="calc__row">
						<div class="calc__type">Территория</div>
						<div class="calc__value">
							<label class="style-label style-label--checkbox">
								<input type="radio" name="position" class="sytle-input" checked value="10"/>
								<div class="sytle-input-element">
									<svg class="icon-check">
										<use xlink:href="#checked"></use>
									</svg>
								</div>
								<div class="sytle-input-text">Москва</div>
							</label>
							<label class="style-label style-label--checkbox">
								<input type="radio" name="position" class="sytle-input" value="0"/>
								<div class="sytle-input-element">
									<svg class="icon-check">
										<use xlink:href="#checked"></use>
									</svg>
								</div>
								<div class="sytle-input-text">Московская область</div>
							</label>
						</div>
					</div>
					<div class="calc__row">
						<div class="calc__type">Мед.книжки работникам</div>
						<div class="calc__value">
							<label class="style-label style-label--checkbox">
								<input type="radio" name="helf" class="sytle-input" checked value="10"/>
								<div class="sytle-input-element">
									<svg class="icon-check">
										<use xlink:href="#checked"></use>
									</svg>
								</div>
								<div class="sytle-input-text">Да</div>
							</label>
							<label class="style-label style-label--checkbox">
								<input type="radio" name="helf" class="sytle-input"  value="0"/>
								<div class="sytle-input-element">
									<svg class="icon-check">
										<use xlink:href="#checked"></use>
									</svg>
								</div>
								<div class="sytle-input-text">Нет</div>
							</label>
						</div>
					</div>
				</div>
				<div class="calc-total"> 
				<span></span> руб/час
					<div class="calc-total-text">
						расчетная стоимость услуги
					</div>
				</div>
				<!-- <div class="calc-get">
					<div class="calc-get__el">Рассчитать</div>
				</div> -->
				<div class="calc-get-contact">
					<a  href="/kontakty/"	class="calc-get__el">Получить</a>
				</div>
				<!--block calc end-->
			</div>
		</div>
	</div>
<!--block slider-pers-->
<? get_footer(); ?>