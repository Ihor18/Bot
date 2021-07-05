<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandsAction extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['text'];

    public static function getCommand($name)
    {
        return CommandsAction::where('commandName','=', $name)->value('text');
    }
    public static function setCommand($commandName,$request)
    {
        $commandAction = new CommandsAction();
        $commandAction->commandName = $commandName;
        $commandAction->text = $request['text'];
        $commandAction->save();
    }
}
