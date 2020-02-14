<?php  
/*
Template Name: Home Page
*/
?>
<?php  get_header();?>

<body>	
<header id="header">
</header>
<div id="wrapper">
<main>
<section>
	<div class="page">	
		<div class="img_box">

				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_white_3.svg" alt="">
				<div id="timer" class="container yy-box">
					<div>
						<div class="timer_title">開催まであと</div>
					</div>
				</div>
		</div>
	</div>
	
	<!-- メインのコンテンツ -->
	<div class="container">	
		<div class="row content upper-conteiner">
			<div class="sub-title">
				<p><h1>Event Photo<br>こんなことやります</h1></p>

			</div>

			<div class="col-12 slider-box">
				<!-- スライダーの記述 -->
				<div class="owl-carousel owl-theme owl-loaded col-10 margin-auto">
				    <div class="owl-stage-outer">
				        <div class="owl-stage">
				            <div class="owl-item event-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/altimet.jpg" alt="" >
				            	<div class="mask">
				            		<div class="caption">アルティメット</div>
				            	</div>
							</div>
				            <div class="owl-item event-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/tent.jpg" alt="" >
				            	<div class="mask">
				            		<div class="caption">テント展示会</div>
				            	</div>
							</div>
				            <div class="owl-item event-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/kupp.jpg" alt="" >
				            	<div class="mask">
				            		<div class="caption">KUPP</div>
				            	</div>
							</div>
				            <div class="owl-item event-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/baum.jpg" alt="" >
				            	<div class="mask">
				            		<div class="caption">バームクーヘン作り</div>
				            	</div>
							</div>
				            <div class="owl-item event-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/naturegame.jpg" alt="" >
				            	<div class="mask">
				            		<div class="caption">ネイチャーゲーム</div>
				            	</div>
							</div>
				            <div class="owl-item event-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/smork.jpg" alt="" >
				            	<div class="mask">
				            		<div class="caption">薫製教室</div>
				            	</div>
							</div>
				        </div>
				 	</div>	
				    <!-- <div class="owl-dots"> -->
<!-- 				        <div class="owl-dot active"><span></span></div> -->
<!-- 				        <div class="owl-dot"><span></span></div>
				        <div class="owl-dot"><span></span></div> -->
				    <!-- </div> -->
				</div>
			</div>
		</div>

		<div class="row content midddle-content about-tnp">
			<div class="col-sm- sub-title">
				<p><h1>神割崎感謝祭アウトドアフェスタとは？</h1></p>	
			</div>
			<div class="flex col-12 outdoor-content">
			<div class="col-sm-6 fes-discription margin-auto">
				<p>昨年から南三陸町戸倉地区にある神割キャンプ場にて開催しているイベント。</p><br>
				<p>キャンプ場を利用してくださるお客様や住民の方への感謝の気持ちをお届けするために、</p>
				<p>「食べる」「遊ぶ」「体験する」をキーワードに、地元ワインや飲食店の出店の他、KUPPやアルティメットなどの野外で遊び、ロープワークやバーバリウム作りなどの体験イベントなど、皆様に楽しんでいただけるイベントを準備しております。</p><br>
				<p><span class="yellow">そして、今年のテーマは"アウトドア"！</span></p><br>
				<p>当日はWILD-1さんによるテントの展示会も予定しています。</p>
				
				
			</div>

			<div class="tog-map col-sm-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/togura_map.png" alt="" >
			</div>

		</div>	
		</div>


			<!-- ブログコンテンツの表示 	-->
		<div class="row content blog-content">
			<div class="sub-title">
		 		<p><h1>INFOMATION<br>毎日更新中</h1></p>
		 	</div>

			<div class="col-12">
				<div class="col-10 margin-auto">
				 		<?php get_template_part('loop' , 'blog'); ?>
				 	<div class="see-more text-right text-six">
						<a href="<?php echo get_permalink( BLOG );?>"><p><i class="fas fa-map-signs"><span class="mgn-3"></span></i>SEE MORE BLOG! ブログの一覧 ▶︎</p></a>
					</div>	
				</div>
			</div>	
		</div>

	</div>			
</section>


	
</main>
<?php  get_footer();?>