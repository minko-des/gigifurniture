
// $(document).ready(function() {
document.addEventListener("DOMContentLoaded", () => {

// メインビジュアルの画像差し替えアニメーション
    const images = [
        "./images/mainvisual01.jpg",
        "./images/mainvisual02.jpeg",
        "./images/mainvisual03.jpeg",
        "./images/mainvisual04.jpeg",
        "./images/mainvisual05.jpeg",
    ];
    const imgElement = document.querySelector(".main-visual__img");
    let currentIndex = 0;

    setInterval(() => {
        currentIndex = (currentIndex + 1) % images.length;
        imgElement.src = images[currentIndex];
    }, 8000);

});

//     // 下層ページのヘッダーのメニューボタンのカラー切替え
//     const $hamburgerBtn = $(".c-hamburger-btn");
    
//     if (window.location.pathname === "/" || window.location.pathname.includes('index.html')) {

//     }else if (window.location.pathname.includes('page-about.html') || window.location.pathname.includes('single.html')) {
//         $hamburgerBtn.addClass("menuBtnStyle");
//     }
    

//     // ドロップダウンメニュー
//     const $menuBtn = $(".menu-btn");
//     const $menuBar = $(".l-menubar");

//     $menuBtn.on("click", function(){
//         $menuBar.toggleClass("u-dropMenu");
//     })
//     $(window).on("scroll", function(){
//         $menuBar.removeClass("u-dropMenu")
//     })


//     // アニメーション、スクロール位置監視して要素が画面に表れたら開始する
//     $(window).on('scroll', function() {
//         $('.slideInFromUnder, .slideInFromLeft, .slideInFromRight, .fadeIn').each(function() {
//             // 要素の上端位置
//             let targetPosition = $(this).offset().top;
//             // 画面のスクロール位置と画面高さを取得
//             let scrollPosition = $(window).scrollTop();
//             let windowHight = $(window).height();
//             // 要素が画面内に入ったらクラスごとに各クラスを追加
//             if (scrollPosition + windowHight > targetPosition) {
//                 if ($(this).hasClass('slideInFromUnder')) {
//                     $(this).addClass('u-active--slideInFromUnder');
//                 } else if ($(this).hasClass('slideInFromLeft')) {
//                     $(this).addClass('u-active--slideInFromLeft');
//                 } else if ($(this).hasClass("slideInFromRight")) {
//                     $(this).addClass('u-active--slideInFromRight');
//                 } else if ($(this).hasClass("fadeIn")) {
//                     $(this).addClass('u-active--fadeIn');
//                 }
//             }
//         })
//     })


//     // メインビジュアルのnameのスライドアニメーション
//     const $sliderContainer = $(".catch-title__name__container");
//     const $sliderItem = $(".catch-title__name");
//     const $clone = $sliderItem.clone();
//     $sliderContainer.append($clone);

//     let currentPosition = 0;
//     const itemWidth = $sliderItem.outerWidth();

//     function slide() {
//         currentPosition -= 0.3;
//         if (Math.abs(currentPosition) >= itemWidth) {
//             currentPosition = 0;
//         }
//         $sliderContainer.css("transform", `translateX(${currentPosition}px)`);
//         requestAnimationFrame(slide);
//     }

//     slide();



// const sliderContainer = document.querySelector(".catch-title__mame__container");
// const sliderItem = document.querySelector(".catch-title__mame");
// const clone = sliderItem.cloneNode(true); // 要素を複製
// sliderContainer.appendChild(clone); // 親要素に複製した要素を追加

// let currentPosition = 0; // スライダーの開始位置を0px（左端）に設定
// const itemWidth = sliderItem.offsetWidth; // 要素の幅を取得

// function slide() {
//     currentPosition -= 1; // 毎フレーム スライダー要素を１px左に移動

//     // 絶対位置を取得し、要素幅分移動したらリセットする
//     if (Math.abs(currentPosition) >= itemWidth) {
//         currentPosition = 0;
//     }

//     // CSSのtransform: translateX()を使って、要素を X方向に移動、currentPositionで要素の位置を反映
//     sliderContainer.style.transform = `translateX(${currentPosition}px)`;

//     // 次のフレームで再びslide関数を呼び出す（繰り返すことで滑らかなアニメーションを実現する）
//     requestAnimationFrame(slide);

// }

// slide(); //slide関数の最初の呼び出し、この行が実行されるとslide関数が動き出す
