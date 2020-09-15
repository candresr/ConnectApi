<?php
namespace ConnectApi;
use ConnectApi\Resources\ApiRest;

class Main{

    private $apirest;

    public function __construct()
    {
        $this->apirest = new ApiRest();

    }

    public function getProducts($data = []){
        return $this->apirest->getProducts($data);
    }

}