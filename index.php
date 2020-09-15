<?php


require 'vendor/autoload.php';

use ConnectApi\Auth;



try{
    
//========= Autenticacion ===================

    $m = new \ConnectApi\Main();
    $credenciales = array(
        'url' => 'http://desarrollomagento.ariadna.co/rest/V1/integration/admin/token',
        'username' => 'apirest',
        'password' => 'HST$#dsadT5464./&'
    );
    $auth = new Auth($credenciales);


    $res = $auth->auth();
    dump($res);
//    dump($auth->isValid($auth->loadToken()));
//============== Peticiones GET ======================
    $data = array(
        'url' => 'http://desarrollomagento.ariadna.co/rest/V1/products?searchCriteria[page_size]=100',
        'token' => $auth->loadToken(),
    );


    $cd = $m->getProducts($data);
    dump($cd);


} catch (Exception $ex){

    dump($ex->getMessage());
//    die();

}
