<?php
/*
Template Name: log-out-contact_page10

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
    <h2 class="about_txt03">お問い合わせ</h2>
    <p><br>お問い合わせなどはこちらのメールフォームより承ります。<br>必要事項をご入力の上、「入力内容を確認する」ボタンをクリックしてください</p>
  </div>
    <form method="post" action="https://onecoin-study.net/wp-content/themes/01/js/mail-logout.php">
    <table class="formTable">
      <tr>
        <th>お名前</th>
        <td><input size="60" type="text" name="お名前" /> <span class="red_txt">※必須</span></td>
      </tr>
      <tr>
        <th>Mail（半角）</th>
        <td><input size="60" type="text" name="Email" /><span class="red_txt">※必須</span></td>
      </tr>
      <tr>
        <th>お問い合わせ内容<br /></th>
        <td><textarea name="お問い合わせ内容" cols="70" rows="10"></textarea><span class="red_txt">※必須</span></td>
      </tr>
    </table><br>
    <p align="center">
      <input type="submit" value="　 確認 　" />　<input type="reset" value="リセット" />
    </p>
  </form><br>
  <p>※IPアドレスを記録しております。いたずらや嫌がらせ等はご遠慮ください</p>
</div>  
  
<style type="text/css">
	#recruit_box2 { width: 1024px; margin: 0 auto;}
	#recruit_box2 h2 { font-size: 20px; font-weight: bold; }
#formWrap { width:700px; margin:0 auto; color:#563b1d; line-height:120%; font-size:90%; margin: .5em auto 2em; }
#formWrap input{ height: 2em}
table.formTable{ width:100%; margin:0 auto; border-collapse:collapse; margin-top: 1.5em;  }
table.formTable td,table.formTable th{ border:0px solid #F40519; padding:10px 10px 0; }
  table.formTable td {  }
table.formTable th{ width:30%; font-weight:normal;  text-align:left; vertical-align: middle;  }
#formWrap  .input_box { width: 450px; height: 20px; }
/*　簡易版レスポンシブ用CSS（必要最低限のみとしています。ブレークポイントも含め自由に設定下さい）　*/
@media screen and (max-width: 780px) { 
	#recruit_box2 { width: 96%; margin: 0 auto;}
	#recruit_box2 h2 { font-size: 20px; font-weight: bold; }

	#formWrap { width:95%; margin:5em auto 2em ;; }
  table.formTable th, table.formTable td { 	width:auto; display:block; }
  table.formTable th { 	margin-top:5px; border-bottom:0; vertical-align: middle ;  }
  form input[type="text"], form textarea { width:96%; padding:5px; font-size:110%;  display:block; }
  form input[type="submit"], form input[type="reset"], form input[type="button"] { display:block; width:100%; height:40px; }
  }
</style>

</section><!-- ▲▲▲ ここまで end works -->

<?php get_footer(); ?>
