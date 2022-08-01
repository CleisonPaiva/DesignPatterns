<?php

//phpinfo();

use Core\Creational\Builder\Conceptual\SmartPhoneBuilder;
use Core\Creational\Builder\SmartPhone\SamsungPhone;
use Core\Creational\Builder\SmartPhone\ApplePhone;
use Core\Creational\Builder\SmartPhone\SmartPhone;
use Core\Creational\Builder\SmartPhone\SmartPhoneCreator;
use Core\Creational\Example;

require_once '../vendor/autoload.php';

//Exemplo de Funcionamento
//$example=new Example();
//var_dump($example->test());


//Builder

//Com Diretor não preciso desse codigo abaixo
////////// ******************
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

$galaxyS20->getSmartPhone();


$galaxyS20->addGpu()
    ->addCpu()
    ->addRam();
$galaxyS20->addModel();
$galaxyS20->addSensors([]);


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

$iphone7->getSmartPhone();


$iphone7->addGpu()
    ->addCpu()
    ->addRam();
$iphone7->addModel();
$iphone7->addSensors([]);
////////// ******************

$smartPhone = new SmartPhoneBuilder(
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

$smartPhoneCreate = new SmartPhoneCreator($smartPhone);
$iphone7=$smartPhoneCreate->buildPhone();