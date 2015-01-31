<?php ob_start(); ?>
<h2><?php echo $title; _e(' on', 'df'); ?> <?php echo $cat->name; ?></h2>
<?php
    $args = array(
        'post_type' => 'faq',
        'faq_categories' => $cat->slug,
        'posts_per_page' => -1
    );
    $posts = get_posts($args);
?>
<div class="smart_accordion accod_parent faq_wrap_all smartItems">
    <?php foreach($posts as $post) { ?>

    <h3 class="accordion_title"><?php echo $post->post_title; ?></h3>
    <div class="smartItemsDetails">
        <?php echo wpautop( $post->post_content ); ?>
    </div>

    <?php } ?>
</div>
<?php $html .= ob_get_clean();