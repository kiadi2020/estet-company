@section('servs')
    <hr class="featurette-divider">
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
                <h2>Услуги</h2>
                <div class="swiper-container sc-t-services swiper-container-initialized swiper-container-horizontal swiper-container-free-mode">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="svg-block swiper-slide swiper-slide-active"><a href="/services/meter-reading"><span><img src="https://i.gogov.ru/icons/a/meter.svg" alt="" width="50px" height="50px"></span><span class="svg-title">  Передать показания счетчиков</span></a></div>
                        <div class="svg-block swiper-slide swiper-slide-next"><a href="/services/heating"><span><img src="https://i.gogov.ru/icons/a/heating.svg" alt="" width="50px" height="50px"></span><span class="svg-title">  Отопительный сезон</span></a></div>
                        <div class="svg-block swiper-slide"><a href="/services/hotwater"><span><img src="https://i.gogov.ru/icons/a/faucet.svg" alt="" width="50px" height="50px"></span><span class="svg-title">  Отключение горячей воды</span></a></div>
                        <div class="svg-block swiper-slide"><a href="/articles/utility-rates"><span><img src="https://i.gogov.ru/icons/a/utility-rates.svg" alt="" width="50px" height="50px"></span><span class="svg-title">  Тарифы на ЖКУ</span></a></div>
                        <div class="svg-block swiper-slide"><a href="/services/meter-verification"><span><img src="https://i.gogov.ru/icons/a/meter-verification.svg" alt="" width="50px" height="50px"></span><span class="svg-title">  Поверка счетчиков</span></a></div>
                        <div class="svg-block swiper-slide svg-block-img-1"><a href="/articles/refuse-tv-antenna"><span><img src="https://i.gogov.ru/icons/a/noico.svg" alt="" width="50px" height="50px"></span><span class="svg-title">  Отключение телевизионной антенны</span></a></div>

                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Обслуживаемые дома:</h2>
                <tr>
                    <td id="houses">
                        <div class="p-codes-single">
                            <div>
                                <div class="pcs-line pcs-line-home">
                                    <div class="pcs-street">Аскизская (улица)</div>
                                    <div class="pcs-houses"><a href="https://dom.gogov.ru/houses/7679546">198</a>, <a href="https://dom.gogov.ru/houses/7808006">200</a>, <a href="https://dom.gogov.ru/houses/8059549">210</a></div>
                                </div>
                                <div class="pcs-line pcs-line-home">
                                    <div class="pcs-street">Журавлева (улица)</div>
                                    <div class="pcs-houses"><a href="https://dom.gogov.ru/houses/8073166">3</a>, <a href="https://dom.gogov.ru/houses/8073172">4</a>, <a href="https://dom.gogov.ru/houses/8073177">5</a>, <a href="https://dom.gogov.ru/houses/8073198">8а</a>, <a href="https://dom.gogov.ru/houses/8073203">10</a></div>
                                </div>
                                <div class="pcs-line pcs-line-home">
                                    <div class="pcs-street">Кошурникова (улица)</div>
                                    <div class="pcs-houses"><a href="https://dom.gogov.ru/houses/8073263">1</a>, <a href="https://dom.gogov.ru/houses/8073284">3а</a>, <a href="https://dom.gogov.ru/houses/8073316">5а</a>, <a href="https://dom.gogov.ru/houses/8073330">9</a>, <a href="https://dom.gogov.ru/houses/8073336">9а</a>, <a href="https://dom.gogov.ru/houses/8073342">11</a>, <a href="https://dom.gogov.ru/houses/8073345">21</a></div>
                                </div>
                                <div class="pcs-line pcs-line-home">
                                    <div class="pcs-street">Ломоносова (улица)</div>
                                    <div class="pcs-houses"><a href="https://dom.gogov.ru/houses/8068415">2</a>, <a href="https://dom.gogov.ru/houses/8072179">8</a>, <a href="https://dom.gogov.ru/houses/8072185">10</a>, <a href="https://dom.gogov.ru/houses/8073040">12</a>, <a href="https://dom.gogov.ru/houses/8073078">14</a>, <a href="https://dom.gogov.ru/houses/8073086">16</a>, <a href="https://dom.gogov.ru/houses/8073098">18</a>, <a href="https://dom.gogov.ru/houses/8073115">20</a></div>
                                </div>
                                <div class="pcs-line pcs-line-home">
                                    <div class="pcs-street">Пирятинская (улица)</div>
                                    <div class="pcs-houses"><a href="https://dom.gogov.ru/houses/8073397">01</a>, <a href="https://dom.gogov.ru/houses/8073373">1</a>, <a href="https://dom.gogov.ru/houses/8073416">03</a>, <a href="https://dom.gogov.ru/houses/8073381">3а</a>, <a href="https://dom.gogov.ru/houses/8073439">3б</a>, <a href="https://dom.gogov.ru/houses/8073443">4</a>, <a href="https://dom.gogov.ru/houses/8073421">05</a>, <a href="https://dom.gogov.ru/houses/8073468">14</a>, <a href="https://dom.gogov.ru/houses/8073471">18</a>, <a href="https://dom.gogov.ru/houses/8073476">22</a>, <a href="https://dom.gogov.ru/houses/8073483">30</a>, <a href="https://dom.gogov.ru/houses/8073392">38</a></div>
                                </div>
                                <div class="pcs-line pcs-line-home">
                                    <div class="pcs-street">Стофато (улица)</div>
                                    <div class="pcs-houses"><a href="https://dom.gogov.ru/houses/8170413">5д</a>, <a href="https://dom.gogov.ru/houses/8063821">7</a>, <a href="https://dom.gogov.ru/houses/8068368">10</a>, <a href="https://dom.gogov.ru/houses/8063994">20</a></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </div>
        </div>
    </div>
