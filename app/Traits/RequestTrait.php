<?php


namespace App\Traits;


use GuzzleHttp\Client;


trait RequestTrait
{
    private function apiRequest($method, $parameters = [])
    {

        $client = new Client();
        $url = 'https://api.telegram.org/bot' . env('TELEGRAM_BOT_TOKEN') . '/' . $method;
        $response = $client->request('GET', $url);
        return !is_null($response);
    }
}
