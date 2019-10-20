<?php get_header(); ?>
<!-- <section class="sales_pic">
                <div class="sales_pic__text">
                    Если товар по акции, 
                    это не значит, что он плохой
                </div>
            </section> -->

            <section class="sales_stuff  products inside-wr">
            <div class="catalog__title">
                <h1>Товары по акции</h1>
                </div>
            
                <div class="products-wr">
                    <?php echo do_shortcode('[sale_products]');?>
                </div>
                <!-- <div class="sales_stuff_show_more calc_rezult">
                 Показать еще
                </div> -->
            </section>
            
            <!-- <section class="utp sales_stuff products inside-wr">
                <div class="products-wr_sale">
                    <div class="products__item_sale">
                        <div class="products__item_img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/akum.png" alt="Аккумулятор">
                        </div>
                        <div class="products__item_text">
                            <div class="products__item_text-title">
                                
                            </div>
                            <div class="products__item_text-interior utp__text">
                                Купи до конца года аккумулятор 
                                и получи дополнительное 
                                полугодовое гарантийное 
                                обслуживание.
                            </div>
                        </div>
                        <div class="products__item_button button">
                            Связаться
                        </div>
                    </div>
                    <div class="products__item_sale">
                        <div class="products__item_img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/akum.png" alt="Аккумулятор">
                        </div>
                        <div class="products__item_text">
                            <div class="products__item_text-title">
                                
                            </div>
                            <div class="products__item_text-interior utp__text">
                                До конца осени действует 
                                скидка на новый аккумулятор
                                при сдаче старого
                            </div>
                        </div>
                        <div class="products__item_button button">
                            Связаться
                        </div>
                    </div>
                    <div class="products__item_sale">
                        <div class="products__item_img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/akum.png" alt="Аккумулятор">
                        </div>
                        <div class="products__item_text">
                            <div class="products__item_text-title">
                                
                            </div>
                            <div class="products__item_text-interior utp__text">
                                Только до конца этого месяца став 
                                нашим клиентом ты можешь 
                                получить диагностику и ремонт 
                                старого аккумулятора в подарок. 
                                Под каждый УТП кнопка: 
                                «Участвовать в акции!»
                            </div>
                        </div>
                        <div class="products__item_button button">
                            Связаться
                        </div>
                    </div>
                   
                </div>
            </section> -->
<?php get_footer(); ?>