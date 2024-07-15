"use strict";

{
  // アニメLPの固定CTAボタンの高さ分の余白を作る
  document.addEventListener("DOMContentLoaded", function () {
    let fixCtaBtn = document.getElementById("fix-cta-btn");
    let height = fixCtaBtn.clientHeight;
    if (fixCtaBtn) {
      document.body.style.paddingBottom = height + "px";
    }
  });
}

{
  // フローティングバナー制御
  let fBanner = document.getElementById("js_fBanner");
  let closeBtn = document.getElementById("js_fBanner_close");
  let overlay = document.getElementById('overlay');

  closeBtn.addEventListener("click", function () {
    fBanner.classList.add("hide");
    overlay.classList.add("hide");
  });
}
