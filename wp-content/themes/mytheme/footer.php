
<footer id="footer">
    <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-bar',
                )
            );
        ?>
<?php wp_footer();?>
</footer>
</body>
</html>