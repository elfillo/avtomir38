<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
<?php $stores = carbon_get_post_meta($post->ID, 'stores');?>
<section class="contacts-page inside-wr">
    <div class="title contacts-page__title">
        <h1>Адреса магазинов аккумуляторов</h1>
    </div>
    <div class="pavilions flex_s-b">
        <?php foreach ($stores as $store):?>
            <div class="pavilions__item">
                <div class="pavilions__img">
                    <img src="<?php echo $store['stores-list--img']?>" alt="Павильион">
                </div>
                <div class="pavilions__adress">
                    <p class="pav_adres"><?php echo $store['stores-list--title']?></p>
                    <p class="pav_number">Тел.:
                        <a href="tel:<?php echo $store['stores-list--phone-link']?>">
                          <?php echo $store['stores-list--phone']?></a>
                    </p>
                </div>
                <a target="_blank" href="<?php echo $store['stores-list--route']?>">
                    <div class="pavilions__button button">
                        Построить маршрут
                    </div>
                </a>
            </div>
        <?php endforeach; unset($stores, $store)?>
    </div>
</section>
<?php get_footer(); ?>