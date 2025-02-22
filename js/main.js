document.addEventListener("DOMContentLoaded", () => {

// メインビジュアルの画像差し替えアニメーション
    const images = document.querySelectorAll(".main-visual__img");
    let currentIndex = 0;
    setInterval(() => {
        // 現在の画像を非表示にする
        images[currentIndex].classList.add("hidden");
        // 次の画像を表示する
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.remove("hidden");
    }, 8000);


    // 自動スライダー、無限ループ関数
    const sliderContainer = document.querySelector(".slider-container");
    const sliderItem = document.querySelector(".logo-wrap");
    const screenWidth = window.innerWidth; // 画面幅を取得
    // アイテムを複製して画面幅を埋める
    let itemWidth = sliderItem.offsetWidth; //要素幅を取得
    const itemsNeeded = Math.ceil(screenWidth / itemWidth) + 1; // 画面幅を超えるために+1
    
    for (let i = 0; i < itemsNeeded; i++) {
        const clone = sliderItem.cloneNode(true); //要素の複製
        sliderContainer.appendChild(clone); //複製した要素（clone）をsliderContainerに追加
    }
    let currentPosition = 0;

    // スライド関数
    function slide() {
        currentPosition -= 0.3; // 1フレームあたりの移動量
        if (Math.abs(currentPosition) >= itemWidth) {
            currentPosition = 0; // リセット
            // 先頭のアイテムを末尾に移動
            const firstItem = sliderContainer.firstElementChild;
            sliderContainer.appendChild(firstItem);
        }
        sliderContainer.style.transform = `translateX(${currentPosition}px)`; // 移動を適用
        requestAnimationFrame(slide); // アニメーションを繰り返す
    }
    
    window.addEventListener('resize', () => {
        itemWidth = sliderItem.offsetWidth; // 幅を更新
        currentPosition = 0; // 位置をリセット
        sliderContainer.style.transform = `translateX(0px)`; // 位置を初期化
    });
    
    slide();


    // メニューページ表示非表示関数
    const menuBtn = document.querySelector(".c-menu-btn");
    const sideBar = document.querySelector(".p-sidebar");

    menuBtn.addEventListener("click" , () => {
        const currentText = menuBtn.textContent;
        menuBtn.textContent = currentText === "CLOSE" ? "MENU" : "CLOSE";
        sideBar.classList.toggle("menuOpen");

        toggleBodyScroll();
    });

    function toggleBodyScroll() {
        if (sideBar.classList.contains("menuOpen")) {
            document.body.classList.add("u-noScroll");
        } else {
            document.body.classList.remove("u-noScroll");
        }
    }


    // アイテムのスライダー
    const mySwiper = new Swiper('.swiper', {
        // Optional parameters
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: "5%",
        centeredSlides: true, //アクティブなスライドを中央に配置
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

});


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