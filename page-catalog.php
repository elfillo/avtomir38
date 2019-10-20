<?php get_header(); ?>
<section class="catalog inside-wr">
                <div class="catalog__title">
                    Каталог
                </div>
                <div class="catalog-wr">
                        <div class="catalog__menu">
                                <!-- <ul class="catalog__menu_list">
                                    <li><a href="#">Аккумуляторы</a></li>
                                    <li><a href="#">Шины</a></li>
                                    <li><a href="#">Велосипеды</a></li>
                                </ul> -->
                                <?php wp_nav_menu(array('theme_location'=>'Catalog', 'menu_class'=>'catalog__menu_list') );?>
                                
                        </div>
                        <div class="products-wr">
                            <?php 
                            
                            echo do_shortcode('[recent_products]')
                            ?>
                        </div>
                </div>
                
            </section>
<?php get_footer(); ?>