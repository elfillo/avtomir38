<section class="whyWe inside-wr">
                    <div class="whyWe__title title">
                            Почему именно мы:
                    </div>
                    <div class="whyWe-wr flex_s-b">
                    <?php if (have_posts()): query_posts('cat=38'); while (have_posts()): the_post(); ?>   
                        <div class="whyWe__item"><?php the_post_thumbnail(array()); ?><div class="whyWe__text"><?php the_content();?></div></div>
                        <?php endwhile; endif; ?>   
                        
                    </div>
                    <div class="wholesale_button button">
                            Узнать цены!
                    </div>
</section>