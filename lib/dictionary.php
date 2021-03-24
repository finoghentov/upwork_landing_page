<?php
$dictionary = [
    'buttons' => [
        'header' => 'GET YOUR FREE QUOTES',
        'form' => 'GET FREE QUOTES',
        'fact_section' => 'GET YOUR FREE QUOTES &gt;&gt;',
        'boiler_section' => 'GET YOUR FREE QUOTES',
        'footer_section' => 'GET YOUR FREE QUOTES'
    ],
    'main' => [
        'subtitle' => 'Enter your details and we will put you in touch with Gas Safe Registered Heating Engineers who 
        are waiting to quote for your job. Save money by comparing their quotes and get the best deal for you.'
    ],
    'form' => [
        'title' => 'Get 3 quotes today from Gas Safe Registered Heating Engineers',
        'subtitle' => 'Completely Free Service with No Obligation'
    ]
];

/**
 * Key of dictionary separated via "."
 * e.g.:     getDictionary('form.title');
 *
 * @param $key
 * @return mixed
 */
function getDictionary($key) {
    global $dictionary;
    $keys = explode('.', $key);

    if (count($keys) == 1 && isset($dictionary[$keys[0]])) {
        if (!is_array($dictionary[$keys[0]])) {
            return $dictionary[$keys[0]];
        }
    }

    $arr = $dictionary;

    foreach ($keys as $segment) {
        if (isset($arr[$segment])) {;
            $arr = $arr[$segment];
        } else {
            return $key;
        }
    }

    return $arr;
}
