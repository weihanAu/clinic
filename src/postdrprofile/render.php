
<div  <?php echo get_block_wrapper_attributes(); ?>>
<div class="dr-profile">
    <h2>Dr Julian Liew - Specialist Plastic Surgeon in East Melbourne</h2>
    <div class="container">
        <div class="image-container">
            <img class="image-profile" src=<?php echo $attributes['bannerImage'] ?> alt="Dr. Julian Liew">
        </div>
        <p class="profile-content">
            <?php 
                echo $attributes['content']
            ?>
        </p>
    </div>
</div>
</div>
