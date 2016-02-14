
  <footer>

    <nav>
      <!-- print a menu, and pass args to the menu function to tell what kind of menu it is. Then i can reference the menu from WP backoffice and control it. -->
      <?php
      $args = array(
        'theme_location' => 'footer'
      );
      ?>
      <?php wp_nav_menu(); ?>
    </nav>

    <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
  </footer>

  <?php wp_footer(); ?>
  </body>
</html>
