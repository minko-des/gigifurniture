<section class="p-sidebar">
    <nav class="sidebar_nav fadeIn">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'sidebar-nav',
                'menu_class'     => 'menu',
                'container'      => false,
                'walker'         => new Custom_Walker_Nav_Menu(),
            ));
        ?>
    </nav>
    <div class="link-unit">
        <?php get_template_part('template-parts/contact-btn--small'); ?>
        <?php get_template_part('template-parts/insta-icon'); ?>
    </div>
</section>