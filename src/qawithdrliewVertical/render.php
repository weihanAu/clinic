<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div  <?php echo get_block_wrapper_attributes(); ?>>
    <div class="link-hero vertical">
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
            <!--  -->
            <?php 
                $post = get_post($attributes["video_url"]);
                   if ( $post ) {
                    $blocks = parse_blocks( $post->post_content ); // 解析 Gutenberg 块
                    $block = $blocks[0]["innerBlocks"][0];
                      error_log(json_encode(  $block));     
                        if ( $block['blockName'] === 'presto-player/self-hosted' ) {
                            $attrs = $block['attrs']; // 获取 Presto Player 块的所有属性
                            $video_data = [
                                'video_src'=>$attrs['src'] ?? 0,
                                'video_id' => $attrs['id'] ?? 0,
                                'preset' => $attrs['preset'] ?? [],
                                'chapters' => $attrs['chapters'] ?? [],
                                'overlays' => $attrs['overlays'] ?? [],
                                'tracks' => $attrs['tracks'] ?? [],
                                'branding' => $attrs['branding'] ?? [],
                                'blockAttributes' => $attrs,
                                'skin' => $attrs['preset']['skin'] ?? 'modern',
                                'analytics' => 'false',
                                'automations' => 'true',
                                'provider' => "self-hosted"
                            ];
                        }
                } else {
                    echo '未找到对应文章。';
                }
            ?>
            <!--  -->
            <div class="link-hero__image link-hero__image-full-width">do_shortcode(‘
        <div class="wp-block-presto-player-reusable-edit"><!--presto-player:video_id=2--><figure class="wp-block-video presto-block-video  presto-provider-self-hosted" style="--plyr-color-main: var(--presto-player-highlight-color, ); --presto-player-logo-width: 150px; ">
            <presto-player id="presto-player-1" src=<?php echo $video_data['video_src'] ?> media-title="compressed-TT-QA-branding" css="" class="presto-video-id-2 presto-preset-id-1 skin-modern hydrated ready" skin="modern" icon-url="https://theclinic.com.au/wp-content/plugins/presto-player/img/sprite.svg" preload="" playsinline="" provider="self-hosted" style="height: auto;">
                            <video controls="" preload="none">
                    <source src=<?php echo $video_data['video_src'] ?>>
                </video>
            
            </presto-player>
           </figure>		
            <script>
                    var player = document.querySelector('presto-player#presto-player-1');

                        player.video_id = <?php echo $video_data['video_id'] ?>;
                        player.preset = {"id":1,"name":"Default","slug":"default","icon":"format-video","skin":"modern","play-large":true,"rewind":true,"play":true,"fast-forward":true,"progress":true,"current-time":true,"mute":true,"volume":true,"speed":false,"pip":false,"fullscreen":true,"captions":false,"reset_on_end":true,"auto_hide":true,"show_time_elapsed":false,"captions_enabled":false,"save_player_position":true,"sticky_scroll":false,"sticky_scroll_position":"bottom right","on_video_end":"select","play_video_viewport":false,"hide_youtube":false,"lazy_load_youtube":false,"hide_logo":false,"border_radius":0,"caption_style":"","caption_background":"","is_locked":true,"cta":[""],"watermark":[""],"search":[""],"email_collection":[""],"action_bar":[""],"created_by":1,"created_at":"2024-03-03 20:12:14","updated_at":"2024-03-03 20:12:14","deleted_at":""};
                        player.chapters = <?php echo json_encode($video_data['chapters'])?>;
                        player.overlays = <?php echo json_encode($video_data['overlays'])?>;
                        player.tracks = <?php echo json_encode($video_data['tracks'])?>;
                        player.branding = <?php echo json_encode($video_data['branding'])?>;
                        player.blockAttributes = <?php echo json_encode($video_data['blockAttributes'])?>;
                        player.analytics = <?php echo $video_data['analytics']?>;
                        player.automations = <?php echo $video_data['automations']?>;
                        player.provider =<?php echo $video_data['provider'] ?>;
                                                                                                                                              player.youtube = {"noCookie":false,"channelId":"","show_count":false};
            </script>
            <script type="application/ld+json">
            </script>
            </div>
         ‘)</div>
        </div>
</div>  

<script>
   
</script>


