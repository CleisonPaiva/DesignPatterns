<?php

//phpinfo();

use Core\Creational\Builder\Conceptual\SmartPhoneBuilder;
use Core\Creational\Builder\SmartPhone\SamsungPhone;
use Core\Creational\Builder\SmartPhone\ApplePhone;
use Core\Creational\Example;

require_once '../vendor/autoload.php';

//Exemplo de Funcionamento
//$example=new Example();
//var_dump($example->test());


//Builder
$galaxyS20 = new SmartPhoneBuilder(
    smartPhone: new SamsungPhone(),
    data: [
        'gpu' => 'RED',
        'cpu' => 'Cmi',
        'ram' => 112,
        'model' => 'S20',
        'sensors' => [
            'giroscope',
            'gps'
        ],

    ]
);

$iphone7 = new SmartPhoneBuilder(
    smartPhone: new ApplePhone(),
    data: [
        'gpu' => 'RED',
        'cpu' => 'Cmi',
        'ram' => 64,
        'model' => 'S20',
        'sensors' => [
            'giroscope',
            'gps'
        ],

    ]
);

$galaxyS20->getSmartPhone();
$iphone7->getSmartPhone();

//$galaxyS20->ram=124;
//$galaxyS20->sensors=[''];

var_dump( $galaxyS20 );
