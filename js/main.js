document.addEventListener("DOMContentLoaded", () => {

    // メインビジュアルの画像差し替えアニメーション
    const images = document.querySelectorAll(".main-visual__img");

    if (images.length > 0) {
        let currentIndex = 0;
        setInterval(() => {
            // 現在の画像を非表示
            images[currentIndex].classList.add("hidden");
            // 次の画像を表示
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.remove("hidden");
        }, 7500);
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

    // 自動スライダー
    const mySwiperAuto = new Swiper('.swiper_auto', {
        // Optional parameters
        loop: true,
        spaceBetween: 50,
        speed: 7000,
        allowTouchMove: false,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        slidesPerView: 3,
        breakpoints: {
            500: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 3,
            },
            1300: {
                slidesPerView: 4,
            },
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