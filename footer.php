<?php wp_footer(); ?>

</div>
<!--block footer-->
<div class="footer">
    <div class="main-cont">
        <div class="footer-wraper">
            <div class="footer-nav">
                <div class="footer-nav__col footer-nav__col--menu">

                    <?php if ($menu_items = wp_get_nav_menu_items('main')): ?>
                        <?php foreach ((array)$menu_items as $key => $menu_item): ?>
                            <a href="<? echo $menu_item->url; ?>"
                               class="footer-nav__el"><? echo $menu_item->title; ?> </a>
                        <?php endforeach ?>
                    <?php endif ?>

                </div>
                <div class="footer-nav__col footer-nav__col-service">
                    <div class="footer-nav__title">Услуги</div>
                    <?
                    $args = array(
                        'cat' => array(9, 10),
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    ?>
                    <? query_posts($args); ?>
                    <? while (have_posts()) : the_post(); ?>
                        <a href="<?= get_permalink(); ?>" class="footer-nav__el"><?= get_the_title(); ?></a>
                    <? endwhile; ?>
                    <? wp_reset_query(); ?>
                </div>
                <!--  <div class="footer-nav__col footer-nav__col-keys">
               <div class="footer-nav__title">Кейсы</div>
                  <?
                $args = array(
                    'cat' => array(6),
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                ?>
               <? query_posts($args); ?>
               <? while (have_posts()) : the_post(); ?>
                 <a href="<?= get_permalink(); ?>" class="footer-nav__el"><?= get_the_title(); ?></a>
               <? endwhile; ?> 
               <? wp_reset_query(); ?>
             </div> -->
            </div>
            <div class="footer-form">
                <div class="footer-contact">
                    <div class="footer-contact__logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png" alt=""/>
                    </div>
                    <div class="footer-contact__info">
                        <div class="footer-contact__phone">
                            <a href="tel:<?= get_field('contact_phone', 'option'); ?>" class="call_phone_1"></a>
                        </div>
                        <div class="footer-contact__adr"><?= get_field('adres', 'option'); ?></div>
                    </div>
                </div>
                <div class="footer-form__wrap">
                    <form action="" id="footer-form" class="footer-form__el validate-form">
                        <input type="text" placeholder="Введите ваше имя" name="name"/>
                        <input type="text" placeholder="Введите ваш номер телефона" name="phone"/>
                        <input type="submit" value="Отправить" class="btn"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="footer-copy__text">© 2006 -2016 ООО «СервисСервис»</div>
        </div>
    </div>
</div>
<!--block footer end-->
<!--modal review-->
<div class="modal-cont modal-review">
    <div class="modal-title">Оставить отзыв</div>
    <div class="modal-title-sub">Мы будем рады узнать ваши пожелания и предложения</div>
    <svg class="modal-close">
        <use xlink:href="#close"></use>
    </svg>
    <form action="javascript:void(null);" class="validate-form">
        <input type="text" placeholder="Введите ваше имя" name="name"/>
        <textarea cols="30" rows="10" placeholder="Введите ваш комментарий" name="comment"></textarea>
        <input type="submit" value="Написать отзыв" class="btn--light"/>
    </form>
</div>

<div class="modal-cont modal-order">
    <div class="modal-title">Оставить заявку</div>
    <div class="modal-title-sub">мы быстро свяжемся с Вами</div>
    <svg class="modal-close">
        <use xlink:href="#close"></use>
    </svg>
    <form action="javascript:void(null);" class="validate-form">
        <input type="text" placeholder="Введите ваше имя" name="name"/>
        <input type="text" placeholder="Введите ваш телефон" name="phone"/>
        <input type="submit" value="Отправить" class="btn--light"/>
    </form>
</div>

<div class="modal-cont modal-true">
    <div class="modal-true-wrap">
        <svg class="icon">
            <use xlink:href="#check"></use>
        </svg>
        <div class="modal-title">Отлично!
            <br> Все получилось
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/combined.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script-edit.js"></script>
</body>

<!-- Yandex.Metrika counter -->

<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function () {
			try {

				w.yaCounter25921088 = new Ya.Metrika({
					id: 25921088,

					webvisor: true,

					clickmap: true,

					trackLinks: true,

					accurateTrackBounce: true
				});

			} catch (e) {
			}

		});
		var n = d.getElementsByTagName("script")[0],

			s = d.createElement("script"),

			f = function () {
				n.parentNode.insertBefore(s, n);
			};

		s.type = "text/javascript";

		s.async = true;

		s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";


		if (w.opera == "[object Opera]") {

			d.addEventListener("DOMContentLoaded", f, false);

		} else {
			f();
		}

	})(document, window, "yandex_metrika_callbacks");

</script>

<noscript>
    <div><img src="//mc.yandex.ru/watch/25921088" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>

<!-- /Yandex.Metrika counter -->
</html>



