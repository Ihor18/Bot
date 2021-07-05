<?php

namespace App\Http\Controllers;

use App\Traits\MakeComponents;
use App\Traits\RequestTrait;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;


class TelegramController extends Controller
{
    use RequestTrait,MakeComponents;
    public function webhook(){
      //  $client = new Client();
     //  $response = $client->request('GET','https://api.telegram.org/bot1728181498:AAH19u1_BjA8g6usF75zgNI3FpdReJxEfwU/setWebhook?url=https://8ce99176f0a3.ngrok.io/48yUojv1YQPOssPEpn5i3q6vjdhh7hl7djVWDIAVhFDRMAwZ1tj0Og2v4PWyj4PZ/webhook');
        $response = Telegram::setWebhook(['url' => 'https://api.telegram.org/bot1728181498:AAH19u1_BjA8g6usF75zgNI3FpdReJxEfwU/setWebhook?url=https://89ee87f544f9.ngrok.io/35aUojv1YQPOssPEpn5i3q6vjdhh7hl7djVWDIAVhFDRMAwZ1tj0Og2v4PWyj4PZ/webhook']);
        dd($response);

    }
    public function index(){

        $update = Telegram::commandsHandler(true);

    }
}
