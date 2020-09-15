<?php
namespace ConnectApi\Resources;
use ConnectApi\Util\AlmArray;
use GuzzleHttp\Client;

class ApiRest{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getProducts($data){

        $url = AlmArray::get($data, 'url');
        $token = AlmArray::get($data, 'token');

        $headers = [
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer ' . $token
        ];

        try{
            $res = $this->client->get($url, [
                'headers' => $headers
            ]);
            return  json_decode($res->getBody()->getContents(), true);
        } catch (\Exception $e) {

            return false;
        }
    }
}