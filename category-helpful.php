<?php get_header(); ?>
<div class="about-company inside-wr">
    <div class="about-company__title title">
        <h1>Полезная информация</h1>
    </div>
    <div class="about-company-wr flex helpful">
                <ul>
                    <?php if (have_posts()): query_posts('cat=39'); while (have_posts()): the_post(); ?>
                        <li>
                            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                        </li>
                    <?php endwhile; endif; ?>
                </ul>
    </div>
    </div>
<?php get_footer(); ?>