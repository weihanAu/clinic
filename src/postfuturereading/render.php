<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div  <?php echo get_block_wrapper_attributes(); ?>>
    <h2>future reading</h2>
    <ul>
        <li><a href=<?php echo  $attributes["post1"]["link"] ?>><?php echo $attributes["post1"]['title']['rendered'] ?></a></li>
        <li><a href=<?php echo  $attributes["post2"]["link"] ?>><?php echo $attributes["post2"]['title']['rendered'] ?></a></li>
        <li><a href=<?php echo  $attributes["post3"]["link"] ?>><?php echo $attributes["post3"]['title']['rendered'] ?></a></li>
    </ul>
</div>
<script>
    const post1 = <?php echo json_encode($attributes["post1"]); ?>;
    console.log(post1);
</script>
