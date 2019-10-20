<section class="avto-brends">
                        <div class="avto-brends__title title">
                                Автомобили, с которыми мы уже работаем:
                        </div>
                        <div class="swiper-container avto-brends__swiper-container" id="avto-brends">
                            <div class="swiper-wrapper avto-brends__swiper-wrapper">
                            <?php if (have_posts()): query_posts('cat=35'); while (have_posts()): the_post(); ?>
                            <div class="swiper-slide avto-brends__img">
                                <?php the_post_thumbnail(array()); ?>
                            <p>Бренд авто</p>
                            </div>
                            <?php endwhile; endif; ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
</section>