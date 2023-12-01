</main>
<footer>
    <p>© Katja Bleibler – 2023</p>
    <?php  wp_footer();  ?>

    <div class="footer-widget-area">
        <?php
        // Hier wird das Widget-Menü in der Fußzeile hinzugefügt
        if (is_active_sidebar('footer_widget_menu')) {
            dynamic_sidebar('footer_widget_menu');
        }
        ?>


        <?php
        if (has_nav_menu('footer_menu_1')) {
            wp_nav_menu(array(
                'theme_location' => 'footer_menu_1',
                'menu_class' => 'footer-menu', // Du kannst die Klasse anpassen
            ));
        }

        ?>
    </div>

</footer>

</body>
</html>
