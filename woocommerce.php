<?php get_header(); ?>
<section class="catalog inside-wr">
                <div class="catalog__title">
                    Каталог
                </div>
                <div class="catalog-wr">
                        <div class="catalog__menu">
                                <?php wp_nav_menu(array('theme_location'=>'Catalog', 'menu_class'=>'catalog__menu_list') );?> 
                        </div>
                        <div class="products-wr">
                            <div class="breadcrumb-wr">
                                <?php woocommerce_breadcrumb();?>
                            </div>
                        
                            <?php woocommerce_content();?>
                        </div>
                </div>
                
</section>           
<?php get_footer(); ?>