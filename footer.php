            <footer class="l-footer">
                <div class="p-footer slideInFromRight">
                    <div class="c-contact-btn--large fadeIn">
                        <a href="mailto:gigifurniture8@gmail.com?subject=問い合わせ" aria-label="メールでお問合せ" role="button">
                            <span>Contact</span>
                        </a>
                    </div>
                    <nav class="footer_nav fadeIn">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-nav',
                                'menu_class'     => 'menu',
                                'container'      => false,
                            ));
                        ?>
                        <?php get_template_part('template-parts/insta-icon'); ?>
                    </nav>
                    <div class="c-gigifurniture-logo">
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/logo_gigifurniture.svg') ); ?>" alt="gigifurnitureのロゴ">
                        </a>
                    </div>
                </div>
                <small class="p-copyright">© 2025 gigifurniture All Rights Reserved.</small>
            </footer>
        </main>
    </div>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "@id": "https://gigifurniture8.com#localbusiness",
        "name": "gigifurniture",
        "alternateName": "澤田鈑金",
        "url": "https://gigifurniture8.com",
        "image": "https://webftp-sv16159.xserver.jp/minkodes.com/public_html/dev.minkodes.com/wp-content/themes/gigifurniture/images/logo_gigi.svg",
        "telephone": "052-880-2946",
        "faxNumber": "052-880-2957",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "鳴海町中汐田192-2",
            "addressLocality": "名古屋市緑区",
            "addressRegion": "愛知県",
            "postalCode": "458-0801",
            "addressCountry": "JP"
        }
    }
    </script>
    <?php wp_footer(); ?>
</body>
</html>