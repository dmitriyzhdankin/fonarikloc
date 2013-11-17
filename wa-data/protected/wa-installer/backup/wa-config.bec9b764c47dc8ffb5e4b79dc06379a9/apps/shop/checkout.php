<?php
return array (
  'contactinfo' => 
  array (
    'name' => 'Контактная информация',
    'fields' => 
    array (
      'firstname' => 
      array (
        'localized_names' => 'Имя',
      ),
      'lastname' => 
      array (
        'localized_names' => 'Фамилия',
      ),
      'phone' => 
      array (
        'localized_names' => 'Телефон',
      ),
      'email' => 
      array (
        'localized_names' => 'Email',
      ),
      'address.shipping' => 
      array (
        'localized_names' => 'Адрес',
        'fields' => 
        array (
          'street' => 
          array (
            'localized_names' => 'Улица, дом, квартира',
          ),
          'city' => 
          array (
            'localized_names' => 'Город',
          ),
          'region' => 
          array (
            'localized_names' => 'Регион',
          ),
          'zip' => 
          array (
            'localized_names' => 'Индекс',
          ),
          'country' => 
          array (
            'localized_names' => 'Страна',
          ),
        ),
      ),
    ),
  ),
  'confirmation' => true,
);