<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="format-detection" content="telephone=no" />
	<!-- fav -->
	<link defer type="image/x-icon" rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/fav/favicon-16x16.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/img/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/fav/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/fav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- fav -->
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans:300,400,700&amp;amp;subset=cyrillic" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-edit.css" />


	<?php wp_enqueue_script('jquery'); ?>
	<script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
	<?php wp_head(); ?>


    <!-- calltouch code -->
    <script type="text/javascript">
    (function (w, d, nv, ls, yac){
        var lwait = function (w, on, trf, dly, ma, orf, osf) { var pfx = "ct_await_", sfx = "_completed";  if(!w[pfx + on + sfx]) { var ci = clearInterval, si = setInterval, st = setTimeout , cmld = function () { if (!w[pfx + on + sfx]) {  w[pfx + on + sfx] = true; if ((w[pfx + on] && (w[pfx + on].timer))) { ci(w[pfx + on].timer);  w[pfx + on] = null;   }  orf(w[on]);  } };if (!w[on] || !osf) { if (trf(w[on])) { cmld();  } else { if (!w[pfx + on]) { w[pfx + on] = {  timer: si(function () { if (trf(w[on]) || ma < ++w[pfx + on].attempt) { cmld(); } }, dly), attempt: 0 }; } } }   else { if (trf(w[on])) { cmld();  } else { osf(cmld); st(function () { lwait(w, on, trf, dly, ma, orf); }, 0); } }}};
        var ct = function (w, d, e, c, n){ var a = 'all', b = 'tou', src = b + 'c' + 'h';  src = 'm' + 'o' + 'd.c' + a + src;  var jsHost = "https://" + src, p = d.getElementsByTagName(e)[0], s = d.createElement(e); var jsf = function (w, d, p, s, h, c, n, yc) { if (yc !== null) { lwait(w, 'yaCounter'+yc, function(obj) { return (obj && obj.getClientID ? true : false); }, 50, 100, function(yaCounter) { s.async = 1; s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (yaCounter  && yaCounter.getClientID ? "ya_client_id" + yaCounter.getClientID() + ";" : "") + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":170523}") + ";";p.parentNode.insertBefore(s, p); }, function (f) { if(w.jQuery) {  w.jQuery(d).on('yacounter' + yc + 'inited', f ); }}); } else { s.async = 1; s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":170523}") + ";"; p.parentNode.insertBefore(s, p);}}; if (!w.jQuery) { var jq = d.createElement(e); jq.src = jsHost + "." + "r" + 'u/js/jquery-1.7.min.js'; jq.onload = function () { lwait(w, 'jQuery', function(obj) { return (obj ? true : false); }, 30, 100, function () { jsf(w, d, d.getElementsByTagName(e)[0], s, jsHost, c, n, yac);  }); }; p.parentNode.insertBefore(jq, p);  } else { jsf(w, d,  p, s, jsHost, c, n, yac); }};
        var gaid = function (w, d, o, ct, n) { if (!!o) { lwait(w, o, function (obj) {  return (obj && obj.getAll ? true : false); }, 200, (nv.userAgent.match(/Opera|OPR\//) ? 10 : 20), function (gaCounter) { var clId = null; try {  var cnt = gaCounter && gaCounter.getAll ? gaCounter.getAll() : null; clId = cnt && cnt.length > 0 && !!cnt[0] && cnt[0].get ? cnt[0].get('clientId') : null; } catch (e) { console.warn("Unable to get clientId, Error: " + e.message); } ct(w, d, 'script', clId, n); }, function (f) { w[o](function () {  f(w[o]); })});} else{ ct(w, d, 'script', null, n); }};
        var cid  = function () { try { var m1 = d.cookie.match('(?:^|;)\\s*_ga=([^;]*)');if (!(m1 && m1.length > 1)) return null; var m2 = decodeURIComponent(m1[1]).match(/(\d+\.\d+)$/); if (!(m2 && m2.length > 1)) return null; return m2[1]} catch (err) {}}();
        if (cid === null && !!w.GoogleAnalyticsObject){
            if (w.GoogleAnalyticsObject=='ga_ckpr') w.ct_ga='ga'; else w.ct_ga = w.GoogleAnalyticsObject;
            if (typeof Promise !== "undefined" && Promise.toString().indexOf("[native code]") !== -1){new Promise(function (resolve) {var db, on = function () {  resolve(true)  }, off = function () {  resolve(false)}, tryls = function tryls() { try { ls && ls.length ? off() : (ls.x = 1, ls.removeItem("x"), off());} catch (e) { nv.cookieEnabled ? on() : off(); }};w.webkitRequestFileSystem ? webkitRequestFileSystem(0, 0, off, on) : "MozAppearance" in d.documentElement.style ? (db = indexedDB.open("test"), db.onerror = on, db.onsuccess = off) : /constructor/i.test(w.HTMLElement) ? tryls() : !w.indexedDB && (w.PointerEvent || w.MSPointerEvent) ? on() : off();}).then(function (pm){
                if (pm){gaid(w, d, w.ct_ga, ct, 2);}else{gaid(w, d, w.ct_ga, ct, 3);}})}else{gaid(w, d, w.ct_ga, ct, 4);}
        }else{ct(w, d, 'script', cid, 1);}})
    (window, document, navigator, localStorage, "{идентификатор счётчика Метрики}");
    </script>
    <!-- /calltouch code -->

</head>
<!--Include style-->

<body>
	<div class="wraper-general">
		<!--block baner-->
		<div class=" <? if( is_home() ){ ?> baner<?}?>">
			
				<!--block header-->
				<? include('include/top-menu.php');?>
				<!--block header end-->

			<? if( is_home() ){?>
				<? include('include/main-page__slider.php');?>
			<?}?>
		</div>
		<div class="container-general">
		<!--block baner end-->



 