<footer id="site-footer">
    <nav id="footer-navigation" class="footer-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'menu_id' => 'footer-menu',
        ));
        ?>
    </nav>
    <div class="site-info">
        <?php echo esc_html__('© 2023 GutenPower. Todos os direitos reservados.', 'gutenpower'); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
