<?php ob_start(); ?>
<?php echo $args['before_title'] . apply_filters( 'widget_title', $title ). $args['after_title']; ?>
<br>
<?php
    $args = array(
        'post_type' => 'faq',
        'faq_categories' => $cat->slug,
        'posts_per_page' => -1
    );
    $posts = get_posts($args);
?>
<div class="smart_widget_accordion faq_wrap_all smartItems" id="faq_<?php echo str_replace(' ', '_', $cat->slug); ?>">
    <?php foreach($posts as $post) { ?>
        <h3 class="accordion_title"><?php echo $post->post_title; ?></h3>
        <div class="smartItemsDetails">
            <?php echo $post->post_content; ?>
        </div>
    <?php } ?>
</div>
<?php $html .= ob_get_clean();