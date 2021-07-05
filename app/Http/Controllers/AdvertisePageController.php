<?php

namespace App\Http\Controllers;

use App\Services\GoogleSheetsAPI;
use Illuminate\Http\Request;


class AdvertisePageController extends Controller
{
    public function index(){
        $data = (new GoogleSheetsAPI())->getData();
        $data = $data["values"];
        return view('page', compact('data'));
    }

}
