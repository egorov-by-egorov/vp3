<?php
/*
 * Template Name:Promotion
 * */
$args = array(

    'orderby' => 'name',
    'order' => 'ASC',
    'style' => 'list',
    'show_count' => 0,
    'hide_empty' => 0,
    'use_desc_for_title' => 1,
    'child_of' => 12,
    'feed' => '',
    'feed_type' => '',
    'feed_image' => '',
    'exclude' => '',
    'exclude_tree' => '',
    'include' => '',
    'hierarchical' => true,
    'title_li' => __('Categories'),
    'number' => NULL,
    'echo' => 1,
    'depth' => 0,
    'current_category' => 0,
    'pad_counts' => 0,
    'taxonomy' => 'category',
    'walker' => 'Walker_Category',
    'hide_title_if_empty' => false,
    'separator' => '<br />',
);
$category = get_categories($args);

get_header();
the_post();
?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <h1 class="title-page"><?php the_title() ?></h1>
                <?php foreach ($category as $item):
                    $cat_link = get_category_link($item->cat_ID);
                    ?>
                    <div class="post-title">
                        <a href="<?php echo $cat_link; ?>" class="btn-read-post"><?php echo $item->name ?></a><br>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>