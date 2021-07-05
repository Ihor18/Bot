<?php

namespace App\Telegram\Commands;


use Telegram\Bot\Commands\Command;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Api;
use Telegram\Bot\Methods\Message;
use App\Services\TelegramAdvertise;
use Throwable;

/**
 * Class HelpCommand.
 */
class ProductsCommand extends Command
{

    /**
     * @var string Command Name
     */
    protected $name = 'products';

    /**
     * @var array Command Aliases
     */

    /**
     * @var string Command Description
     */
    protected $description = 'Product command show you all our products';


    /**
     * {@inheritdoc}
     */
    public function handle()
    {

//       $keyboard = [
//            ['<-', 'Buy', '->'],
//        ];
//
//        $reply_markup = Keyboard::inlineButton($keyboard);
//        $response = $this->sendMessage([
//            'chat_id' => 'CHAT_ID',
//            'text' => 'Hello World',
//            'reply_markup' => $reply_markup
//        ]);

//        $messageId = $response->getMessageId();
        $id = 0;
        $advertise = new TelegramAdvertise();
        $advertise = $advertise->getOneAdvertise($id);
        $text = 'Назва: '.$advertise[1].chr(10);
        $text .= 'qty: '.$advertise[2].chr(10);
        $text .= 'Опис: '.$advertise[3].chr(10);
        $text .= 'Ціна: '.$advertise[4].'грн'.chr(10);
        $text .= 'Кількість: '.$advertise[6].chr(10);
        $text.= $advertise[5];


       $this->replyWithMessage(compact('text'));


    }
}
