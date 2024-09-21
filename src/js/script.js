"use strict";

jQuery(function ($) {
  // ハンバーガーメニュー
  $(".js-hamburger").click(function () {
    $(this).toggleClass("is-open");
    if ($(this).hasClass("is-open")) {
      openDrawer();
    } else {
      closeDrawer();
    }
  });

  // 背景またはページ内リンクをクリックで閉じる
  $(".js-drawer a[href]").on("click", function (event) {
    closeDrawer();
  });

  // resizeイベント
  $(window).resize(function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      closeDrawer();
    }
  });

  function openDrawer() {
    $(".js-drawer").fadeIn();
    $(".js-header").addClass("is-open");
    $(".js-hamburger").addClass("is-open");
  }

  function closeDrawer() {
    $(".js-drawer").fadeOut();
    $(".js-header").removeClass("is-open");
    $(".js-hamburger").removeClass("is-open");
  }

  
  // Swiper設定（メインビュー）
  var swipeOption = {
    loop: true,
    effect: "fade",
    fadeEffect: {
      crossFade: true
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    speed: 1000,
    allowTouchMove: false
  };

  // フォント読み込み完了後にSwiperを初期化
  document.fonts.ready.then(function () {
    new Swiper(".js-fv-swiper", swipeOption);
  });

  // キャンペーンセクションのSwiper
  var mySwiper = new Swiper(".js-campaign-swiper", {
    loop: true,
    slidesPerView: "1.25",
    spaceBetween: 24,
    width: 355,
    freeModeSticky: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    scrollbar: {
      el: ".swiper-scrollbar"
    },
    breakpoints: {
      768: {
        slidesPerView: "3.5",
        spaceBetween: 40,
        width: 1265
      }
    }
  });

  // 画像アニメーション
  var box = $(".js-color"),
      speed = 700;

  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($(".color")),
        image = $(this).find("img");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");

    // inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          width: "100%"
        }, speed, function () {
          image.css("opacity", "1");
          $(this).css({
            left: "0",
            right: "auto"
          });
          $(this).animate({
            width: "0%"
          }, speed);
        });
        counter = 1;
      }
    });
  });

  // ページトップボタン
  $(".js-page-top-btn").on("click", function () {
    $("body,html").animate({
      scrollTop: 0
    }, 500);
    return false;
  });

  // スクロールによるトップページボタンの表示
  $(window).on("load scroll", function () {
    var btn = $(".js-page-top-btn");
    if ($(this).scrollTop() > 100) {
      btn.addClass("active");
    } else {
      btn.removeClass("active");
    }
  });

  // ギャラリーモーダル
  var scrollPosition;
  $(".js-modal-open").each(function () {
    $(this).on("click", function () {
      var target = $(this).data("target");
      var modal = document.getElementById(target);
      $(modal).fadeIn();

      // 現在のスクロール位置を保存
      scrollPosition = $(window).scrollTop();

      // スクロールを無効に
      $('body').css({
        position: 'fixed',
        top: -scrollPosition + 'px',
        width: '100%'
      });
      return false;
    });
  });

  $(".js-modal-close").on("click", function () {
    $(".js-modal").fadeOut();
    $('body').css({
      position: '',
      top: '',
      width: ''
    });
    $(window).scrollTop(scrollPosition);
    return false;
  });

  // タブ切り替え処理
  $(".js-info-content-tab").click(function () {
    var index = $(this).index();
    $(".js-info-content-card").hide();
    $(".js-info-content-card").eq(index).show();
    $(".js-info-content-tab").removeClass("active");
    $(this).addClass("active");
  });

  // URLパラメータでタブを自動選択
  var urlParams = new URLSearchParams(window.location.search);
  var selectedTab = urlParams.get("tab");

  if (selectedTab && !isNaN(selectedTab)) {
    selectedTab = parseInt(selectedTab, 10);
    $(".js-info-content-tab").eq(selectedTab - 1).addClass("active");
    $(".js-info-content-card").hide();
    $(".js-info-content-card").eq(selectedTab - 1).show();
  }
});

// priceページリンク設定
// ページ内のスムーススクロール
jQuery(function () {
  jQuery('a[href*="#"]').click(function (e) {
    var target = jQuery(this.hash === "" ? "html" : this.hash);
    if (target.length) {
      e.preventDefault();
      var headerHeight = jQuery("header").outerHeight();
      var position = target.offset().top - headerHeight - 20;
      jQuery("html, body").animate({ scrollTop: position }, 500, "swing");

      if (!target.is("html")) {
        // URLにハッシュを含める
        history.pushState(null, '', this.hash);
      }
    }
  });
});

// 別ページ遷移後のスムーススクロール
var urlHash = location.hash;
if (urlHash) {
  var target = jQuery(urlHash);
  if (target.length) {
    // ページトップから開始（ブラウザ差異を考慮して併用）
    history.replaceState(null, '', window.location.pathname);
    jQuery("html,body").stop().scrollTop(0);

    jQuery(window).on("load", function () {
      var headerHeight = jQuery("header").outerHeight();
      var position = target.offset().top - headerHeight - 20;
      jQuery("html, body").animate({ scrollTop: position }, 500, "swing");

      // ハッシュを再設定
      history.replaceState(null, '', window.location.pathname + urlHash);
    });
  }
}
// ドロワーメニュー制御
var drawer = document.querySelector(".js-drawer");
var overlay = document.querySelector(".js-header-overlay");

function openDrawer() {
  drawer.classList.add("is-open");
  overlay.style.display = "block";
  document.body.style.overflow = "hidden"; // ドロワーが開いている間は本体のスクロールを無効にする
}

function closeDrawer() {
  drawer.classList.remove("is-open");
  overlay.style.display = "none";
  document.body.style.overflow = ""; // ドロワーが閉じられたら本体のスクロールを有効にする
}

document.querySelector(".js-hamburger").addEventListener("click", function () {
  if (drawer.classList.contains("is-open")) {
    closeDrawer();
  } else {
    openDrawer();
  }
});

if (overlay) {
  overlay.addEventListener("click", closeDrawer);
} else {
  console.warn('Overlay element not found.');
}
