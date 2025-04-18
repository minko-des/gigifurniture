document.addEventListener("DOMContentLoaded", () => {

    // メインビジュアルの画像差し替えアニメーション
    const images = document.querySelectorAll(".main-visual__img");

    if (images.length > 0) {
        let currentIndex = 0;
        setInterval(() => {
            // 現在の画像を非表示にする
            images[currentIndex].classList.add("hidden");
            // 次の画像を表示する
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.remove("hidden");
        }, 8000);
    }


    //ヘッダーのバックグラウンドカラーの表示
    const bgColor = document.querySelector(".bg-color");

    window.addEventListener('scroll', function () {
        if (window.scrollY === 0) {
        bgColor.classList.add('hidden');
        } else {
            bgColor.classList.remove('hidden');
        }
    });

    if (window.scrollY === 0) {
        bgColor.classList.add('hidden');
    }


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
        currentPosition -= 0.8; // 1フレームあたりの移動量
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
    
    console.log("itemWidth:", itemWidth); // 正しく 1082px とか出てる？

    slide();


    // メニューページ表示非表示関数
    const menuBtn = document.querySelector(".c-menu-btn");
    const sideBar = document.querySelector(".p-sidebar");
    const menuItems = document.querySelectorAll(".menu__item");

    menuBtn.addEventListener("click" , () => {
        const currentText = menuBtn.textContent;
        menuBtn.textContent = currentText === "CLOSE" ? "MENU" : "CLOSE";
        sideBar.classList.toggle("menuOpen");

        toggleBodyScroll();
    });

    menuItems.forEach(item => {
        item.addEventListener("click" ,() => {
            sideBar.classList.remove("menuOpen");
            toggleBodyScroll();
        });
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
    

    // スクロールによるアニメーション発火
    window.addEventListener('scroll', function () {
        const elements = document.querySelectorAll('.slideInFromUnder, .slideInFromLeft, .slideInFromRight, .fadeIn');
        
        elements.forEach(function (el) {
            const rect = el.getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;
            
            if (rect.top < windowHeight) {
                el.classList.add('active');
            }
        });
    });
    
});