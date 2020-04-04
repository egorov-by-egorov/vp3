<?php
/*
 * Template Name: Новости
 */
get_header();
the_post();
$query = new WP_Query(['cat' => '11', 'paged' => get_query_var('paged')]);

?>

<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page">
                Новости
            </h1>

            <?php if ($query) : ?>
                <div class="posts-list">


                    <?php while ($query->have_posts()):
                        $query->the_post();
                        ?>
                        <!-- post-mini-->
                        <div class="post-wrap">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="post-thumbnail"><img
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="post-content">
                                <div class="post-content__post-info">
                                    <div class="post-date"><?php the_time('d.m.Y'); ?></div>
                                </div>
                                <div class="post-content__post-text">
                                    <div class="post-title">
                                        <?php the_title(); ?>
                                    </div>
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="post-content__post-control"><a href="<?php the_permalink(); ?>"
                                                                           class="btn-read-post">Читать далее
                                        >></a></div>
                            </div>
                        </div>
                        <!-- post-mini_end-->
                    <?php endwhile; ?>

                    <div class="pagenavi-post-wrap">
                        <div class="pagenavi-post-wrap">
                            <?php wp_pagenavi(array('query' => $query)); ?>
                        </div>
                    </div>
                </div>
            <?php else: ?>

                <p>Никаких записей не найдено</p>
            <?php endif; ?>

        </div>
        <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>





