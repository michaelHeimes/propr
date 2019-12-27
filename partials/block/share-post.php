<?php 
    $author = get_the_author();
?>

<div class="post-share content-block">
    <p class="author">By: <?php echo $author; ?></p>
    <p><?php the_date('m/d/Y'); ?></p>
    <div class="addthis_inline_share_toolbox">
        <h5>Share On:</h5>
    </div>
</div>