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
