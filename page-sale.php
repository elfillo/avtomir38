<?php get_header(); ?>
    <section class="sales_stuff  products inside-wr">
    <div class="catalog__title">
        <h1>Товары по акции</h1>
        </div>

        <div class="products-wr">
            <?php echo do_shortcode('[sale_products]');?>
        </div>
    </section>
<?php get_footer(); ?>