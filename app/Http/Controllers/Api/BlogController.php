<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\TransferStats;

class BlogController extends ApiController
{
    public function index()
    {
        $url = 'https://medium.com/9punto5/trending?format=json';
        $client = new Client();
        $result = $client->request('GET',
            $url,
            ['query'=>['format'=>'json']])->getBody()->getContents();

        $posts = explode('])}while(1);</x>', $result);
        $posts = implode('', $posts);
        $posts = json_decode($posts, true);

        return $this->respond($posts);
    }
}
