<?php

namespace App\Http\Controllers;

use App\Services\TelegramAdvertise;
use Illuminate\Http\Request;
use App\Models\CommandsAction;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $text = CommandsAction::getCommand('Start');
        $advertise = new TelegramAdvertise();
        $advertise = $advertise->getOneAdvertise(1);
        dd($advertise);
        return view('admin',['text'=>$text]);
    }

    public function store(Request $request)
    {
        $request = $request->input();

        if (strlen(CommandsAction::getCommand("Start"))!=0) {
            CommandsAction::where('commandName', "Start")->update(['text' => $request['text']]);
        } else {
            CommandsAction::setCommand("Start", $request);
        }
        return back()->withInput();
    }
}
