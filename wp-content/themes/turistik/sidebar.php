<!-- sidebar-->
<div class="sidebar">
    <?php if ($tags = get_terms(['taxonomy' => 'post_tag'])): ?>
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Теги</div>
            <div class="sidebar-item__content">
                <ul class="tags-list">
                    <?php foreach ($tags as $tag): ?>
                        <li class="tags-list__item"><a href="<?php echo get_term_link($tag->term_id) ?>"
                                                       class="tags-list__item__link"><?php echo $tag->name ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <div class="sidebar__sidebar-item">
        <?php get_calendar(); ?>
        </li>
        </ul>
        </li>
        </ul>
    </div>
</div>
</div>
