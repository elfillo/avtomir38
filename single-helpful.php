<?php get_header(); ?>

    <!-- Вывод внутренней -->
<div class="about-company inside-wr">
    <div class="about-company__title title">
        <h1>
            <a href="/category/helpful/">Вернуться к полезной информации</a>
        </h1>
    </div>

    <div class="about-company-wr flex helpful helpful_single">
                <h2>
                    <?php //the_title(); ?>
                </h2>

                <?php if (have_posts()): while (have_posts()): the_post(); ?> 
                    <?php the_content(); ?> 
                <?php endwhile; endif; ?> 
    </div>

</div>

<?php get_footer(); ?>