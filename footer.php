      <!-- footer -->
      <footer class="footer">
        <div class="top">
          <div class="container">
            <div class="footer-inner">
              <span class="logo">
              <?php the_custom_logo(); ?>
              </span>

              <?php
                    wp_nav_menu(array(
                        'container' => 'ul', 
                        'container_class' => 'navigate flex',
                        'menu_class' => 'item-menu navigate flex', 
                    ));
                ?>
              <div class="social-media">
                <a href="#" class="social-item">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="facebook" />
                </a>
                <a href="#" class="social-item">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="instagram" />
                </a>
                <a href="#" class="social-item">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/youtube_f.svg" alt="youtube" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom">
          <div class="container">
            <div class="footer-inner">
              <span> © 2020 All rights reserved</span>
              <a href="#">Privacy Policy </a>
              <a href="#">Terms of payment and delivery</a>
              <span
                >Website developed:
                <a href="#" class="black"
                  >megasite<span class="red-dot">.</span></a
                ></span
              >
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
  <?php wp_footer(); ?>
</html>