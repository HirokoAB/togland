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
				<p>南三陸町戸倉エリアには、たくさんの自然の魅力があります。</p>
				<br>
				<p>豊穣の海からは天皇杯に輝く戸倉っこ牡蠣の恵みがあり、大空にはシベリアから越冬に飛来した勇猛なオオワシが舞い、川には秋サケが産卵に回遊し遡上します。</p>
				<br>
				<p>多くの方に、この豊かな自然とふれあい親しみ、そして自然から学んでもらえる場所となればと、このエリア全体をネイチャーパーク(自然公園)と称して、訪れていただく機会を作っていこうとしています。</p>
				<br>
				<p>アウトドア活動とは、自然と深くふれあえる楽しい機会。</p>
				<br>
				<p>戸倉エリアがアウトドア活動のメッカとなることが、ネイチャーパーク実現へのメインルートであって、このフェスタ・感謝祭はその力強い歩みだしになるのです。ネイチャーパークへのキックオフと位置付けて、この南三陸アウトドアフェスタ/神割崎キャンプ場感謝祭を開催します。</p>	
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