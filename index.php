<?php /* Template Name: Beginnings */ ?>

<?php get_header(); ?>

<div class="intro-section">
  <div class="background-image-container">
    <div class="background-image" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('nextevo_home_introduction-background-image')) ?>)">
    </div>
  </div>
  <div class="content-container container">
    <h1>
      <?php echo get_theme_mod('nextevo_home_introduction-headline'); ?>
    </h1>
    <p>
      <?php echo get_theme_mod('nextevo_home_introduction-text'); ?>
    </p>
  </div>
</div>
<!-- Zero Waste -->
<div class="zero-waste">
  <div class="block__item_wrapper block__item_wrapper-1 container">
    <h2 class="desktop-h2 zero-waste-title">
      <?php echo get_theme_mod('nextevo_home_zero-waste-headline'); ?>
    </h2>
    <h2 class="mobile-h2 zero-waste-title"> <?php echo get_theme_mod('nextevo_home_zero-waste-headline'); ?></h2>
    <p class="zero-waste-paragraph">
      <?php echo get_theme_mod('nextevo_home_zero-waste-text'); ?>
    </p>
  </div>
  <div class="block__item_wrapper block__item_wrapper-2 container">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('nextevo_home_zero-waste-image-1')) ?>" alt="Zero Waste Image" loading="lazy" class="zero-waste-image-1 zero-waste-image" />
  </div>
  <div class="block__item_wrapper block__item_wrapper-3 container">
    <div class="block__item">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('nextevo_home_zero-waste-image-2')) ?>" alt="Zero Waste Image" loading="lazy" class="zero-waste-image-2 zero-waste-image" />
      <div class="content-container">
        <h3><?php echo get_theme_mod('nextevo_home_zero-waste-image-2-title'); ?></h3>
        <p class="title"><?php echo get_theme_mod('nextevo_home_zero-waste-image-2-subtitle'); ?></p>
        <p class="subtitle"><?php echo get_theme_mod('nextevo_home_zero-waste-image-3-text'); ?></p>
      </div>
    </div>
  </div>
  <div class="block__item_wrapper block__item_wrapper-4 container">
    <div class="block__item">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('nextevo_home_zero-waste-image-3')) ?>" alt="Zero Waste Image" loading="lazy" class="zero-waste-image-3 zero-waste-image" />
      <div class="content-container">
        <h3><?php echo get_theme_mod('nextevo_home_zero-waste-image-3-title'); ?></h3>
        <p class="title"><?php echo get_theme_mod('nextevo_home_zero-waste-image-3-subtitle'); ?></p>
        <p class="subtitle"><?php echo get_theme_mod('nextevo_home_zero-waste-image-3-text'); ?></p>
      </div>
    </div>
  </div>
  <div class="block__item_wrapper block__item_wrapper-5 container">
    <div class="block__item">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('nextevo_home_zero-waste-image-4')) ?>" alt="Zero Waste Image" loading="lazy" class="zero-waste-image-4 zero-waste-image" />
      <div class="content-container">
        <p class="subtitle"><?php echo get_theme_mod('nextevo_home_zero-waste-image-4-subtitle'); ?></p>
        <h3><?php echo get_theme_mod('nextevo_home_zero-waste-image-4-title'); ?></h3>
        <p class="subtitle"><?php echo get_theme_mod('nextevo_home_zero-waste-image-4-text'); ?></p>
      </div>
    </div>
  </div>
</div>
<!-- End Zero Waste -->
<!-- Slide -->
<div class="shelf-slider-section">
  <div class="shelf-slide shelf-slide-active" data-index="title-container-1">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('nextevo_home_shelf-slider-item-1-background-image')) ?>" class="img" />
    <div class="title-container title-container-1">
      <div class="title">
        <div><?php echo get_theme_mod('nextevo_home_shelf-slider-item-1-headline'); ?></div>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() ?>/assets/imgs//arrow-circle-outline.svg" class="arrow-icon" />
      </div>
    </div>

    <div class="content-container">
      <h2><?php echo get_theme_mod('nextevo_home_shelf-slider-item-1-title'); ?></h2>
      <p>
        <?php echo get_theme_mod('nextevo_home_shelf-slider-item-1-text'); ?>
      </p>
      <button><a href="<?php echo get_theme_mod('nextevo_home_shelf-slider-item-1-url'); ?>">View Our Textiles</a></button>
    </div>
  </div>
  <div class="shelf-slide" data-index="title-container-2">
    <div class="title-container title-container-2">
      <div class="title">
        <div><?php echo get_theme_mod('nextevo_home_shelf-slider-item-2-headline'); ?></div>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-circle-outline.svg" class="arrow-icon" />
      </div>
    </div>

    <img src="<?php echo wp_get_attachment_url(get_theme_mod('nextevo_home_shelf-slider-item-2-background-image')) ?>" class="img" />
    <div class="content-container">
      <h2><?php echo get_theme_mod('nextevo_home_shelf-slider-item-2-title'); ?></h2>
      <p>
        <?php echo get_theme_mod('nextevo_home_shelf-slider-item-2-text'); ?>
      </p>
      <button><a href="#">View Our Textiles</a></button>
    </div>
  </div>
  <div class="shelf-slide" data-index="title-container-3">
    <div class="title-container title-container-3">
      <div class="title">
        <div><?php echo get_theme_mod('nextevo_home_shelf-slider-item-3-headline'); ?></div>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-circle-outline.svg" class="arrow-icon" />
      </div>
    </div>

    <img src="<?php echo wp_get_attachment_url(get_theme_mod('nextevo_home_shelf-slider-item-3-background-image')) ?>" class="img" />
    <div class="content-container">
      <h2><?php echo get_theme_mod('nextevo_home_shelf-slider-item-3-title'); ?></h2>
      <p>
        <?php echo get_theme_mod('nextevo_home_shelf-slider-item-3-text'); ?>
      </p>
      <button><a href="#">View Our Textiles</a></button>
    </div>
  </div>
</div>
<!-- Slide -->
<div class="space" style="height: 150px; background-color: #fff"></div>
<!-- farming-connection -->
<div class="farming-connection-section">
  <div class="farming-connection__block-item container" style="
          background-image: url(<?php echo get_template_directory_uri() ?>/assets/imgs/home/farming-connection-circle.svg);
        ">
    <div class="title-one">
      ENVIRONMENTAL <br />
      IMPACT
    </div>
    <div class="title-two">
      <span>SOCIAL</span>
      <span>IMPACT</span>
    </div>
    <div class="content-container">
      <h2 class="desktop-h2"><?php echo get_theme_mod('nextevo_home_farming-connection-headline'); ?></h2>
      <h2 class="mobile-h2"><?php echo get_theme_mod('nextevo_home_farming-connection-headline'); ?></h2>
      <p>
        <?php echo get_theme_mod('nextevo_home_farming-connection-text'); ?>
      </p>
      <button>Find Out More</button>
    </div>
    <div class="farming-connection-img1 farming-img-border">
      <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/home/farming-connection-1.png" alt="image" loading="lazy" />
      <div style="
              background-image: url(<?php echo get_template_directory_uri() ?>/assets/imgs/home/farming-connection-overlay-bg.png);
            " class="overlay-content">
        <div>Fight Climate Change</div>
        <a href="#">Read More</a>
      </div>
    </div>
    <div class="farming-connection-img2 farming-img-border">
      <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/home/farming-connection-2.png" alt="image" loading="lazy" />
      <div style="
              background-image: url(<?php echo get_template_directory_uri() ?>/assets/imgs/home/farming-connection-overlay-bg.png);
            " class="overlay-content">
        <div>Two Farming</div>
        <a href="#">Read More</a>
      </div>
    </div>
    <div class="farming-connection-img3 farming-img-border">
      <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/home/farming-connection-3.png" alt="image" loading="lazy" />
      <div style="
              background-image: url(<?php echo get_template_directory_uri() ?>/assets/imgs/home/farming-connection-overlay-bg.png);
            " class="overlay-content">
        <div>Three Farming</div>
        <a href="#">Read More</a>
      </div>
    </div>
    <div class="farming-connection-img4 farming-img-border">
      <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/home/farming-connection-4.png" alt="image" loading="lazy" />
      <div style="
              background-image: url(<?php echo get_template_directory_uri() ?>/assets/imgs/home/farming-connection-overlay-bg.png);
            " class="overlay-content">
        <div>Four Farming</div>
        <a href="#">Read More</a>
      </div>
    </div>
    <div class="farming-connection-img5 farming-img-border">
      <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/home/farming-connection-5.png" alt="image" loading="lazy" />
      <div style="
              background-image: url(<?php echo get_template_directory_uri() ?>/assets/imgs/home/farming-connection-overlay-bg.png);
            " class="overlay-content">
        <div>Five Farming</div>
        <a href="#">Read More</a>
      </div>
    </div>
  </div>
</div>
<div class="space" style="height: 150px; background-color: #fff"></div>
<!-- end farming-connection -->
<div style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/imgs/home/quote-bg.png)" class="quote-section">
  <p class="desktop-content">
   <?php echo get_theme_mod('nextevo_home_quote-text'); ?>
  </p>
  <p class="mobile-content">
    <?php echo get_theme_mod('nextevo_home_quote-text'); ?>
  </p>
</div>

<!-- Latest new & event -->
<div class="latest-new-event-section">
  <div class="container">
    <h2>Latest News & Events</h2>
    <div class="image">
      <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/home/latest-news.png" alt="Latest new and events image" loading="lazy" />
    </div>
    <div class="content-container">
      <a href="#" class="view-all">View All</a>
      <div class="inner-content">
        <div class="latest-news-title">
          Bershka’s pineapple-leaf fashion, the beginning for Singapore
          startup
        </div>
        <p class="latest-news-description">
          Harold Koh tapped the denim jacket that he laid on a conference
          table, wide arcs of contrast stitching swooping across its
          surface. A set of corset laces…
        </p>
        <div class="arrow-container">
          <div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-circle-green-left.svg" class="left-arrow"/>
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-circle-green-right.svg" class="right-arrow"/>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
<!-- End Latest new & event -->

<!-- Testimonials -->
<div class="testimonials">
  <div style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/imgs/home/testimonials.svg)" class="bg"></div>
  <div class="container">
    <h2><?php echo get_theme_mod('nextevo_home_testimonials-headline'); ?></h2>
    <div class="block__items-list">
      <div class="block__item">
        <div class="title"><?php echo get_theme_mod('nextevo_home_testimonials-item-1-brand-name'); ?></div>
        <p>
          <?php echo get_theme_mod('nextevo_home_testimonials-item-1-text'); ?>
        </p>
        <div class="subtitle"><?php echo get_theme_mod('nextevo_home_testimonials-item-1-name'); ?></div>
      </div>
      <div class="block__item">
        <div class="title"><?php echo get_theme_mod('nextevo_home_testimonials-item-1-brand-name'); ?></div>
        <p>
          <?php echo get_theme_mod('nextevo_home_testimonials-item-2-text'); ?>
        </p>
        <div class="subtitle"><?php echo get_theme_mod('nextevo_home_testimonials-item-2-name'); ?></div>
      </div>
      <div class="block__item">
        <div class="title"><?php echo get_theme_mod('nextevo_home_testimonials-item-1-brand-name'); ?></div>
        <p>
          <?php echo get_theme_mod('nextevo_home_testimonials-item-3-text'); ?>
        </p>
        <div class="subtitle"><?php echo get_theme_mod('nextevo_home_testimonials-item-3-name'); ?></div>
      </div>
    </div>
    <div class="view-all-testimonials">
      <a href="<?php echo get_theme_mod('nextevo_home_testimonials-link'); ?>">View All Testimonials</a>
    </div>
  </div>
</div>
<!-- End Testimonials -->
<!-- Collaborators -->
<div s style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('nextevo_home_collaborators-background-image')) ?>)" class="collaborators-section">
  <div class="content-container">
    <p>
      <?php echo get_theme_mod('nextevo_home_collaborators-text'); ?>
    </p>
    <h3>  <?php echo get_theme_mod('nextevo_home_collaborators-headline'); ?></h3>
    <button>
      <a href="#">View Our Collaborators</a>
    </button>
  </div>
</div>
<!-- End  Collaborators -->

<?php get_footer(); ?>