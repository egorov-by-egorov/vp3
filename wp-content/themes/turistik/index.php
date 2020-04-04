<?php get_header(); ?>
    <div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page">
                <?php if (is_tag()) {
                    single_tag_title();
                } elseif (is_search()) {
                    echo 'Результаты поиска для &quot;' . get_search_query() . '&quot;';
                } else {
                    echo "Последние новости и акции из мира туризма";
                } ?></h1>

            <?php if (have_posts()): ?>
                <div class="posts-list">


                    <?php while (have_posts()): the_post(); ?>
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


                </div>
                <div class="pagenavi-post-wrap">
                    <?php echo paginate_links([
                        'prev_next' => true,
                        'prev_text' => '<i class="icon icon-angle-double-left"></i>',
                        'next_text' => '<i class="icon icon-angle-double-right"></i>',
                    ]); ?>
                </div>
            <?php else: ?>

                <p>Никаких записей не найдено</p>
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>