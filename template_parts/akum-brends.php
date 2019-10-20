<section class="brends-akkumul inside-wr">
                <div class="brends-akkumul__title title">
                        Бренды аккумуляторов, с которыми работаем 
                </div>
                <div class="swiper-container akkumul-brends__swiper-container">
                        <div class="swiper-wrapper avto-brends__swiper-wrapper">
                        <?php if (have_posts()): query_posts('cat=36'); while (have_posts()): the_post(); ?>
                        <div class="swiper-slide">
                        <div class="slider_img_container">
                        <!-- <img src="<?php //echo get_template_directory_uri() ?>/img/tyumen.jpg" alt="Аккумулятор"> -->
                                <?php the_post_thumbnail(array()); ?>
                        </div>
                        <!-- <p class="about_akk">Аккумулятор Тюмень Премиум</p> -->
                </div>
                        <?php endwhile; endif; ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
</section>