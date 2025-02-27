
<div  <?php echo get_block_wrapper_attributes(); ?>>
<?php 
   if ( ! function_exists('decode_br_entities') ) {
      function decode_br_entities($content) {
          // 使用正则表达式将 u003cbru003e 替换为 <br>
          $content = preg_replace('/u003cbru003e/', '<br>', $content);
          $content = preg_replace('/u0026/', '&', $content);
          return $content;
      }
  }
?>
<div class="dr-profile">
    <h2><?php echo decode_br_entities($attributes['title']) ?></h2>
    <div class="container">
        <div class="image-container">
            <img class="image-profile" src=<?php echo $attributes['bannerImage'] ?> alt="Dr. Julian Liew">
        </div>
        <div class="profile-content-container profile-content">
            <p class="profile-content profile-content-item">
                
                <?php       
                   echo decode_br_entities($attributes['content']);
                ?>
            </p>
            <img class="profile-content-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/plugin/bottome.png" alt="social icons" />
        </div>
    </div>
</div>
</div>

