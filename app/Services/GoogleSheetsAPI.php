<?php
namespace App\Services;
use GuzzleHttp\Client;

class GoogleSheetsAPI{

    private $key = "AIzaSyCV5-Yupk-JSKeMHfmXvcK3hmfnNEB4PTg";
    private $sheet = "1-1_yVsyktQXCOXk2rSEDWUe2tUeVXcg5G2EgeE-RjY0";
    public function getData(){
        $client = new Client();
        $res = $client->request('GET',"https://sheets.googleapis.com/v4/spreadsheets/".
            $this->sheet."/values/A2:Z1000?valueRenderOption=FORMATTED_VALUE&key=".$this->key);

        return json_decode($res->getBody(),true);
    }
}
