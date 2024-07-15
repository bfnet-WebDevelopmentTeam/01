<?php
/*
Template Name: contact_page99

*/

get_header(); ?>

<?php
/*
Template Name: News-index
Template Post Type: post,page
*/
?>

<?php get_header(); ?>


<article id="main_contents">
</article>

<section id="contact">
  <div id="formWrap">
		  <div id="recruit_box2">
    <h2 class="about_txt03">退会手続きアンケート</h2>
    <p>
      ｢ワンコインスタディー宅建講座｣をご利用いただき誠にありがとうございました。退会前に、今後のサービス・サポート向上のため、アンケートの回答にご協力をお願い致します。<span>尚、本フォームの回答をもって退会とさせていただきます。</span>【回答所要時間：約1〜3分】
    </p>
  </div>
<?php if ( have_posts() ) : ?>
  <?php while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
<?php endif; ?>
  <p>※IPアドレスを記録しております。いたずらや嫌がらせ等はご遠慮ください</p>
</div>  
  
<style type="text/css">
	#recruit_box2 { width: 1024px; margin: 0 auto;}
	#recruit_box2 h2 { font-size: 20px; font-weight: bold; }
#formWrap { width:700px; margin:0 auto; color:#563b1d; line-height:120%; font-size:90%; margin: .5em auto 2em; }
#formWrap input{ height: auto}
table.formTable{ width:100%; margin:0 auto; border-collapse:collapse; margin-top: 1.5em;  }
table.formTable td,table.formTable th{ border:0px solid #F40519; padding:10px 10px 0; }
  table.formTable td { text-align: left;  }
table.formTable th{ width:30%; font-weight:normal;  text-align:left; vertical-align: middle;  }
#formWrap  .input_box { width: 450px; height: 20px; }
.red_txt { text-align:left; }
/*　簡易版レスポンシブ用CSS（必要最低限のみとしています。ブレークポイントも含め自由に設定下さい）　*/
@media screen and (max-width: 780px) { 
	#recruit_box2 { width: 96%; margin: 0 auto;}
	#recruit_box2 h2 { font-size: 20px; font-weight: bold; }

	#formWrap { width:95%; margin:6em auto 2em ;; }
  table.formTable th, table.formTable td { 	width:auto; display:block; }
  table.formTable th { 	margin-top:5px; border-bottom:0; vertical-align: middle ;  }
  form input[type="text"], form textarea { width:96%; padding:5px; font-size:110%;  display:block; }
  form input[type="submit"], form input[type="reset"], form input[type="button"] { display:block; width:100%; height:40px; }
  }
</style>

</section><!-- ▲▲▲ ここまで end works -->

<?php get_footer(); ?>
