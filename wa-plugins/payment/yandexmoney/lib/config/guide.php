<?php

return array(
    array(
        'value'       => '%HTTPS_RELAY_URL%',
        'title'       => 'checkURL',
        'description' => 'URL(https), на который отправляется запрос «Проверка заказа».<br><strong>Указанный в этом поле адрес скопируйте и сохраните в соответствующем поле внутри вашего аккаунта Yandex ЦПП.</strong>',
    ),
    array(
        'value'       => '%HTTPS_RELAY_URL%',
        'title'       => 'paymentAvisoURL',
        'description' => 'URL(https), на который отправляется запрос «Уведомление об оплате».<br><strong>Указанный в этом поле адрес скопируйте и сохраните в соответствующем поле внутри вашего аккаунта Yandex ЦПП.</strong>',
    ),
    array(
        'value'       => '%RELAY_URL%?result=success',
        'title'       => 'successURL',
        'description' => 'URL для кнопки "возврат в магазин" на странице, отображаемой покупателю после успешной оплаты.<br><strong>Указанный в этом поле адрес скопируйте и сохраните в соответствующем поле внутри вашего аккаунта Yandex ЦПП.</strong>',
    ),
    array(
        'value'       => '%RELAY_URL%?result=fail',
        'title'       => 'failURL',
        'description' => 'URL для кнопки "возврат в магазин" на странице, отображаемой покупателю после неуспешной оплаты.<br><strong>Указанный в этом поле адрес скопируйте и сохраните в соответствующем поле внутри вашего аккаунта Yandex ЦПП.</strong>',
    ),
);
