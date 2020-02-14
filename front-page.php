<!DOCTYPE html>
<html lang="ja">
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index_style.css">
<!-- 	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/daiary.css">
	<link rel='stylesheet' id='daiary.css-css'  href='http://localhost:8080/wordpress/wp-content/themes/outdoorfes/css/daiary.css?ver=5.3.2' type='text/css' media='all' /> -->

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="keywords" content="戸倉ネイチャーパーク,南三陸町戸倉,戸倉,自然体験,遊びが学びに変わる場所,あそびがまなびにかわるばしょ,">
	<title>戸倉ネイチャーパーク</title>

</head>
<body>
	<main>
		<section>
			<div class="video_wrappar">
			
				<div class="map_container">
						<div   class="map map_base">
							<img class="base_img" style="z-index:1;"src="<?php echo get_template_directory_uri(); ?>/img/map_base_1.svg" usemap="#tgitem" alt="戸倉ネイチャーパークトップページに表示する地図のベース画像" />
						</div>
						<div  type="image/svg+xml" class="map map eagle shake">
							<img class=""src="<?php echo get_template_directory_uri(); ?>/img/map_eagle.svg" alt="戸倉ネイチャーパークトップページに表示しているサイトオオワシのイラスト">	
						</div>
						<div  type="image/svg+xml" class="map keybox flash" id="">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/img/map_keybox.svg" usemap="#tgitem" alt="" />
						</div>
			</div>
			<map name="tgitem">


		<area onFocus="this.blur();" shape="rect" coords="55,51,86,72"　href="https://www.tamipack.jp/" alt="たみ子の海パックホームページへ遷移" target="_blank" />
		<area onFocus="this.blur();" shape="rect" coords="" href="#" alt="釣り体験" target="_blank" />
		<area onFocus="this.blur();" shape="rect" coords="110,110,147,130" href="https://o-eels.org/" alt="おきなくらイールズホームページへ遷移" target="_blank" />
		<area onFocus="this.blur();" shape="rect" coords="100,81,142,108" href="####" alt="漁業体験" target="__blank" />
		<area onFocus="this.blur();" shape="rect" coords="155,52,194,75" href="https://www.town.minamisanriku.miyagi.jp/index.cfm/8,0,39,390,html" alt="南三陸町ネイチャーセンターホームページへ遷移" target="_blank" />
		<area onFocus="this.blur();" shape="rect" coords="143,29,175,49" href="https://www.facebook.com/yamagakko/" alt="波伝の森山学校ホームページへ遷移" target="_blank" />
		<area onFocus="this.blur();" shape="rect" coords="100,81,142,108"ss href="http://kawatouminovisitorcenter.jp/umi/index.html" alt="海のビジターセンターホームページへ遷移" target="_blank" />
		<area onFocus="this.blur();" shape="rect" coords="12,45,53,86"　href="https://www.m-kankou.jp/kamiwari-camp/" alt="神割キャンプ場ホームページへ遷移" target="_blank" />
		<area onFocus="this.blur();" shape="rect" coords="88,38,119,60" href="https://www.pref.miyagi.jp/soshiki/sz-seinen/" alt="志津川自然の家ホームページへ遷移" target="_blank" />
		<area onFocus="this.blur();" shape="rect" coords="3,104,52,148" href="<?php echo get_permalink( HOME );?> "alt="" target="_blank"/>
			</map>
					
		</div>
			

			</div>
	</section> 
	</main>

<script src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.rwdImageMaps.min.js"></script>
<script>

$('img[usemap]').rwdImageMaps();
    
</script>

</body>

