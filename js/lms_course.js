"use strict";

{
  let url = "https://onecoin-study.net/dashboard/";
  document
    .querySelectorAll(
      ".main-header .site-branding a, .mobile-header .site-branding a"
    )
    .forEach(function (link) {
      link.setAttribute("href", url);
    });
}

// {
//   // 支払いフォームのlabel要素の順番の変更
//   let labelEl = document.querySelector(".llms-checkout-section-content");
//   labelEl.insertBefore(labelEl.children[1], labelEl.children[0]);
// }

{
  //コースページのレッスンシラバスのアコーディオン機能の処理
  const acItems = document.querySelectorAll(".lesson-container");
  acItems.forEach((acItem) => {
    const acHead = acItem.querySelector(".llms-h3");
    const acContent = acItem.querySelector(".lesson-wrapper");
    acHead.addEventListener("click", function () {
      acContent.classList.toggle("active");
    });
  });
}

{
  // パスワードの可視化処理(切り替え)

  window.addEventListener("DOMContentLoaded", function () {
    let input_pass = document.getElementById("password");
    let parentEl = document.querySelectorAll(
      ".llms-form-field.type-password.llms-cols-6.llms-is-required"
    );
    parentEl.forEach((el, index) => {
      let btn_passview = document.createElement("button");
      btn_passview.textContent = "表示";
      btn_passview.id = "btn_passview_" + index; // インデックスを含めた一意のIDを割り当てる
      el.appendChild(btn_passview); // 各要素にボタンを追加する

      btn_passview.addEventListener("click", (e) => {
        e.preventDefault();

        if (input_pass.type === "password") {
          input_pass.type = "text";
          btn_passview.textContent = "非表示";
        } else {
          input_pass.type = "password";
          btn_passview.textContent = "表示";
        }
      });
    });
  });
}

// {
//   // フォームの必須項目の削除
//   let mailConfirm = document.getElementById('email_address_confirm');
//   let passConfirm = document.getElementById('password_confirm');

//   mailConfirm.removeAttribute('required');
//   passConfirm.removeAttribute('required');
// }

{
  // ページがロードされた後に実行される関数
  document.addEventListener("DOMContentLoaded", function () {
    // 要素を操作する関数
      // 要素を取得
      const quizStartBtn = document.getElementById("llms_start_quiz");
      const quizMetaTitle = document.querySelector(".llms-quiz-meta-title");
      const quizPassingPercent = document.querySelector(".llms-passing-percent");
      const quizCountText = document.querySelector(".llms-quiz-meta-item.llms-question-count");
      const el = document.querySelector(".llms-return");
      const elText = el ? el.getElementsByTagName("a") : []; // el が null でないことを確認してからメソッドを呼び出す
      const btnEl = document.getElementById('quiz-start-button');
      const nextLessonBtn = btnEl ? btnEl.querySelector(".llms-next-lesson") : null;
      const nextQuestionBtn = document.getElementById("llms-next-question");
      const prevQuestionBtn = document.getElementById("llms-prev-question");
      const completeQuestionBtn = document.getElementById("llms_complete_quiz");
      const quizResultTitle = document.querySelector(".llms-quiz-results-title");
      const studentAnswers = document.querySelectorAll('.student-answer');
      const clarifications = document.querySelectorAll('.clarification');

      // 要素が存在するか確認してからテキストを設定
      if (quizStartBtn) {
        quizStartBtn.textContent = "練習問題を始める";
      }
      if(quizMetaTitle) {
        quizMetaTitle.textContent = "練習問題情報";
      }
      if(quizPassingPercent) {
        quizPassingPercent.firstChild.nodeValue = "最低合格点: ";
      }
      if(quizCountText) {
        quizCountText.firstChild.nodeValue = "質問: ";
      }
      if (elText.length > 0) {
        elText[0].textContent = "レッスンに戻る";
      }
      if (nextLessonBtn) {
        nextLessonBtn.textContent = "次のレッスンへ";
      }

      if (nextQuestionBtn) {
        nextQuestionBtn.textContent = "次の問題へ";
      }
      if (prevQuestionBtn) {
        prevQuestionBtn.textContent = "前の問題へ";
      }
      if (completeQuestionBtn) {
        completeQuestionBtn.textContent = "次の問題へ";
      }
      if(quizResultTitle) {
        quizResultTitle.textContent = "結果";
      }
      studentAnswers.forEach(function(studentAnswer) {
        studentAnswer.textContent = "あなたが回答した答え:";
      });
    
      clarifications.forEach(function(clarification) {
        clarification.textContent = "説明:";
      });

    // ページ遷移時に要素を更新する
    // window.addEventListener("popstate", updateElements);
  });
}
