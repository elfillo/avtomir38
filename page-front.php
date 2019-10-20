<?php get_header(); ?>
<section class="slider inside-wr">
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                            <?php if (have_posts()): query_posts('cat=34'); while (have_posts()): the_post(); ?>
                                <div class="swiper-slide">
                                    <div class="swiper-slide-wr">
                                        <div class="swiper-slide-wr__title">
                                            <?php the_title();?>
                                        </div>
                                        <div class="swiper-slide-wr__interior flex_s-b">
                                            <div class="swiper-slide-wr__interior-img">
                                                <?php the_post_thumbnail(array()); ?>
                                            </div>
                                            <div class="swiper-slide-wr__interior-text">
                                                <div class="swiper-slide-wr__interior-text__subtitle">
                                                    <?php the_excerpt(); ?>
                                                </div>
                                                <div class="swiper-slide-wr__interior-text__description">
                                                    <?php the_content(); ?>
                                                </div>
                                                <a href="#">
                                                <div class="swiper-slide-wr__button button">
                                                    Ознакомиться
                                                </div>
                                                </a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <?php endwhile; endif; ?>
                                
        
                            </div>
                            <!-- <div class="swiper-pagination"></div> -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                    </div>
            </section>
            <section class="about-main inside-wr flex_s-b">
                <div class="about-main__text">
                    <div class="title about-main__title">О компании</div>
                    <div class="interior about-main__interior">Торгово-сервисная сеть "Автомир" с 1991 года занимается помощью автолюбителям 
                    с выбором одной из самых значимых частей автомибиля - аккумулятора! <br><br>
                    За более чем четверть века мы накопили огромный опыт в своем деле и создали, по настоящему большую и удобную сеть магазинов
                    с Командой профессионалов, способных помочь Вам в любых вопросах связанных с аккумуляторами!<br><br>
                     На сегодняшний день наша сеть насчитывает более 30 собственных торгово-сервисных центров в Иркутской области и 
                     Республике Бурятия, а так же более 100 центров, входящих в партнерскую сеть. 
                    </div>
                </div>
                <div class="about-main__img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/worker.png" alt="Сотрудник">
                </div>
            </section>
            <section class="calculator-main">
            <?php //get_template_part('template_parts/quick-order'); ?>
                <div class="inside-wr flex_s-b">
                <div class="calculator">
                    <div class="calculator__title title">
                            Калькулятор цен
                    </div>
                    <p>
                        <label for="car_model">Марка автомобиля</label>
                        <select name="car" id="car_model_select">
                            
                        </select>
                    </p>
                    <p>
                        <label for="car_name">Модель автомобиля</label>
                        <input type="text" id="car_model" placeholder="Введите модель авто">
                    </p>
                    <p>
                        <label for="battery_capacity">Емкость аккумулятора </label>
                        <select name="battery" id="battery_capacity_select">
                            
                        </select>
                    </p>
                    <p>
                        <label for="made_from">Производитель</label>
                        <select name="country" id="country_select">
                            
                        </select>
                    </p>
                    <p>
                        <button class="calc_rezult">Узнать результат</button>
                    </p>
                </div>
                <div class="result_of_calc">
                    <div class="result_of_calc__title title">
                            Результат калькуляции
                    </div>
                    <div class="result_of_calc__interior interior" id="text_from_mail">
                            Название аккумулятора, маркировка аккумулятора
                    </div>
                    <div class="result_of_calc__amount">
                        <div class="result_of_calc__price">
                            от <span>999</span> руб. 
                        </div>
                    </div>
                    <div class="result_of_calc__button button" id="quick_btn">
                            Быстрый заказ
                    </div>
                </div>
                <div class="call_back">
                    <div class="call_back__title title">
                            Хотите сделать заказ?
                    </div>
                    <div class="call_back__interior interior">
                            Оставьте Ваши контактные данные и мы свяжемся с Вами в самое ближайшее время
                    </div>
                    <?php //echo do_shortcode('[contact-form-7 id="443" title="Форма на калькуляторе"]');?>
                    <form class="form_call-back">
                        <input type="text" name="name" class="form-aplication__name" placeholder="Имя">
                        <input type="text" name="phone" class="form-aplication__phone" placeholder="Телефон">
                        <!-- <button class="calc_rezult form_calc_rezult">Связаться</button> -->
                        <input type="submit" value="Связаться" class="form-aplication__submit calc_rezult form_calc_rezult">
                        <div class="check_box">
                            <input type="checkbox" checked="checked" id="check_box__label">
                            <label for="check_box__label">Вы даете согласие на обработку ваших персональных данных</label>
                        </div>
                    </form>
                </div>
            </div>
            </section>
            <section class="slider slider2 sale-slider inside-wr">
                <div class="sale-slider__title title">Товары по акции</div>
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                            <?php if (have_posts()): query_posts('cat=37'); while (have_posts()): the_post(); ?>
                                <div class="swiper-slide">
                                    <div class="swiper-slide-wr">
                                        <div class="swiper-slide-wr__interior flex_s-b">
                                            <div class="swiper-slide-wr__interior-img">
                                                <?php the_post_thumbnail(array()); ?>
                                            </div>
                                            <div class="swiper-slide-wr__interior-text">
                                                <div class="swiper-slide-wr__interior-text__subtitle">
                                                    <?php the_title();?>
                                                </div>
                                                <div class="swiper-slide-wr__interior-text__description">
                                                    <?php the_content();?>
                                                </div>
                                                
                                                <div class="swiper-slide-wr__button button">
                                                    Купить
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                    </div>
            </section>
            <?php get_template_part('template_parts/why-we'); ?>
            <?php get_template_part('template_parts/avto-brends'); ?>
<?php get_footer(); ?>