jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  // ハンバーガーメニュー
  $(function () {
    $(".js-hamburger").click(function () {
      $(this).toggleClass("is-open");
      if ($(this).hasClass("is-open")) {
        openDrawer();
      } else {
        closeDrawer();
      }
    });

    //backgroundまたはページ内リンクをクリックで閉じる
    $(".js-drawer a[href]").on("click", function (event) {
      closeDrawer();
    });

    //resizeイベント
    $(window).resize(function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        closeDrawer();
      }
    });
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

  // swiper
  //  メインビューのswiper
  let swipeOption = {
    loop: true, // スライダーをループさせる設定
    effect: "fade", // フェードさせる為の設定
    fadeEffect: {
      crossFade: true, //縦横比が統一されない画像の場合、重なる場合がある為、それを防ぐ設定
    },
    autoplay: {
      delay: 4000, // 秒後に次の画像にいくようにする設定
      disableOnInteraction: false, // ユーザーが操作後、自動再生を再開する設定
    },
    speed: 1000, // 2秒かけ次の画像へ移動させる設定
    allowTouchMove: false, // マウスでのスワイプを禁止する設定
  };
  // フォント読み込み完了後にコードを実行
  document.fonts.ready.then(function () {
    // ここにSwiperの初期化コードを挿入
    new Swiper(".js-fv-swiper", swipeOption);
  });

  // キャンペーンセクションのスワイパー
  let mySwiper = new Swiper(".js-campaign-swiper", {
    // 以下にオプションを設定
    loop: true, //最後に達したら先頭に戻る
    // slidesPerView: "auto",
    slidesPerView: "1.25",
    spaceBetween: 24,
    width: 355,
    freeModeSticky: true,
    autoplay: {
      delay: 4000, // 秒後に次の画像にいくようにする設定
      disableOnInteraction: false, // ユーザーが操作後、自動再生を再開する設定
    },
    //ページネーション表示の設定
    pagination: {
      el: ".swiper-pagination", //ページネーションの要素
      type: "bullets", //ページネーションの種類
      clickable: true, //クリックに反応させる
    },

    //ナビゲーションボタン（矢印）表示の設定
    navigation: {
      nextEl: ".swiper-button-next", //「次へボタン」要素の指定
      prevEl: ".swiper-button-prev", //「前へボタン」要素の指定
    },

    //スクロールバー表示の設定
    scrollbar: {
      el: ".swiper-scrollbar", //要素の指定
    },
    breakpoints: {
      768: {
        // 画面幅600px以上で適用
        slidesPerView: "3.5",
        spaceBetween: 40,
        width: 1265,
      },
    },
  });

  // 画像アニメーション
  //要素の取得とスピードの設定
  var box = $(".js-color"),
    speed = 700;

  //.colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($(".color")),
      image = $(this).find("img");
    var counter = 0;

    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this)
          .delay(200)
          .animate({ width: "100%" }, speed, function () {
            image.css("opacity", "1");
            $(this).css({ left: "0", right: "auto" });
            $(this).animate({ width: "0%" }, speed);
          });
        counter = 1;
      }
    });
  });

  $(".js-page-top-btn").on("click", function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });

  // トップページボタン：最初非表示→スクロールしたら表示
  $(function () {
    // 変数にクラスを入れる
    var btn = $(".js-page-top-btn");

    //スクロールしてページトップから100に達したらボタンを表示
    $(window).on("load scroll", function () {
      if ($(this).scrollTop() > 100) {
        btn.addClass("active");
      } else {
        btn.removeClass("active");
      }
    });

    //スクロールしてトップへ戻る
    btn.on("click", function () {
      $("body,html").animate({
        scrollTop: 0,
      });
    });
  });

  // Aboutモーダル
  // Aboutモーダル+画像開いているときはスクロールを止める
  // JavaScriptの部分
  $(function () {
    $(".js-modal-open").each(function () {
      $(this).on("click", function () {
        var target = $(this).data("target");
        var modal = document.getElementById(target);
        $(modal).fadeIn();
        $("body").addClass("no-scroll");  // スクロールを無効にするクラスを追加
        return false;
      });
    });
  
    $(".js-modal-close").on("click", function () {
      $(".js-modal").fadeOut();
      $("body").removeClass("no-scroll");  // スクロールを無効にするクラスを削除
      return false;
    });
  });

  $(function () {
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
  
      // スクロールを再有効化
      $('body').css({
        position: '',
        top: '',
        width: ''
      });
  
      // 元のスクロール位置に戻る
      $(window).scrollTop(scrollPosition);
  
      return false;
    });
  });
  

  // js-info-content-tabの処理
  $(function () {
    //.js-info-content-tabがクリックされたときの処理
    $(".js-info-content-tab").click(function () {
      // 選択された.js-info-content-tabのインデックスを取得
      var index = $(this).index();
      // すべての.js-info-content-cardを非表示にする
      $(".js-info-content-card").hide();
      // クリックされた.js-info-content-tabに対応する.js-info-content-cardを表示
      $(".js-info-content-card").eq(index).show();
      // すべての.js-info-content-tabからactiveクラスを削除
      $(".js-info-content-tab").removeClass("active");
      // クリックされた.js-info-content-tabにactiveクラスを追加
      $(this).addClass("active");
    });
  });


// priceページリンク調整
  $(document).ready(function () {
    $('.common-nav__item a[href*="#"]').click(function (event) {
      // ページ内リンクかどうかを確認
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        // リンク先のIDを取得
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          // デフォルトの動作をキャンセル
          event.preventDefault();
  
          // スクロール位置のオフセット（調整値）
          var offset = 0 // 調整するピクセル数を指定
          var scrollToPosition = target.offset().top - offset;
  
          // スムーズスクロール
          $('html, body').animate({
            scrollTop: scrollToPosition
          }, 500); // スクロールの速度をミリ秒単位で指定
          return false;
        }
      }
    });
  });
  
  

  $(function () {
    $(".js-info-content-tab:first-child").removeClass("active");
    
    // URLパラメータからtabの値を取得
    var urlParams = new URLSearchParams(window.location.search);
    var selectedTab = urlParams.get("tab");
    
    // selectedTabが有効な値か確認
    if (selectedTab && !isNaN(selectedTab)) {
      selectedTab = parseInt(selectedTab, 10);
      
      // 対応するjs-info-content-tabに'active'クラスを追加
      $(".js-info-content-tab").eq(selectedTab - 1).addClass("active");
      // 初期状態で他のjs-info-content-cardを非表示にする
      $(".js-info-content-card").hide();
      // 選択されたタブに基づいてコンテンツを表示
      $(".js-info-content-card").eq(selectedTab - 1).show();
    }
  
    // js-info-content-tabがクリックされたときの処理
    $(".js-info-content-tab").click(function () {
      // クリックされたjs-info-content-tabのインデックスを取得
      var index = $(this).index();
      // すべてのjs-info-content-cardを非表示にする
      $(".js-info-content-card").hide();
      // クリックされたjs-info-content-tabに対応するjs-info-content-cardを表示
      $(".js-info-content-card").eq(index).show();
      // すべてのjs-info-content-tabからactiveクラスを削除
      $(".js-info-content-tab").removeClass("active");
      // クリックされたjs-info-content-tabにactiveクラスを追加
      $(this).addClass("active");
    });
  });
  

  document.querySelectorAll(".js-scroll a").forEach((item) => {
    item.addEventListener("click", (event) => {
      event.preventDefault();
      const targetId = item.getAttribute("href");
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        targetElement.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    });
  });

  $('a[href*="#"]').click(function () {
    //全てのページ内リンクに適用させたい場合はa[href*="#"]のみでもOK
    var elmHash = $(this).attr("href"); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
    var pos = $(elmHash).offset().top; //idの上部の距離を取得
    $("body,html").animate({ scrollTop: pos }, 0); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
    return false;
  });

  // Blogページ　アーカイブセクション　アコーディオン
  // 第一階層
  $(function () {
    // 最初のコンテンツは表示
    $(".js-accordion-item .js-blog-container__accordion-content").css("display", "block");
    // 最初の矢印は開いた時の状態に
    $(".js-accordion-item .js-accordion-title").addClass("open");
    // タイトルをクリックすると
    $(".js-accordion-title").on("click", function () {
      // クリックしたタイトル以外のopenクラスを外す
      $(".js-accordion-title").not(this).removeClass("open");
      // クリックしたタイトル以外のcontentを閉じる
      $(".js-accordion-title").not(this).next().slideUp(300);
      // クリックしたタイトルにopenクラスを付与
      $(this).toggleClass("open");
      // クリックしたタイトルのcontentを開閉
      $(this).next().slideToggle(300);
    });
  });
  // 第二階層
  $(function () {
    // タイトルをクリックすると
    $(".js-accordion-title-month").on("click", function () {
      // クリックした次の要素を開閉
      $(this).next().slideToggle(300);
      // タイトルにopenクラスを付け外しして矢印の向きを変更
      $(this).toggleClass("open", 300);
    });
  });

  // FAQアコーディオン
  //アコーディオンをクリックした時の動作
  $(".js-faq-accordion-title").on("click", function () {
    //タイトル要素をクリックしたら
    var findElm = $(this).next(".js-faq-accordion-box"); //直後のアコーディオンを行うエリアを取得し
    $(findElm).slideToggle(); //アコーディオンの上下動作

    if ($(this).hasClass("close")) {
      //タイトル要素にクラス名closeがあれば
      $(this).removeClass("close"); //クラス名を除去し
    } else {
      //それ以外は
      $(this).addClass("close"); //クラス名closeを付与
    }
  });

  //ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
  $(window).on("load", function () {
    $(".js-faq-accordion-area li:first-of-type section").addClass("open"); //accordion-areaのはじめのliにあるsectionにopenクラスを追加
    $(".open").each(function (index, element) {
      //openクラスを取得
      var Title = $(element).children(".js-faq-accordion-title"); //openクラスの子要素のtitleクラスを取得
      $(Title).addClass("close"); //タイトルにクラス名closeを付与し
      var Box = $(element).children(".js-faq-accordion-box"); //openクラスの子要素boxクラスを取得
      $(Box).slideDown(500); //アコーディオンを開く
    });
  });
});

// ドロワー展開時に、下の要素がスクロールするのを防ぐ
const drawer = document.querySelector(".js-drawer");
const overlay = document.querySelector(".js-header-overlay");

// ドロワーメニューを開く
function openDrawer() {
  drawer.classList.add("is-open");
  overlay.style.display = "block";
  document.body.style.overflow = "hidden"; // ドロワーが開いている間は本体のスクロールを無効にする
}

// ドロワーメニューを閉じる
function closeDrawer() {
  drawer.classList.remove("is-open");
  overlay.style.display = "none";
  document.body.style.overflow = ""; // ドロワーが閉じられたら本体のスクロールを有効にする
}

// ドロワーメニューを開閉するためのイベントリスナー
document.querySelector(".js-hamburger").addEventListener("click", () => {
  if (drawer.classList.contains("is-open")) {
    closeDrawer();
  } else {
    openDrawer();
  }
});

// オーバーレイをクリックしてドロワーを閉じる
overlay.addEventListener("click", closeDrawer);

// ドロワーメニュー内のスクロールを制御する
drawer.addEventListener("scroll", (event) => {
  // ドロワーが開いている場合のみ、ドロワーメニュー内でのスクロールを有効にする
  if (!drawer.classList.contains("is-open")) {
    event.preventDefault();
  }
});

$(function() {
  // #から始まるアンカータグをクリックしたら処理を実行
  $('a[href^="#"]').click(function() {
    // スクロールの速度（ミリ秒）
    const speed = 500;
    // アンカーの値取得（リンク先<href>を取得して、hrefという変数に代入）
    const href = $(this).attr("href");
    // 移動先を取得（リンク先<href>のidがある要素を探してtargetに代入）
    const target = $(href == "#" || href == "" ? "html" : href);
    // 移動先を調整(idの要素の位置をoffset()で取得しpositionに代入<ヘッダー分は差し引く>）
    const position = target.offset().top - $( '#js-header' ).outerHeight();
    // スムーススクロール
    $("html, body").animate({scrollTop: position}, speed, "swing");
    return false;
  });
});


//ローディング画面を初回一回目のみ表示(同ブラウザ上で)の場合はこちら

$(function () {
  if (sessionStorage.getItem('visit')) {
    $(".js-loader").css("display", "none");
  } else {
    sessionStorage.setItem('visit', 'true');
    $(window).on('load', function () {
      //ページを開いて1秒後にテキストを0.6秒かけて非表示
      $('.js-loader-title').delay(1000).fadeOut(600);

      //2つに分かれた画像がスライドアップ(右の画像が80px遅れ)最終的に1枚の画像になる
      $('.js-loader-left').delay(1200).addClass("slideUp");
      $('.js-loader-right').delay(1300).addClass("slideUp");

      //画像が出て数秒後にタイトルが浮き出る(カラーが白に変わる)
      $('.js-loader-title').hide();
      $('.js-loader-title').delay(2000).css("color","white").fadeIn(600);

      //ページを開いて5秒後にローダー画面をゆっくり非表示
      $('.js-loader').delay(5000).fadeOut('slow');
    });

    //ページ読み込みが終わってなくても5秒後にはローディング画面を非表示(ユーザー離脱防止)
    setTimeout(function(){
      $('.js-loader').fadeOut('slow');
    },5000);
  }
});