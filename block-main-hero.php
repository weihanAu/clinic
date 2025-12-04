<div class="hero-main" style="background: #ffffff;">

<?php
  // Get the current URL
  $current_url = home_url(add_query_arg([], $wp->request));

  // Check if the current URL matches '/get-to-know-us/'
  if ($current_url === home_url('/get-to-know-us')) {
      // Do something if the URL is exactly '/get-to-know-us/'
?>
    <div class="hero-main__image"><img src="<?php block_field('hero-image'); ?>" alt="<?php block_field('hero-image-description'); ?>" /></div> 
<?php 
  } else {
?>
    <div class="hero-main__image">
      <video autoplay muted playsinline loop style="width:100%">
          <source src="https://stgtheclinic.wpenginepowered.com/wp-content/uploads/2025/08/compressed-The-Clinic-Website-4k_compressed.mp4" type="video/mp4">
      </video>
    </div>
<?php
  }
?>


    <div class="hero-main__content">
        <div class="hero-main__content__container">
            <h1 class="hero-main__headline">
                <?php block_field('headline'); ?>
            </h1>
            <?php block_field('paragraph'); ?>
            <?php if(block_value('call-to-action-text') != ''){ ?>
              <a class="cta" href="<?php block_field('call-to-action-link')?>">
                <?php block_field('call-to-action-text')?>
              </a>
            <?php } ?>
        </div>
        <div class="hero-main__content__swirl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration/hero-swirl.svg" alt="hero swirl device" /></div>
    </div>
</div>
