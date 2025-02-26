<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div  <?php echo get_block_wrapper_attributes(); ?>>
    <div class="link-hero">
            <div class="link-hero__content link-hero__content_custom qa-item left-item">
               <h2><?php echo $attributes["bannerTitle"] ?></h2>
                <h3><?php echo $attributes["smallTitle"] ?></h3>
                <p>
                <?php echo $attributes["paragraph"] ?>
                </p>
                <a target="_blank" class="ma" href=<?php echo $attributes["hrf"] ?>>MORE ABOUT THIS PROCEDURE</a>
                <div class='dr-youtube'>
                    <a target="_blank"  href="https://www.youtube.com/@drjulianliew">
                        <i class="fa fa-youtube-play" style="font-size:36px;color:red;display:inline-block"></i>
                        <span class="fa-sub">SUBSCRIBE FOR MORE INSIGHTS FROM DR LIEW</span>
                    </a>
                </div>
            </div>

            <div class="link-hero__image link-hero__image-full-width">do_shortcode(‘
        <div class="wp-block-presto-player-reusable-edit"><!--presto-player:video_id=2--><figure class="wp-block-video presto-block-video  presto-provider-self-hosted" style="--plyr-color-main: var(--presto-player-highlight-color, ); --presto-player-logo-width: 150px; ">
            <presto-player id="presto-player-1" src=<?php echo $attributes["video_url"] ?> media-title="compressed-TT-QA-branding" css="" class="presto-video-id-2 presto-preset-id-1 skin-modern hydrated ready" skin="modern" icon-url="https://theclinic.com.au/wp-content/plugins/presto-player/img/sprite.svg" preload="" playsinline="" provider="self-hosted" style="height: auto;">
                            <video controls="" preload="none">
                    <source src=<?php echo $attributes["video_url"] ?>>
                </video>
            

            </presto-player>
           </figure>		<script>
                    var player = document.querySelector('presto-player#presto-player-1');
                    player.video_id = 2;
                                                        player.preset = {"id":1,"name":"Default","slug":"default","icon":"format-video","skin":"modern","play-large":true,"rewind":true,"play":true,"fast-forward":true,"progress":true,"current-time":true,"mute":true,"volume":true,"speed":false,"pip":false,"fullscreen":true,"captions":false,"reset_on_end":true,"auto_hide":true,"show_time_elapsed":false,"captions_enabled":false,"save_player_position":true,"sticky_scroll":false,"sticky_scroll_position":"bottom right","on_video_end":"select","play_video_viewport":false,"hide_youtube":false,"lazy_load_youtube":false,"hide_logo":false,"border_radius":0,"caption_style":"","caption_background":"","is_locked":true,"cta":[""],"watermark":[""],"search":[""],"email_collection":[""],"action_bar":[""],"created_by":1,"created_at":"2024-03-03 20:12:14","updated_at":"2024-03-03 20:12:14","deleted_at":""};
                                                                        player.chapters = [];
                                                                        player.overlays = [{"startTime":"0:05","endTime":"4:38","text":"Book an Abdominoplasty Consultation","link":{"url":"https:\/\/theclinic.com.au\/get-to-know-us\/#contact","type":"URL","id":"https:\/\/theclinic.com.au\/get-to-know-us\/#contact"},"position":"top-left","color":"#fff","backgroundColor":"#000","opacity":75,"id":"T18HeKr0Q7"}];
                                                                        player.tracks = [];
                                                                        player.branding = {"player_css":"","color":"rgba(43,51,63,.7)","logo_width":150};
                                                                        player.blockAttributes = {"playsInline":true,"id":2,"attachment_id":834,"src":"https:\/\/theclinic.com.au\/wp-content\/uploads\/2024\/03\/compressed-TT-QA-branding.mp4","preset":1,"chapters":[{"time":"0:01","title":"What is an Abdominoplasty?"},{"time":"0:24","title":"How do you do your Abdominoplasty?"},{"time":"1:09","title":"Who is the ideal candidate for a tummy tuck (Abdominoplasty)?"},{"time":"1:45","title":"What does the surgery involve?"},{"time":"2:14","title":"What is the recovery like post Abdominoplasty surgery?"},{"time":"2:37","title":"What restrictions do I have after surgery?"},{"time":"3:35","title":"Are the results from a tummy tuck long lasting?"},{"time":"4:15","title":"What can I expect with Abdominoplasty surgery with Dr Liew?"}],"overlays":[{"startTime":"0:05","endTime":"4:38","text":"Book an Abdominoplasty Consultation","link":{"url":"https:\/\/theclinic.com.au\/get-to-know-us\/#contact","type":"URL","id":"https:\/\/theclinic.com.au\/get-to-know-us\/#contact"},"position":"top-left","color":"#fff","backgroundColor":"#000","opacity":75,"id":"T18HeKr0Q7"}],"visibility":"public","color":"#00b3ff","mutedPreview":{"enabled":false,"captions":false},"mutedOverlay":{"enabled":false,"src":"","width":200,"focalPoint":{"x":0.5,"y":0.5}},"mutedOverlayType":"text","mutedOverlayText":"Click to play","mutedOverlayImageWidth":200,"tracks":[],"title":"compressed-TT-QA-branding"};
                                                                                                    player.skin = "modern";
                                                                        player.analytics = false;
                                                                        player.automations = true;
                                                                        player.provider = "self-hosted";
                                                                                                                                                                                        player.youtube = {"noCookie":false,"channelId":"","show_count":false};
                                            </script>
                        <script type="application/ld+json">
                   	  </script>
                </div>
         ‘)</div>
        </div>
</div>  



