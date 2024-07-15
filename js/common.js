"use strict";

jQuery(document).ready(function ($) {
  jQuery(".top_navi").stellarNav({
    theme: "right",
    breakpoint: 960,
    position: "right",
    /*				phoneBtn: " ",
				locationBtn: " " */
  });
});

/* header code*/

$("html, body").animate(
  {
    scrollTop: target.offset().top,
  },
  2500,
  function () {}
);

AOS.init();


