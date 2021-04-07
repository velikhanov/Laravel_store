@extends('layouts.app')

@section('pagescss')
<link rel="stylesheet" href="/css/main/pay&del.css">
@endsection

@section('title', 'Оплата и доставка')

@section('content')
<section class="section">
  <div class="container">
    <h1 class="text-center paytittle">Оплата и доставка</h1>
    <div class="row">
        <button class="btn pay col-lg-3 col-md-6 col-sm-12" type="button" data-toggle="collapse" data-target="#collapseExample_1" aria-expanded="true" aria-controls="collapseExample_1">
          Способы оплаты
        </button>
        <button class="btn pay col-lg-3 col-md-6 col-sm-12" type="button" data-toggle="collapse" data-target="#collapseExample_2" aria-expanded="false" aria-controls="collapseExample_2">
          Доставка по Баку
        </button>
        <button class="btn pay col-lg-3 col-md-6 col-sm-12" type="button" data-toggle="collapse" data-target="#collapseExample_3" aria-expanded="false" aria-controls="collapseExample_3">
          Получение товара
        </button>
        <button class="btn pay col-lg-3 col-md-6 col-sm-12" type="button" data-toggle="collapse" data-target="#collapseExample_4" aria-expanded="false" aria-controls="collapseExample_4">
          Наши реквизиты
        </button>
    </div>
    <div id="collapse_card_group">
        <div class="collapse show" id="collapseExample_1" data-parent="#collapse_card_group">
            <h2 class="text-center mt-3 mb-5">Способы оплаты</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="fst-column">
                      <img class="cardimg" src="/img/pay&del/wallet.png">
                      <div>
                        <h5>Наличная оплата</h5>
                        <h6>Оплата наличными в момент получения заказа при доставки или в кассе магазина</h6>
                      </div><!--Flexbox-->
                    </div>
                    <div class="fst-column">
                      <img class="cardimg" src="/img/pay&del/card.png">
                      <div>
                        <h5>Оплата банковской картой</h5>
                        <h6>Осуществляется с помощью такого-то защищенного функционала</h6>
                      </div><!--Flexbox-->
                    </div>
                    <div class="fst-column">
                      <img class="cardimg" src="/img/pay&del/receipt.png">
                      <div>
                        <h5>Безналичная оплата по счету</h5>
                        <h6 class="paytext">Оплата доступна всем юридическим и физическим лицам.
                            После оформления заказа в течении 1 рабочего часа Вам высылается счет по электронной почте или по факсу.
                            Комиссия не взимается.
                            Цены при оплате банковским переводом с учетом НДС такие же, как за наличный расчет</h6>
                      </div><!--Flexbox-->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="snd-column">
                    <img class="cardimg" src="/img/pay&del/wallet.png">
                    <div>
                      <h5>Наличная оплата</h5>
                      <h6>Осуществляется с помощью такого-то защищенного функционала</h6>
                    </div>
                  </div>
                  <div class="snd-column">
                    <img class="cardimg" src="/img/pay&del/card.png">
                    <div>
                      <h5>Оплата банковской картой</h5>
                      <h6>Осуществляется с помощью такого-то защищенного функционала</h6>
                    </div>
                  </div>
                  <div class="snd-column">
                    <img class="cardimg" src="/img/pay&del/receipt.png">
                    <div>
                      <h5>Безналичная оплата по счету</h5>
                      <h6 class="paytext">Оплата доступна всем юридическим и физическим лицам.
                          После оформления заказа в течении 1 рабочего часа Вам высылается счет по электронной почте или по факсу.
                          Комиссия не взимается.
                          Цены при оплате банковским переводом с учетом НДС такие же, как за наличный расчет</h6>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="collapse" id="collapseExample_2" data-parent="#collapse_card_group">
            <h2 class="text-center mt-3 mb-5">Доставка по Баку</h2>
            <div class="orderbox">
            <h5>У нас Вы можете оформить:</h5>
              <ul>
                <li>Первый способ</li>
                <li>Второй способ</li>
                <li>Третий способ</li>
              </ul>
            </div>
          <div class="delflex">
            <h3>Доставка курьером</h3>
            <img class="delimg" src="/img/pay&del/delivery_1.png">
            <img class="delimg" src="/img/pay&del/delivery_2.png">
          </div><!--Flexbox-->
          <ul>
            <li>
              <h3>Адреса доставки</h3>
              <p>Доставка товаров, приобретённых в нашем магазине, осуществляется ежедневно - до 100 км от МКАД центра Баку и т.д.</p>
            </li>
            <li>
              <h3>Тарифы доставки</h3>
              <table class="table table-bordered table-dark">
                <thead>
                  <tr>
                    <th scope="col">Категория</th>
                    <th scope="col">10 км от центра</th>
                    <th scope="col">Дополнительная доставка</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1: Крупногабаритная техника</th>
                    <td>10 AZN</td>
                    <td>15 AZN</td>
                  </tr>
                  <tr>
                    <th scope="row">2: Мелкогабаритная техника</th>
                    <td>5 AZN</td>
                    <td>10 AZN</td>
                  </tr>
                  <tr>
                    <th scope="row">3: Акссесуары</th>
                    <td>3 AZN</td>
                    <td>5 AZN</td>
                  </tr>
                </tbody>
              </table>
              <h4>Проверьте в какой зоне ваш адресс.</h4>
              <iframe class="googleadr" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68728.48524067987!2d49.839460042394975!3d40.42217134803343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6bd6211cf9%3A0x343f6b5e7ae56c6b!2z0JHQsNC60YMsINCQ0LfQtdGA0LHQsNC50LTQttCw0L0!5e0!3m2!1sru!2s!4v1599489736165!5m2!1sru!2s"></iframe>
            </li>
            <li>
              <h3 class="mt-3 mb-5">Время доставки</h3>
              <div class="row delboxeshead">
                <div class="delboxes">
                  <h3 class="ml-3">Доставка</h3>
                  <h6 class="ml-3">в день заказа</h6>
                    <div class="bgbox mb-3">
                    <div class="bgboxtext_1"><i class="fa fa-check mt-2"></i>Заказ оформлен до 15:00</div>
                    <div class="bgboxtext_1"><i class="fa fa-check"></i>Товар со статусом "В наличии"<br></div>
                    <div class="bgboxtext_1"><i class="fas fa-exclamation-circle mt-3 mb-2"></i>Подробности уточняйте у оператора</div>
                    </div>
                </div>
                <div class="delboxes">
                  <h3 class="ml-3">Доставка</h3>
                  <h6 class="ml-3">в определенный промежуток времени</h6>
                    <div class="bgbox">
                      <div class="bgboxtext_1"><b>+50%</b> к стоимости доставки</div>
                      <div class="bgboxtext_2 mt-3">
                            До обеда	10:00 - 13:00<br>
                            В обед	13:00 - 16:00<br>
                            К концу дня	16:00 - 19:00<br>
                            Вечером	19:00 - 22:00
                      </div>
                    </div>
                </div>
                <div class="delboxes">
                  <h3 class="ml-3">Доставка</h3>
                  <h6 class="ml-3">в точное время</h6>
                    <div class="bgbox">
                        <div class="text-center"><b>+100%</b> к стоимости доставки</div>
                        <img class="delintimeimg" src="/img/pay&del/delintime.png">
                    </div>
                </div>
             </div>
            </li>
          </ul>
        </div>
        <div class="collapse" id="collapseExample_3" data-parent="#collapse_card_group">
            <h2 class="text-center mt-3">Получение товара</h2>
            <h5 class="text-danger">Обязательно убедитесь в отсутствии механических повреждений упаковки (замятий, разрывов, надломов), прежде чем расписаться в доставочных документах и принять груз.</h5>
            <div class="acceptbox">
              <span class="text-danger"><strong>Помните!</strong><br>
                    Претензии к внешнему виду доставленного Вам товара в соответствии со ст. 458 и 459 ГК РФ Вы можете предъявить только до передачи Вам товара продавцом. Ссылки на загрязнённость товара, недостаточную освещённость помещения, поторапливания со стороны экспедиторов и прочие причины, не являются основанием для невыполнения Вами требований ст. 484 ГК РФ.</span>
            </div>
            <h2>Обращаем внимание на следующее:</h2>
            <ul>
              <li>Установка и подключение техники сотрудниками доставки не осуществляется!</li>
              <li>Работники службы доставки не имеют необходимой квалификации для установки и тестирования приборов. Перед началом эксплуатации прибора внимательно ознакомьтесь с инструкцией! Ни при каких обстоятельствах не нарушайте условия инструкции, это может привести к невозможности осуществления гарантийного ремонта!</li>
              <li>Покупатель вправе потребовать включения прибора для проверки его работоспособности, но при этом необходимо знать, что в дальнейшем могут возникнуть проблемы с эксплуатацией изделия по причине неправильного первоначального включения (относится к зимнему времени года). По правилам эксплуатации перед включением температура прибора должна быть комнатной. Обычно баланс температур достигается в течение 2-6 часов. Особенно важно для товаров цифровой техники, аудио- и видеотехники и   прочих товаров со сложной электроникой.</li>
            </ul>

        </div>
        <div class="collapse" id="collapseExample_4" data-parent="#collapse_card_group">
            <h2 class="text-center mt-3 mb-5">Наши реквизиты</h2>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Наименование ораганизации</th>
                  <th scope="col">Чего то там</th>
                  <th scope="col">Чего то там</th>
                  <th scope="col">Чего то там</th>
                  <th scope="col">Чего то там</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Какие то реквизиты</th>
                  <th>Что то</th>
                  <th>Что то</th>
                  <th>Что то</th>
                  <th>Что то</th>
                </tr>
                <tr>
                  <th scope="row">Ого</th>
                  <th>Данные</th>
                  <th>Данные</th>
                  <th>Данные</th>
                  <th>Данные</th>
                </tr>
                <tr>
                  <th scope="row">Во</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                </tr>
                <tr>
                  <th scope="row">Какие то реквизиты</th>
                  <th>Что то</th>
                  <th>Что то</th>
                  <th>Что то</th>
                  <th>Что то</th>
                </tr>
                <tr>
                  <th scope="row">Ого</th>
                  <th>Данные</th>
                  <th>Данные</th>
                  <th>Данные</th>
                  <th>Данные</th>
                </tr>
                <tr>
                  <th scope="row">Во</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                </tr>
                <tr>
                  <th scope="row">Какие то реквизиты</th>
                  <th>Что то</th>
                  <th>Что то</th>
                  <th>Что то</th>
                  <th>Что то</th>
                </tr>
                <tr>
                  <th scope="row">Ого</th>
                  <th>Данные</th>
                  <th>Данные</th>
                  <th>Данные</th>
                  <th>Данные</th>
                </tr>
                <tr>
                  <th scope="row">Во</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                </tr>

                <tr>
                  <th scope="row">Какие то реквизиты</th>
                  <th>Что то</th>
                  <th>Что то</th>
                  <th>Что то</th>
                  <th>Что то</th>
                </tr>
                <tr>
                  <th scope="row">Ого</th>
                  <th>Данные</th>
                  <th>Данные</th>
                  <th>Данные</th>
                  <th>Данные</th>
                </tr>
                <tr>
                  <th scope="row">Во</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                </tr>
                <tr>
                  <th scope="row">Какие то реквизиты</th>
                  <th>Что то</th>
                  <th>Что то</th>
                  <th>Что то</th>
                  <th>Что то</th>
                </tr>
                <tr>
                  <th scope="row">Ого</th>
                  <th>Данные</th>
                  <th>Данные</th>
                  <th>Данные</th>
                  <th>Данные</th>
                </tr>
                <tr>
                  <th scope="row">Во</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                  <th>ЫЫЫЫ</th>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
  </div><!--End container-->
  <div class="w-100 text-center">
    <img class="payanddelimg" src="/img/pay&del/pay&delimg.png ">
  </div>
</section>
@endsection
