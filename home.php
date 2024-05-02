<?php
/*
Template Name: home

*/
?>

<style>
    .banner {
  min-height: 100vh;
  background-image: url("<?php the_field('banner_image'); ?>");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  overflow: hidden;
}
</style>

<?php get_header();?>

      <!-- banner -->
      <section class="banner">
        <div class="container">
          <div class="banner-inner">
            <h1 class="banner__title">
           
              <?php the_field('banner_title'); ?>
            </h1>
            <a href="#" class="contact-us">зв’язатись з нами</a>
          </div>
        </div>
      </section>
      <!-- about -->
      <section class="about-us content py-content">
        <div class="container">
          <div class="about-inner">
            <div class="left">
              <div class="first-image">
                <img src="<?php the_field('first_image'); ?>" alt="about" />
              </div>
              <div class="second-image">
              <img src="<?php the_field('second_image'); ?>" alt="about" />
              </div>
            </div>
            <div class="right">
              <h2 class="about-title"><?php the_field('about_title'); ?></h2>
              <div class="about-text-block">
                <p class="about-text">
                <?php the_field('about_text_1'); ?>
                </p>
                <p class="about-text">
                <?php the_field('about_text_1'); ?>
                </p>
              </div>
              <a href="#" class="about-read-more"
                ><span>читати більше</span>
                <svg
                  width="9"
                  height="9"
                  viewBox="0 0 9 9"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <mask
                    id="mask0_0_564"
                    style="mask-type: alpha"
                    maskUnits="userSpaceOnUse"
                    x="0"
                    y="0"
                    width="9"
                    height="9"
                  >
                    <rect width="9" height="9" fill="#D9D9D9" />
                  </mask>
                  <g mask="url(#mask0_0_564)">
                    <path
                      d="M3.18201 1.3501L6.36399 4.53208L3.18201 7.71406"
                      stroke="#1E836B"
                      stroke-width="2"
                    />
                  </g>
                </svg>
              </a>
              <div class="third-image">
              <img src="<?php the_field('third_image'); ?>" alt="about" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- company -->
      <section class="company mx-content py-content">
        <div class="container">
          <h2 class="company-title">
          <?php the_field('digital_title'); ?><span class="green"><?php the_field('digital_title_color'); ?></span>
          </h2>
        </div>
        <div class="section-wrap">
          <div class="container">
            <div class="company-inner">
              <div class="company-card">
                <h3 class="card-title"><?php the_field('first_card_count'); ?></h3>
                <p class="card-bg-text"><?php the_field('first_card_title'); ?></p>
                <p class="card-text">
                <?php the_field('first_card_text'); ?>
                </p>
              </div>
              <div class="company-card">
                <h3 class="card-title"><?php the_field('second_card_count'); ?></h3>
                <p class="card-bg-text"><?php the_field('second_card_title'); ?></p>
                <p class="card-text">
                <?php the_field('second_card_text'); ?>
                </p>
              </div>
              <div class="company-card">
                <h3 class="card-title"><?php the_field('third_card_count'); ?></h3>
                <p class="card-bg-text"> <?php the_field('third_card_title'); ?></p>
                <p class="card-text">
                <?php the_field('third_card_text'); ?>
                </p>
              </div>
              <div class="company-card">
                <h3 class="card-title"><?php the_field('fourth_card_count'); ?></h3>
                <p class="card-bg-text"><?php the_field('fourth_card_title'); ?></p>
                <p class="card-text">
                <?php the_field('fourth_card_text'); ?>
                </p>
              </div>
            </div>
          </div>
          <div class="company-image">
            <img src="<?php the_field('digital_image'); ?>" alt="digital company" />
          </div>
          <a href="#" class="green all-digital"
            >Дивитись всі
            <span
              ><svg
                width="9"
                height="9"
                viewBox="0 0 9 9"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <mask
                  id="mask0_0_564"
                  style="mask-type: alpha"
                  maskUnits="userSpaceOnUse"
                  x="0"
                  y="0"
                  width="9"
                  height="9"
                >
                  <rect width="9" height="9" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_0_564)">
                  <path
                    d="M3.18201 1.3501L6.36399 4.53208L3.18201 7.71406"
                    stroke="#1E836B"
                    stroke-width="2"
                  />
                </g></svg></span
          ></a>
        </div>
      </section>
      <!-- services -->
      <section class="service mx-content">
        <div class="container-fluid">
          <h2 class="service-title"><?php the_field('services_title'); ?></h2>
          <div class="service-inner">
            <a href="#" class="service-card">
              <img src="<?php the_field('first_service_image'); ?>" alt="service" />
              <span class="service-card-title"
                ><?php the_field('first_image_text'); ?></span
              >
              <span class="youtube-icon"
                ><svg
                  width="50"
                  height="40"
                  viewBox="0 0 50 40"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M20.6055 15.3193V24.6807L28.0956 20L20.6055 15.3193Z"
                    fill="#1E836B"
                  />
                  <path
                    d="M42.6758 0.957031H7.32422C3.28447 0.957031 0 4.24287 0 8.28125V31.7188C0 35.7571 3.28447 39.043 7.32422 39.043H42.6758C46.7155 39.043 50 35.7571 50 31.7188V8.28125C50 4.24287 46.7155 0.957031 42.6758 0.957031ZM17.6758 29.9678V10.0322L33.6231 20L17.6758 29.9678Z"
                    fill="#1E836B"
                  />
                </svg>
              </span>
            </a>
            <a href="#" class="service-card">
              <img src="<?php the_field('second_service_image'); ?>" alt="service" />
              <span class="service-card-title"
                ><?php the_field('second_image_text'); ?></span
              >
              <span class="youtube-icon"
                ><svg
                  width="50"
                  height="40"
                  viewBox="0 0 50 40"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M20.6055 15.3193V24.6807L28.0956 20L20.6055 15.3193Z"
                    fill="#1E836B"
                  />
                  <path
                    d="M42.6758 0.957031H7.32422C3.28447 0.957031 0 4.24287 0 8.28125V31.7188C0 35.7571 3.28447 39.043 7.32422 39.043H42.6758C46.7155 39.043 50 35.7571 50 31.7188V8.28125C50 4.24287 46.7155 0.957031 42.6758 0.957031ZM17.6758 29.9678V10.0322L33.6231 20L17.6758 29.9678Z"
                    fill="#1E836B"
                  />
                </svg>
              </span>
            </a>
            <a href="#" class="service-card">
              <img src="<?php the_field('third_service_image'); ?>" alt="service" />
              <span class="service-card-title"><?php the_field('third_image_text'); ?></span>
            </a>
            <a href="#" class="service-card">
              <img src="<?php the_field('fourth_service_image'); ?>" alt="service" />
              <span class="service-card-title"><?php the_field('fourth_image_text'); ?></span>
            </a>
            <a href="#" class="service-card">
              <img src="<?php the_field('spotty_service_image'); ?>" alt="service" />
              <span class="service-card-title"><?php the_field('spotty_image_text'); ?></span>
            </a>
            <a href="#" class="service-card">
              <img src="<?php the_field('sixth_service_image'); ?>" alt="service" />
              <span class="service-card-title"><?php the_field('sixth_image_text'); ?></span>
            </a>
          </div>
        </div>
      </section>
      <!-- projects -->
      <section class="project mx-content">
        <div class="container">
          <h2 class="project-title"><?php the_field('projects_title'); ?></h2>
        </div>
        <div class="project-inner-container">
          <img src="<?php the_field('projects_banner'); ?>" alt="projects" />
        </div>
        <div class="container">
          <a href="#" class="all-project">Дивитись всі проекти</a>
        </div>
      </section>
      <!-- customers -->
      <section class="customer py-content">
        <div class="container">
          <div class="customer-wrap">
            <span class="map">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/map.svg" alt="map" />
            </span>
            <div class="customer-inner">
              <h2 class="customer-title">
              <?php the_field('customers_title'); ?><br />
                <span class="green"><?php the_field('customers_title_color'); ?><br /></span>
              </h2>
              <p class="customer-text">
              <?php the_field('customers_text'); ?>
              </p>
              <div class="customers-block">
                <div class="customer-card">
                  <img src="<?php the_field('customers_image_1'); ?>" alt="customers" />
                </div>
                <div class="customer-card">
                <img src="<?php the_field('customers_image_2'); ?>" alt="customers" />

                </div>
                <div class="customer-card">
                <img src="<?php the_field('customers_image_3'); ?>" alt="customers" />

                </div>
                <div class="customer-card">
                <img src="<?php the_field('customers_image_4'); ?>" alt="customers" />

                </div>
                <div class="customer-card">
                <img src="<?php the_field('customers_image_5'); ?>" alt="customers" />

                </div>
                <div class="customer-card">
                <img src="<?php the_field('customers_image_6'); ?>" alt="customers" />

                </div>
                <div class="customer-card">
                <img src="<?php the_field('customers_image_7'); ?>" alt="customers" />

                </div>
                <div class="customer-card">
                <img src="<?php the_field('customers_image_8'); ?>" alt="customers" />

                </div>
                <div class="customer-card">
                <img src="<?php the_field('customers_image_9'); ?>" alt="customers" />

                </div>
                <div class="customer-card">
                <img src="<?php the_field('customers_image_10'); ?>" alt="customers" />

                </div>
                <div class="customer-card">
                <img src="<?php the_field('customers_image_11'); ?>" alt="customers" />

                </div>
                <div class="customer-card">
                <img src="<?php the_field('customers_image_12'); ?>" alt="customers" />

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php get_footer()?>

