<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div  <?php echo get_block_wrapper_attributes(); ?>>
  <section class="specialist-section">
        <h2>Meet Our Specialist Surgeon</h2>
        <div class="surgeon-profile">
            <div class="profile-card">
                <img src="<?php echo $attributes["imageUrl1"]?>" class="profile-image"> 
                  <div class="profile-content">
                  <div class="profile-details">
                     <h3><?php echo $attributes["title1"]?></h3>
                     <p><?php echo $attributes["wysiwygContent"]?></p>
                  </div>
                  <div class="btn-container">
                   <button class="view-profile-btn">View Profile</button>
                  </div>  
                </div>
            </div>
            <div class="profile-card">
                 <img src="<?php echo $attributes["imageUrl2"]?>" class="profile-image"> 
                 <div class="profile-content">
                  <div class="profile-details">
                     <h3><?php echo $attributes["title2"]?></h3>
                    <p><?php echo $attributes["wysiwygContent2"]?></p>
                  </div>
                  <div class="btn-container">
                   <button class="view-profile-btn">View Profile</button>
                  </div>  
                </div>
            </div>
        </div>
    </section>
</div>
