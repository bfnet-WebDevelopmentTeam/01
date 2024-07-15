<?php
/*
Template Name: お問い合わせテンプレート
Template Post Type: post,page
*/

get_header(); ?>


<?php get_header(); ?>

<article id="main_contents">
</article>

<section id="contact">
  <div id="formWrap">
    <div id="recruit_box2">
      <h2 class="about_txt03">お問い合わせ</h2>
      <p><br>お問い合わせなどはこちらのメールフォームより承ります。<br>必要事項をご入力の上、「入力内容を確認する」ボタンをクリックしてください</p>
    </div>
    <form method="post" action="https://onecoin-study.net/wp-content/themes/01/js/mail.php">
      <table class="formTable">
        <tr>
          <th><span>お名前</span><span class="red_txt">※必須</span></th>
          <td><input size="60" type="text" name="お名前" /></td>
        </tr>
        <tr>
          <th><span>Mail(半角)</span><span class="red_txt">※必須</span></th>
          <td><input size="60" type="text" name="Email" /></td>
        </tr>
        <tr>
          <th><span>お問い合わせ内容</span><span class="red_txt">※必須</span><br /></th>
          <td><textarea name="お問い合わせ内容" cols="70" rows="10"></textarea></td>
        </tr>
      </table><br>
      <!-- <p> -->
      <div class="form-btn">
        <input type="submit" value="　 確認 　" />　<input type="reset" value="リセット" />
      </div>
      <!-- </p> -->
    </form><br>
    <p>※IPアドレスを記録しております。いたずらや嫌がらせ等はご遠慮ください</p>
  </div>

  <style type="text/css">
    #recruit_box2 {
      margin: 0 auto;
    }


    #formWrap {
      width: 700px;
      margin: 0 auto;
      color: #563b1d;
      line-height: 120%;
      font-size: 90%;
      margin: .5em auto 2em;
    }

    #formWrap input {
      height: auto
    }

    table.formTable {
      width: 100%;
      margin: 0 auto;
      border-collapse: collapse;
      margin-top: 1.5em;
    }

    table.formTable td,
    table.formTable th {
      border: 0px solid #F40519;
      /* padding: 10px 10px 0; */
    }

    table.formTable tr th span {
      display: inline-block;
      margin-bottom: 16px;
    }

    table.formTable tr td input,
    table.formTable tr td textarea {
      margin-bottom: 16px;
    }

    table.formTable td {
      text-align: left;
    }

    table.formTable th {
      width: 30%;
      font-weight: normal;
      text-align: left;
      vertical-align: middle;
    }

    #formWrap .input_box {
      width: 450px;
      height: 20px;
    }

    .red_txt {
      margin-left: auto;
      float: right;
      margin-right: 16px;
      color: #f40519;
    }

    form input[type="submit"],
    form input[type="reset"],
    form input[type="button"] {
      width: 50%;
    }

    .form-btn {
      display: flex;
    }

    input[type="submit"],
    input[type="reset"] {
      font-size: 16px;
    }

    /*　簡易版レスポンシブ用CSS（必要最低限のみとしています。ブレークポイントも含め自由に設定下さい）　*/
    @media screen and (max-width: 780px) {
 
      #formWrap {
        width: 95%;
        ;
      }

      table.formTable th,
      table.formTable td {
        width: auto;
        display: block;
        padding-left: 0;
        padding-right: 0;
      }

      table.formTable th {
        margin-top: 5px;
        border-bottom: 0;
        vertical-align: middle;
      }

      table.formTable tr th span {
        margin-bottom: 0;
      }

      table.formTable tr td input,
      table.formTable tr td textarea {
        margin-bottom: 8px;
      }

      .red_txt {
        float: none;
        margin-right: 0;
        margin-left: 8px;
        font-size: 12px;
      }

      form input[type="text"],
      form textarea {

        width: 100%;
        padding: 8px;
        font-size: 110%;
        display: block;
      }

      form input[type="submit"],
      form input[type="reset"],
      form input[type="button"] {
        display: block;
        width: 100%;
        height: 40px;
      }

      .form-btn {
        flex-direction: column;
      }
    }
  </style>

</section><!-- ▲▲▲ ここまで end works -->

<?php get_footer(); ?>