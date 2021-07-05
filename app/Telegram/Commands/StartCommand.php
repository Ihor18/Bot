<?php

namespace App\Telegram\Commands;

use App\Models\CommandsAction;
use Telegram\Bot\Commands\Command;
use Telegram;
/**
 * Class HelpCommand.
 */
class StartCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'start';

    /**
     * @var array Command Aliases
     */

    /**
     * @var string Command Description
     */
    protected $description = 'Hello command to say Hello';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $response = $this->getUpdate();

        $text = CommandsAction::getCommand('Start');


        $this->replyWithMessage(compact('text'));
    }
}
