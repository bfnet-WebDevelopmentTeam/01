<?php
/*
Template Name: page
*/

$sidebar_pos = sydney_sidebar_position();

//Get classes for main content area
if ( apply_filters( 'sydney_disable_cart_checkout_sidebar', true ) && class_exists( 'WooCommerce' ) && ( is_checkout() || is_cart() ) ) {
	$width = 'col-md-12';
} else {
	$width = 'col-md-9';
}
?>
<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	
<?php wp_head(); ?>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/stellarnav.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/common.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5MNQL7H');</script>
<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) --> 
	<script async src="https://www.googletagmanager.com/gtag/js?id=GG7KEEM8ZB5"></script> 
	<script> window.dataLayer = window.dataLayer || []; function
gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-G7KEEM8ZB5');
</script>

</head>

<body <?php body_class(); ?> <?php sydney_do_schema( 'html' ); ?>>

<span id="toptarget"></span>

<?php wp_body_open(); ?>

<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<!--?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ? -->	

	<!-- ?php do_action( 'sydney_header' ); ? -->

	<!-- ?php do_action('sydney_after_header'); ? -->

	<div class="sydney-hero-area">
		<?php sydney_slider_template(); ?>
		<div class="header-image">
			<?php sydney_header_overlay(); ?>
			<?php if ( ( get_theme_mod('front_header_type','nothing') == 'image' && is_front_page() ) || (get_theme_mod('site_header_type') == 'image' && !is_front_page() ) ) : ?>
				<?php $shop_thumb = get_the_post_thumbnail_url( get_option( 'woocommerce_shop_page_id' )); ?>
				<?php if ( class_exists( 'Woocommerce' ) && is_shop() && !$shop_thumb  ) : ?>
					<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<?php sydney_header_video(); ?>

		<?php do_action('sydney_inside_hero'); ?>
	</div>

	<!-- ?php do_action('sydney_after_hero'); ? -->

<header class="pc">
  <div id="header_top" class="pc">
    <div class="top_navi pc">
      <div class="top_logo"><a href="https://onecoin-study.net/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/onecoin_logo.png?0601" alt=""></a></div>
      <ul>
				<li ><a href="https://onecoin-study.net/cart/?plan=1054" target="_parent"><span>会員登録</span></a></li>		 
			   <!--<li><a href="https://onecoin-study.net/examinfo/" target="_parent"><span>試験情報</span></a></li>-->
				<li><a href="https://onecoin-study.net/qna" target="_parent"><span>よくある質問</span></a></li>
				<li><a href="https://onecoin-study.net/notice/" target="_parent"><span>利用規約</span></a></li>

				<li><a href="https://bf-net.jp/onecoin-test/course/" target="_parent"><span>コース</span></a></li>				
				<li><a href="https://onecoin-study.net/contact-logout/" target="_parent"><span>お問い合わせ</span></a></li>
				<li><?php echo do_shortcode("[wpmem_loginout]"); ?></li>

      </ul>
    </div><!-- .stellarnav -->
  </div>
</header>


<div id="main-v">
  <div class="main_imgsp">
    <div class="main_imgsp_box01">
      <h2>独立・転職。収入UPに<br>宅建士がおすすめ！</h2>
		<h3 class="main_imgsp_txt01">月々500円<span>※税込み550円</span></h3>
		<h3 class="main_imgsp_txt02">だから気軽に始められる！<br>定額制動画学習サイト！</h3>

    </div>
    <div  class="main_imgsp_box02">
      <ul>
		  <li><a href="../jobinfo" target="_parent">宅建とは？</a></li>
		  <li><a href="../recommend">こんな人<br>にオススメ！</a></li>
      </ul>
    </div>
  </div><!-- end main_imgsp -->
  <div class="main_imgpc">
    <div class="main_imgpc_box01">
      <div class="imgpc_box01_inner01">
        <h2 class="main_imgpc_txt01">独立・転職。収入UPに<br>宅建士がおすすめ！</h2>
        <h2 class="main_imgpc_txt02">月々500円<span>※税込み550円</span></h2>
		  <p class="main_imgpc_txt03">だから気軽に始められる！<br>定額制動画学習サイト！</p>
      </div><!--end  imgpc_box01_inner01-->
    </div><!-- end main_imgpc_box01 -->    
  </div> <!-- end main_imgpc -->
  
  <div class="main_txtpc">
    <div class="main_txtpc_box01">
  <video id="player" controls autoplay muted>
    <source src="https://onecoin-study.net/wp-content/uploads/2023/05/onecoin_pv.mp4" type="video/mp4" />
  </video>
	  </div>
    <div class="main_txtpc_box02">
      <div class="txtpc_box02_inner01">
        <h3 class="txtpc_box02_inner01_txt01"><a href="../jobinfo" target="_parent">宅建とは？</a></h3>
        <h3 class="txtpc_box02_inner01_txt02"><a href="../recommend" target="_parent">こんな人に<br>オススメ！</a></h3>
      </div>
      <div class="txtpc_box02_inner02">
        <h3>今だけ講義無料!</h3>
        <p>※会員登録後可能※3つの講義まで</p>        
      </div>
      <div class="txtpc_box02_inner03">
        <p><a href="https://onecoin-study.net/cart/?plan=1054" target="_parent">会員登録</a></p>        
      </div>
    </div>
  </div>
</div><!-- end main-v -->

<article>
  <div id="top_box01" class="sp">
    <div class="box01_inner01">
		  <video id="player" controls autoplay muted>
    <source src="https://onecoin-study.net/wp-content/uploads/2023/05/onecoin_pv.mp4" type="video/mp4" />  </video>
	  </div>
    <div class="box01_inner02"><a href="https://onecoin-study.net/cart/?plan=1054">会員登録</a></div>
  </div><!--end ID top_box01-->
  
  <div id="top_box02" class="box_bg01">
    <div class="box02_inner01">
      <h2 class="box02_inner01_txt01">思い立ったら学習開始！</h2>
      <h2 class="box02_inner01_txt02">講座内容</h2>
    </div><!-- end box02_inner02 -->

    <div class="box02_inner02">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_001.png" alt="講座内容">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_002.png" alt="講座内容">
      <a href="#top_box08" target="_parent"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_003.png?0526" alt="講座内容"></a>
    </div><!-- end box02_inner02 -->
  </div><!-- end ID top_box02 -->

  <div id="top_box03" class="box_bg02">
    <div class="box02_inner01">
      <h2 class="box02_inner01_txt01">思い立ったら学習開始！</h2>
      <h2 class="box02_inner01_txt02">講座内容</h2>
    </div>
    <div class="box02_inner03">
      <div class="box03_inner03_txt01">1.安い</div>
      <div class="box03_inner03_txt02"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_004.png" alt="onecoin宅建講座では、月々500円で始められます！気軽に始められてシッカリ身につく宅建士講座です。"></div>
      <div class="box03_inner03_txt03"><p>onecoin宅建講座では、月々500円で始められます！気軽に始められてシッカリ身につく宅建士講座です。</p></div>
    </div><!-- end box02_inner03 -->

    <div class="box02_inner03">
      <h3 class="box03_inner03_txt04">2.分かりやすい</h3>
      <div class="box03_inner03_txt05"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_005.png" alt="onecoin宅建講座では、通勤や休憩時間のちょっとした隙間時間を有効活用！どこでもスマホで手軽に学習できます"></div>
      <div class="box03_inner03_txt06"><p>Onecoin宅建講座では表や図解でわかりやすく解説！宅建合格はもちろん知識レベルでの学習にも最適です！</p></div>
    </div><!-- end box02_inner03 -->

    <div class="box02_inner03">
      <h3 class="box03_inner03_txt01">3.知識0でもわかりやすく学習できます。</h3>
      <div class="box03_inner03_txt02"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_006.png" alt="初学者でもわかりやすく学べる"></div>
      <div class="box03_inner03_txt03">
        <p>暗記に頼らず理解を深める事を意識した講義内容で知識0でもしっかり学習できます！<br>
宅建合格を目指している方も実務レベルで知識を得たい方もしっかり学習できる！</p>
      </div>
    </div><!-- end box02_inner03 -->

    <div class="box02_inner03">
      <h3 class="box03_inner03_txt04">	4.効率的な問題演習</h3>
      <div class="box03_inner03_txt05"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_007.png" alt="効率的な問題演習"></div>
      <div class="box03_inner03_txt06"><p>onecoin宅建講座では、動画講義でインプットした後は演習問題で理解できているか確認！できなかった部分は何度でも自分のペースで繰り返し学習ができるのでしっかり知識が身につきます！</p></div>
    </div><!-- end box02_inner03 -->

    <div class="box02_inner03">
      <h3 class="box03_inner03_txt01">5.時間の有効活用</h3>
      <div class="box03_inner03_txt02"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_008.png" alt="時間の有効活用"></div>
      <div class="box03_inner03_txt03"><p>宅建合格は勉強時間200～300時間が平均といわれています。隙間時間を有効活用しながら自分のペースで効率的に学習できます。</p></div>
    </div><!-- end box02_inner03 -->
  </div><!-- end top_box03 -->
  
  <div id="top_box04">
    <div class="box04_inner01">onecoin宅建講座</div>
    <div class="box04_inner02">
		<a href="https://onecoin-study.net/cart/?plan=1054" target="_blank">まずは無料講義を<br>見る会員登録</a>
	  </div>
  </div><!-- end top_box04 -->
  
  <div id="top_box05">
    <div class="box05_inner01">
      <h3>料金について</h3>
      <p>動画見放題!!</p>
    </div><!-- end box05_inner01 -->

    <div class="box05_inner02">
      <a href="https://onecoin-study.net/membership/onecoin/?add-to-cart=1399">
		  <img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_009.png" alt=""></a>
		<a href="https://onecoin-study.net/membership/premium/">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_010.png?0614" alt="" ></a>
    </div><!-- end box05_inner01 -->

<div class="popup_layer" id="popup_layer" style="display: none;">
  <div class="popup_box">
      <div class="popup_cont">
          <p>プレミアコース準備中！<br>6月13日にリリース予定！javascript:openPop()</p>
      </div>
      <div class="popup_btn" style="float: bottom;">
          <a href="javascript:closePop();">Close</a>
      </div>
  </div>
</div>


  </div><!-- end top_box05 -->
  
  <div id="top_box06" class="box_bg03">
    <div class="box06_inner01">
      <div class="box06_inner01_txt01">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_011.png" alt="one coin">
        <h2>onecoin宅建講座が<br>選ばれる理由</h2>
      </div>
      <div class="box06_inner01_txt02">
        <table>
          <tr>
			  <td rowspan="3" class="top_table_td01"><p>繰り返す</p></td>
            <td class="top_table_td02">
              <div class="box06_table01">
                <h3>オンライン講義視聴</h3>
                <ul>
                  <li><img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_flow01.png" alt="オンライン講義視聴" class="img01"></li>
                  <li><p>講義動画は図やイラストでわかりやすく何度でも視聴可能なので要点だけを抑えて学習したい、じっくり知識を身に着けたいなどそれぞれのスタイルに合わせて学習していただけます。</p></li>
                </ul>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/arr03.png" alt="" class="img02">
              </div>
            </td>
          </tr><!-- tr01-->
          <tr>
            <td>
              <div class="box06_table01">
                <h3>問題を解く</h3>
                <ul>
                  <li><img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_flow02.png" alt="問題を解く" class="img01"></li>
                  <li><p>講義動画だけではなく練習問題もあるので学んだ内容をすぐに確認でき何度でも復習できるのでしっかり知識を身に着ける事が出来ます。</p></li>
                </ul>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/arr03.png" alt="" class="img02">
              </div>
            </td>
          </tr><!-- tr 02 -->
          <tr>
            <td>
              <div class="box06_table01">
                <h3>宅地建物取引士試験対策</h3>
                <ul>
                  <li><img src="<?php echo get_stylesheet_directory_uri() ?>/img/top_flow03.png" alt="宅地建物取引士試験対策" class="img01"></li>
                  <li><p>宅建試験に向け過去に出題された過去問での学習が可能です。試験に向け過去問も反復して学習ができるため試験対策もばっちり行えます。</p></li>
                </ul>
              </div>
            </td>
          </tr><!-- tr 03 -->
        </table>
      </div>
    </div>
  </div>
  
  <div id="top_box07">
    <div class="box07_inner01">
      <h2>ご利用者の声</h2>
      <ul>
        <li><img src="<?php echo get_stylesheet_directory_uri() ?>/img/vice_01.png" alt="ご利用者の声"></li>
        <li><img src="<?php echo get_stylesheet_directory_uri() ?>/img/vice_02.png" alt="ご利用者の声"></li>
        <li><img src="<?php echo get_stylesheet_directory_uri() ?>/img/vice_03.png" alt="ご利用者の声"></li>
        <li><img src="<?php echo get_stylesheet_directory_uri() ?>/img/vice_04.png" alt="ご利用者の声"></li>
      </ul>
    </div><!-- end box07_inner01 -->
  </div><!-- end top_box07 -->

  <div id="top_box04">
    <div class="box04_inner01">onecoin宅建講座</div>
    <div class="box04_inner02">
		<a href="https://onecoin-study.net/cart/?plan=1054" target="_blank">まずは無料講義を<br>見る会員登録</a>
	  </div>
  </div><!-- end top_box04 -->
  
  <div id="top_box08">
    <div class="box08_inner01">
      <h2>宅建(宅地建物取引士)の<br>資格情報</h2>
      <p>宅建士は、不動産会社が公正な不動産取引をおこなうため、宅地建物取引業法により定められた国家資格です。正式名称を宅地建物取引士といいます。</p>
      <p>業務独占資格でもあり、不動産取引における重要事項の説明や、重要事項説明書への記名・押印、契約書への記名・押印ができるのは宅建士だけです。</p>
      <p>試験の合格率は約15％~17%です。<br>初心者の方でも講座の受講などで合格に近付けます。</p>
      <p>受験資格はなく、どなたでも試験を受けられます。<br>毎年、約20万人が受験している人気の資格です。</p>

		<div class="examinfo_box01_inner02">
			<h3>令和5年度宅建スケジュール</h3>
			<p class="info_txt">ネット申込：令和5年7月1日(土)9時30分〜7月18日(火)21時59分まで(予定)<br>
			郵送申込：令和5年7月1日(土)〜7月28日(金)まで(予定)<br>
			申込書類は、大きめの書店や都道府県の役所に置かれます。<br>
			受験手数料：8,200円<br>
<span>※いったん振り込まれた受験手数料は、申込みが受付されなかった場合及び試験中止の場合を除き、返還しません。</span><br>

<span>※受験手数料について　消費税及び地方消費税は非課税です。</span><br>
受験申込の受付完了と試験会場の通知：<br>
受付完了した方へ、試験会場通知(試験会場の所在地及び会場名を記載したはがき）を8月25日までに発送します。<br>

<span>※「試験会場通知」が8月30日までに届かない場合は、各都道府県の協力機関に必ずお問い合わせください。</span><br>

受験票発送日：令和5年9月27日(水)<br>
<span>※「受験票」が10月5日までに届かない場合は、各都道府県の協力機構にお問い合わせください。</span><br>

試験日時：令和5年10月15日(日)13時から15時まで（2時間）<br>
登録講習修了者は、13時10分から15時まで（1時間50分）。<br>
<span>※ 当日は、受験に際しての注意事項の説明がありますので、12時30分までに自席に着席してください。<br>
※ 試験時間中の途中退出はできません。 途中退出した場合は棄権又は不正受験とみなし、採点しません。</span><br>
合格発表：
令和5年11月21日(火)</p>
		</div><!-- end examinfo_box01_inner02-->

		<div class="examinfo_box01_inner02">
			<h3>宅建試験申し込み詳細</h3>
			<p class="info_txt">宅建試験のお申込みに関しては下記サイトにてご確認ください。<br>一般財団法人 不動産適正取引推進機構<br>TEL 03-3435-8111<br>受付時間9:30～17:30<br>土日祝・年末年始をのぞく<br><br>
				<a href="http://www.retio.or.jp/index.html" target="_blank" rel="noopener">http://www.retio.or.jp/index.html</a></p>
		</div><!-- end examinfo_box01_inner02-->

    </div><!-- end box08_inner02 -->

    <div class="box08_inner02">
      <ul>
        <li><a href="../jobinfo" target="_parent"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/info_point_01.png" alt="宅建(宅地建物取引士)の資格情報"></a></li>
        <li><a href="../recommend" target="_parent"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/info_point_02.png" alt="宅建(宅地建物取引士)の資格情報"></a></li>
        <li><a href="../examinfo" target="_parent"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/info_point_03.png" alt="宅建(宅地建物取引士)の資格情報"></a></li>
        <li><a href="../exampoint" target="_parent"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/info_point_04.png" alt="宅建(宅地建物取引士)の資格情報"></a></li>
        <li><a href="../qna" target="_parent"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/info_point_05.png" alt="宅建(宅地建物取引士)の資格情報"></a></li>
      </ul>
    </div><!--end box08_inner02 -->
  </div><!-- end top_box08 -->
</article>
<?php do_action( 'sydney_get_sidebar' ); ?>
<?php get_footer(); ?>