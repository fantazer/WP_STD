<?get_header();?>

		<!--block slider-pers-->
		<? include('include/slider-personal.php');?>
		<!--block slider-pers end-->
		<div class="main-cont">
			<!--container-map-->
			<div class="container-map">
				<div class="container-map__el">
					<div class="container-map__title">Мы работаем с клиентами по всей России</div>
				</div>
				<div class="container-map__rewards">
					<!--block reward-->
					<? include('include/reward.php');?>
					<!--block reward end-->
				</div>
			</div>
			<!--container-map-->
		</div>
			<!--block slider-clients-->
			<? include('include/clients.php');?>
			<!--block slider-clients end-->
			
		<div class="main-cont">
			<!--container-review-->
			<div class="container-review-news">
				<div class="container-review-news__el-review">
					<!--block slider-review-->
					<? include('include/slider-review.php');?>
					<!--block slider-review end-->
				</div>
				<div class="container-review-news__el-news">
					<div class="container__news">
						<!--block news-el-->
					  <?
						 	$args = array(
							 	'cat'=> 5,
							 	'posts_per_page' => 3,
							 	'orderby' => 'date', 
							 	'order' => 'DESC'
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
						 <? wp_reset_query();?> 
					</div>
				</div>
			</div>
			<!--container-review-->
		</div>

		<div class="main-cont">
			<!--block advant-->
			<!-- <div class="advant">
				<div class="advant__col advant__col--bad">
					<div class="advant__col-title">Собственный персонал</div>
					<div class="advant__row">
						<div class="advant__wraper">
							<div class="advant__cont">
								<div class="advant__title">Снижение рисков:</div>
								<div class="advant__list">
									<div class="advant__list-el">Саботаж </div>
									<div class="advant__list-el">Материальная ответственность </div>
									<div class="advant__list-el">Юридческая ответственность </div>
								</div>
							</div>
							<div class="advant__icon">
								<svg class="icon">
									<use xlink:href="#cancel"></use>
								</svg>
							</div>
						</div>
					</div>
					<div class="advant__row">
						<div class="advant__wraper">
							<div class="advant__cont">
								<div class="advant__title">Стоимость:</div>
								<div class="advant__list">
									<div class="advant__list-el">30000 оклад </div>
									<div class="advant__list-el">4000+7000 НДФЛ+ЕСН </div>
									<div class="advant__list-el">300 форма </div>
								</div>
							</div>
							<div class="advant__icon">
								<svg class="icon">
									<use xlink:href="#cancel"></use>
								</svg>
							</div>
						</div>
					</div>
					<div class="advant__row">
						<div class="advant__wraper">
							<div class="advant__cont">
								<div class="advant__title">Скорость поиска персонала:</div>
							</div>
							<div class="advant__icon">
								<svg class="icon">
									<use xlink:href="#cancel"></use>
								</svg>
							</div>
						</div>
					</div>
					<div class="advant__row">
						<div class="advant__wraper">
							<div class="advant__cont">
								<div class="advant__title">Качество и замена сотрудника:</div>
							</div>
							<div class="advant__icon">
								<svg class="icon">
									<use xlink:href="#cancel"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="advant__col advant__col--good">
					<div class="advant__col-title">Заемный персонал</div>
					<div class="advant__row">
						<div class="advant__wraper">
							<div class="advant__cont">
								<div class="advant__title">Снижение рисков:</div>
								<div class="advant__list">
									<div class="advant__list-el">Саботаж </div>
									<div class="advant__list-el">Материальная ответственность </div>
									<div class="advant__list-el">Юридческая ответственность </div>
								</div>
							</div>
							<div class="advant__icon">
								<svg class="icon">
									<use xlink:href="#check"></use>
								</svg>
							</div>
						</div>
					</div>
					<div class="advant__row">
						<div class="advant__wraper">
							<div class="advant__cont">
								<div class="advant__title">Стоимость: 35000 рублей </div>
							</div>
							<div class="advant__icon">
								<svg class="icon">
									<use xlink:href="#check"></use>
								</svg>
							</div>
						</div>
					</div>
					<div class="advant__row">
						<div class="advant__wraper">
							<div class="advant__cont">
								<div class="advant__title">Скорость поиска персонала:</div>
							</div>
							<div class="advant__icon">
								<svg class="icon">
									<use xlink:href="#check"></use>
								</svg>
							</div>
						</div>
					</div>
					<div class="advant__row">
						<div class="advant__wraper">
							<div class="advant__cont">
								<div class="advant__title">Качество и замена сотрудника:</div>
							</div>
							<div class="advant__icon">
								<svg class="icon">
									<use xlink:href="#check"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!--block advant end-->
		
		<div class="adv-wrap">
			<div class="adv-wrap-title type--lg type--center type--bold">Работа с нами</div>
			<div class="adv-row">
				<div class="adv-title__icon">
					<svg class="icon">
						<use xlink:href="#icon-user-7"></use>
					</svg>
				</div>
				<div class="adv-content">
					<div class="adv-title"> Cрочное увеличение колва сотрудников</div>
					<div class="adv-text">Cезонное увеличение объемов,переезд предприятия или офиса,дополнительные работы, уборка урожая,смена графика работы,экспозиция,-все это требует срочного увеличения кол-ва специализированных работников.Мы предоставляем персонал тогда,когда требуется
						и столько,сколько требуется.</div>
				</div>
			</div>
			<div class="adv-row">
				<div class="adv-title__icon">
					<svg class="icon">
						<use xlink:href="#icon-user-4"></use>
					</svg>
				</div>
				<div class="adv-content">
					<div class="adv-title"> Моментальная замена в случае необходимости</div>
					<div class="adv-text">Нерадивые работники-это головная боль любой компании. Наша служба безопасности и контноля качества проводит проверку всех сотрутдиков компании,И в случае необходисти готова произвести замену любого рабочего.</div>
				</div>
			</div>
			<div class="adv-row">
				<div class="adv-title__icon">
					<svg class="icon">
						<use xlink:href="#icon-user-6"></use>
					</svg>
				</div>
				<div class="adv-content">
					<div class="adv-title"> Материальная отвественность</div>
					<div class="adv-text">Мы несем полную материальную ответственность. Работаем по системе постоплаты,что гарантирует выполнение наших обязательств.</div>
				</div>
			</div>
			<div class="adv-row">
				<div class="adv-title__icon">
					<svg class="icon">
						<use xlink:href="#jurist"></use>
					</svg>
				</div>
				<div class="adv-content">
					<div class="adv-title"> Юридическая ответственность</div>
					<div class="adv-text">Надежная работа обеспечивается сопровождем профессиональных юристов.</div>
				</div>
			</div>
			<div class="adv-row">
				<div class="adv-title__icon">
					<svg class="icon">
						<use xlink:href="#hard"></use>
					</svg>
				</div>
				<div class="adv-content">
					<div class="adv-title">Сложные и удаленные объекты работы</div>
					<div class="adv-text">Мобильные бригады предоставляются в любую точку России.</div>
				</div>
			</div>
			<div class="adv-row">
				<div class="adv-title__icon">
					<svg class="icon">
						<use xlink:href="#better"></use>
					</svg>
				</div>
				<div class="adv-content">
					<div class="adv-title">Улучшение общего качества труда </div>
					<div class="adv-text">Достигается при совместном использовании аутсорсинга и собственного персонала. При этом создается плодотворная конкуренция рабочих бригад,которая приводил к общему улучшению качества работы.</div>
				</div>
			</div>
			<div class="adv-row">
				<div class="adv-title__icon">
					<svg class="icon">
						<use xlink:href="#stable"></use>
					</svg>
				</div>
				<div class="adv-content">
					<div class="adv-title">Стабильность работы </div>
					<div class="adv-text">Работу любого отдела лучше дублировать.Это могут быть несколько аутсорсинговых компаний или совместная работа ваших и приходящих сотрудников. При этом вы будете застрахованы от любых сбоев в работе.</div>
				</div>
			</div>
		</div>
		<div class="math">
			<div class="math-title type--lg type--center type--bold type--icon">
				<div class="title-icon title-icon--orange">
					<svg class="icon">
						<use xlink:href="#calc"></use>
					</svg>
				</div>Давайте посчитаем:
			</div>
			<div class="math-wrap">
				<div class="math-cont">
					<div class="math-el">
						<div class="math-pay math-pay--bad">30 000 руб</div>
						<div class="math-el-text">Деньги, которые получает грузчик на руки, работая 8 часов 5 дней в неделю. Фактически, вместо 180, он работает 149 часов в месяц (12 дней праздничных выходных,28 дней отпуска,7 дней больничных )</div>
					</div>
					<div class="math-el">
						<div class="math-pay math-pay--bad">4482 руб</div>
						<div class="math-el-text">НДФЛ(Налог на доходы физ.лиц,13 %, статья 224,пункт 1 НК РФ)</div>
					</div>
					<div class="math-el">
						<div class="math-pay math-pay--bad">10346 руб</div>
						<div class="math-el-text">Страховые взносы 30 %( статья 12 ФЗ № 212) </div>
					</div>
					<div class="math-el">
						<div class="math-pay math-pay--bad">300 руб</div>
						<div class="math-el-text">Спецодежда(Форма, перчатки)</div>
					</div>
					<div class="math-el math-total">
						<div class="math-pay math-pay--bad">ИТОГО: 45128 руб</div>
						<div class="math-el-text">тратить на расчёт 1 рабочего в месяц.</div>
					</div>
					<div class="math-title type--lg type--center type--bold type--icon">
						<div class="title-icon title-icon--green">
							<svg class="icon">
								<use xlink:href="#price"></use>
							</svg>
						</div>Ваша выгода:
					</div>
					<div class="math-el math-total">
						<div class="math-pay math-pay--good">27714 руб</div>
						<div class="math-el-text">Стоимость наших услуг по предоставлению персонала составляет
							<br>186р/ч=27714р/месяц ( 149 часов).</div>
					</div>
				</div>
			</div>
		</div>
		<!--block numbers-->
		<div class="numbers">
			<div class="numbers__el">
				<div class="numbers__val">5984 </div>
				<div class="numbers__text">Человек трудоустроено</div>
			</div>
			<div class="numbers__el">
				<div class="numbers__val">2003 </div>
				<div class="numbers__text">Год основания нашей компании</div>
			</div>
			<div class="numbers__el">
				<div class="numbers__val">14684 </div>
				<div class="numbers__text">Квартирных и офисных переездов</div>
			</div>
			<div class="numbers__el">
				<div class="numbers__val">14 </div>
				<div class="numbers__text">Лет опыта и коммуникаций</div>
			</div>
		</div>
		<!--block numbers end-->
			
			
		<!--block two-botton-block-->
		<? include('include/two-button-block.php');?>
		<!--block two-botton-block end-->
		</div>
		
	<!-- 	<div class="main-cont">
		<div class="more-text">
			<div class="type--lg type--center type--bold">Подробнее о STD Group</div>
			<p>
				В 2015 году компании STD-GROUP исполняется 12 лет, и я хочу немного рассказать о нас, наших принципах и о том, как мы работаем.
			</p>
			<p>
				За время нашей деятельности выполнено более 10000 квартирных и офисных переездов. В нашем распоряжении 12 единиц грузового транспорта и более 250 человек, которые в любой момент могут приступить к работе на Вашем объекте.
			</p>
			<p>
				НашГлавный принцип работы нашей компании - Клиент всегда прав. Что я понимаю под этим? Профессионализм. Независимо от того, маленький клиент или большой, хороший человек или плохой. Если ты считаешь себя профессионалом, твой клиент должен остаться доволен. Мы не можем сделать все, но мы сделаем все, что в наших силах. Если можно сделать что-то лучше, мы сделаем это лучше.
			</p>
			<p>
				В нашей компании работают профессионалы. Достаточно позвонить нам, чтобы в этом убедиться. Изложите задачу, и мы предложим ее решение: будь это переезд 1-комнатной квартиры или предоставление персонала на отдаленный склад. А может быть просто консультация, как лучше упаковать чайный сервиз. Мы всегда будем рады помочь.
			</p>
			<p>
				Честность. Мне кажется, такие понятия, как честность, верность своему слову, ответственность – это качества, необходимые для успешного бизнеса (я имею в виду бизнес, основанный на производстве чего-либо, а не распространении того, что было создано до тебя). Может быть, нам повезло, но именно такими качествами обладает абсолютное большинство наших клиентов.
			</p>
			<p>
				Оперативность. В нашей работе важно оперативно реагировать на запросы, поступающие от клиентов. Это могут быть ночные разгрузки, пиковое увеличение персонала на складе или праздничное мероприятие. Не всегда можно успеть оформить все бумаги или прописать всевозможные нюансы в договоре. Однако Вы можете быть уверены, что поставленная задача будет выполнена. Это для нас приоритет.
			</p>
			<p>
				Я надеюсь, что совместными усилиями мы сможем построить общество профессионалов, где каждый будет на своем месте, где строительство дома, отделка квартиры, ремонт машины или квартирный переезд будут вызывать только приятные эмоции.
			</p>
		</div>
	</div>
		</div>
	 -->

<?get_footer();?>