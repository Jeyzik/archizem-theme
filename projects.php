<?php
/*
Template Name: projects

*/
?>

<?php get_header();?>

     <!-- projects -->
     <section class="project-p">
        <div class="container">
          <h2 class="project-title">Проекти</h2>
          <p class="project-text">
            Нижче представлені деякі з робіт, виконаних компанією за останнє
            півріччя
          </p>
          <div class="search-btn">
            <a href="#" class="search-item search-active">Всі</a>
            <a href="#" class="search-item">фільтр</a>
            <a href="#" class="search-item">фільтр</a>
            <a href="#" class="search-item">фільтр</a>
            <a href="#" class="search-item">фільтр</a>
            <a href="#" class="search-item">фільтр</a>
            <a href="#" class="search-item">фільтр</a>
            <a href="#" class="search-item">фільтр</a>
          </div>
        </div>
        <div class="project-container">
          <div class="project-items-grid">

          <?php
            global $post;

            $myposts = get_posts([
              'numberposts' => 18
            ]);

            if( $myposts ){
              foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>
                <div class="project-item">
                  <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/project-item.jpg" alt="project item" /> -->
                    <?php the_post_thumbnail(
                      array(100, 100),
                      array(
                        'class' => 'w-h'
                      ),
                    ); ?>  
                  <div class="project-item-info">
                      <?php the_content(); ?>
                    </div>
                </div>
                <?php
              }
            } else {
              // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
          ?>

            
            
          </div>
        </div>
      </section>

      <?php get_footer()?>