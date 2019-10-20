<footer class="footer">
                    <div class="footer-wr">
                        <div class="footer__contacts">
                            <div class="footer__contacts-text">
                                <p>
                                    <span>Адрес:</span><br>
                                    г. Иркутск, ул. Баррикад, 26/2
                                    Рынок "Знаменский"
                                    пав. 16п.
                                </p>
                                <p>
                                    <span>
                                    <a href="/contacts/">Смотреть все адреса</a>
                                    </span><br>
                                    
                                </p>
                                <p>
                                    <span>Телефон:</span><br>
                                    <a href="tel:+73952931739">8 (3952) 93-17-39</a>
                                </p>
                                <p>
                                    <span>Email:</span><br>
                                    accomulator@mail.ru
                                </p>
                                
                            </div>
                            <div class="call_back call_back__footer">
                                    <div class="call_back__title title call_back__footer">
                                            Хотите сделать заказ?
                                    </div>
                                    <div class="call_back__interior interior">
                                            Оставьте Ваши контактные данные и мы свяжемся с Вами в самое ближайшее время
                                    </div>
                                    <form action="mail.php" class="form_call-back form_call-back__footer">
                                        <input type="text" placeholder="Имя">
                                        <input type="text" placeholder="Телефон">
                                        <button class="calc_rezult form_calc_rezult form_calc_rezult-footer">Связаться</button>
                                        <!-- <input type="submit" value="Связаться" class="form-aplication__submit calc_rezult form_calc_rezult"> -->
                                        <div class="check_box">
                                            <input type="checkbox" checked="checked">
                                            <label for="check_box__label">Вы даете согласие на обработку ваших персональных данных</label>
                                        </div>
                                    </form>
                                </div>
                        </div>
                        <div class="map" id="map"></div>
                    </div>
            </footer>
        </div>
       
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGO73JZuXDz8xt_zvygl0FreR9cfQ9THE&callback=initMap"></script>
        <?php wp_footer(); ?>
    </body>
</html>