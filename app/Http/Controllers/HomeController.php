<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\RequestOptions;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index()
   {
       $players = [];
       $ids = [
           '76561198042552194', // justus
           '76561198072364318', // jamie
           '76561198069106193', // jack
       ];

       $batch = [

       ];
        $batch = json_encode($batch);

       $client = new \GuzzleHttp\Client();
       $res = $client->post(
           'https://api.rocketleaguestats.com/v1/player/batch',
           [
               'headers' => [
                   'Authorization' => 'Z2W3ML6Z5AKG7SC3XEO2I5DUQRBH4I6K',
               ],
               'json' => [
                   [
                       'platformId' => '1',
                       'uniqueId' => '76561198042552194'
                   ],
                   [
                       'platformId' => '1',
                       'uniqueId' => '76561198072364318'
                   ],
                   [
                       'platformId' => '1',
                       'uniqueId' => '76561198069106193'
                   ]
               ]
           ]);
       $players = json_decode($res->getBody());

       return view('welcome', compact('players'));
   }

    /**
     * @param $data
     * @return string
     */
    public function getRankImage($data)
    {
       $eight = (string)8;
       $thirteen = (string)13;

       $tier = $data->rankedSeasons->$eight->$thirteen->tier;

       return url('images') . '/' . $tier . '.png';
    }

    /**
     * @param $data
     * @return mixed
     */
    public function getDivision($data)
    {
        $eight = (string)8;
        $thirteen = (string)13;

        return $data->rankedSeasons->$eight->$thirteen->division;
    }
}
