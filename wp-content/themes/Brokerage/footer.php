<?php
/**
 * Footer
 */
?>
</main><!-- #content -->

<footer class="site-footer">
  <div class="container footer-grid">
    <nav class="footer-nav" aria-label="<?php esc_attr_e('Footer', 'brokerage'); ?>">
      <?php
      wp_nav_menu([
        'theme_location' => 'footer',
        'menu_id'        => 'footer-menu',
        'container'      => false,
        'fallback_cb'    => false,
      ]);
      ?>
    </nav>

    <div class="footer-copy">
      &copy; <?php echo date_i18n('Y'); ?> <?php bloginfo('name'); ?>.
      <?php esc_html_e('All rights reserved.', 'brokerage'); ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
