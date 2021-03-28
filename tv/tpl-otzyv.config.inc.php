<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'image' => array(
        'caption' => 'Аватар',
        'type' => 'image'
    ),
    'thumb' => array(
        'caption' => 'Thumbnail',
        'type' => 'thumb',
        'thumbof' => 'image'
    ), 
    'name' => array(
        'caption' => 'Имя',
        'type' => 'text'
    ),
    'date-otzyv' => array(
        'caption' => 'Дата',
        'type' => 'text'
    ),
    'text' => array(
        'caption' => 'Текст отзыва',
        'type' => 'richtext'
    )
);
$settings['templates'] = array(
    'outerTpl' => '[+wrapper+]',
    'rowTpl' => '
    <div class="ReviewsE">
          <div class="ReviewsE__Avatar">
            <div class="img"><img src="[[phpthumb? &input=`[+image+]` &options=`w=108,h=108,zc=C`]]" alt=""></div>
            <div class="name">[+name+]</div>
            <div class="date">[+date-otzyv+]</div>
          </div>
          <div class="ReviewsE__text">
            [+text+]
          </div>
       </div>'
);
