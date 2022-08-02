<?php

//phpinfo();

use Core\Creational\Builder\Conceptual\Request\BuilderRequest;
use Core\Creational\Builder\Conceptual\Request\MethodsEnum;
use Core\Creational\Builder\Conceptual\Request\Request;
use Core\Creational\Builder\Conceptual\SmartPhoneBuilder;
use Core\Creational\Builder\Practical\Role;
use Core\Creational\Builder\Practical\User;
use Core\Creational\Builder\Practical\UserBuilder;
use Core\Creational\Builder\SmartPhone\SamsungPhone;
use Core\Creational\Builder\SmartPhone\ApplePhone;
use Core\Creational\Builder\SmartPhone\SmartPhone;
use Core\Creational\Builder\SmartPhone\SmartPhoneCreator;
use Core\Creational\Example;
use Core\Creational\Singleton\Conceptual\Singleton;
use Core\Creational\Singleton\Practical\DbConnection;

require_once '../vendor/autoload.php';

//Exemplo de Funcionamento
//$example=new Example();
//var_dump($example->test());


//Builder

//Com Diretor não preciso desse codigo abaixo
////////// ******************

/**
 * $galaxyS20 = new SmartPhoneBuilder(
 * smartPhone: new SamsungPhone(),
 * data: [
 * 'gpu' => 'RED',
 * 'cpu' => 'Cmi',
 * 'ram' => 112,
 * 'model' => 'S20',
 * 'sensors' => [
 * 'giroscope',
 * 'gps'
 * ],
 *
 * ]
 * );
 *
 * $galaxyS20->getSmartPhone();
 *
 *
 * $galaxyS20->addGpu()
 * ->addCpu()
 * ->addRam();
 * $galaxyS20->addModel();
 * $galaxyS20->addSensors([]);
 *
 *
 * $iphone7 = new SmartPhoneBuilder(
 * smartPhone: new ApplePhone(),
 * data: [
 * 'gpu' => 'RED',
 * 'cpu' => 'Cmi',
 * 'ram' => 64,
 * 'model' => 'S20',
 * 'sensors' => [
 * 'giroscope',
 * 'gps'
 * ],
 *
 * ]
 * );
 *
 * $iphone7->getSmartPhone();
 *
 *
 * $iphone7->addGpu()
 * ->addCpu()
 * ->addRam();
 * $iphone7->addModel();
 * $iphone7->addSensors([]);
 * ////////// ******************
 *
 * $smartPhone = new SmartPhoneBuilder(
 * smartPhone: new ApplePhone(),
 * data: [
 * 'gpu' => 'RED',
 * 'cpu' => 'Cmi',
 * 'ram' => 64,
 * 'model' => 'S20',
 * 'sensors' => [
 * 'giroscope',
 * 'gps'
 * ],
 *
 * ]
 * );
 *
 * $smartPhoneCreate = new SmartPhoneCreator($smartPhone);
 * $iphone7=$smartPhoneCreate->buildPhone();
*/
/**
 //Exemplo de Requisição
$request = new BuilderRequest();
$request -> url( 'http://localhost' );
$request -> method( MethodsEnum::GET );
$request -> payload( [
    'filters' => 'test'
] );
$request -> build();

//OU

$request = ( new BuilderRequest )
    -> url( 'http://localhost' )
    -> method( MethodsEnum::GET )
    -> payload( [
        'filters' => 'test'
    ] )
    -> build();
 */
/**
//Chamada pratica sem Builder
 $cleisonFounder = new User(
     firstName: 'Cleison',
     lastName: 'Paiva',
     email: 'cleison@teste.com.br',
     age: 25,
     role: Role::F,
 );
 $cleisonFounder->setAddress(
     new Address(
         street: 'Rua x',
         city: 'City X',
         state: 'State X',
         postalCode: 5757009,
         country: 'BR',
     )
 );
 $cleisonFounder->setPhone(
     new Phone(
         ddd: 64,
         number: 981701406,
     )
 );

//Chamada pratica Com Builder
 $user = (new UserBuilder)
             ->addBasicInfo(
                 firstName: 'Cleison',
                 lastName: 'Paiva',
                 email: 'cleison@teste.com.br',
                 age: 25,
                 role: Role::F,
             )
             ->addAddress(
                 street: 'Rua x',
                 city: 'City X',
                 state: 'State X',
                 postalCode: 5757009,
                 country: 'BR',
             )
             ->addPhone(
                 ddd: 64,
                 number: 981701406,
             )
             ->build();
 */

/**
 * Singleton Conceitual
 */
// $instanceA = Singleton::getInstance();
// $instanceB = Singleton::getInstance();
// var_dump($instanceA === $instanceB);

// $instance = DbConnection::getInstance();
// DbConnection::getInstance();
// DbConnection::getInstance();
// DbConnection::getInstance();
// DbConnection::getInstance();
// DbConnection::getInstance();

//DbConnection::getConnection();
//DbConnection::getConnection();
//DbConnection::getConnection();
//DbConnection::getConnection();
//DbConnection::getConnection();
//DbConnection::getConnection();

