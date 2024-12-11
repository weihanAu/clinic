
<div  <?php echo get_block_wrapper_attributes(); ?>>
<div class="dr-profile">
    <h2><?php echo $attributes['title'] ?></h2>
    <div class="container">
        <div class="image-container">
            <img class="image-profile" src=<?php echo $attributes['bannerImage'] ?> alt="Dr. Julian Liew">
        </div>
        <div class="profile-content-container profile-content">
            <p class="profile-content profile-content-item">
                <?php 
                    echo $attributes['content']
                ?>
            </p>
            <img class="profile-content-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/plugin/bottome.png" alt="social icons" />
        </div>
    </div>
</div>
</div>
