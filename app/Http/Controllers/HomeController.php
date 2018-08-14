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
    public function getRank($data)
    {
        $eight = (string)8;
        $thirteen = (string)13;

        return $data->rankedSeasons->$eight->$thirteen->tier;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function getRating($data)
    {
        $eight = (string)8;
        $thirteen = (string)13;

        return $data->rankedSeasons->$eight->$thirteen->rankPoints;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function getDivision($data)
    {
        $eight = (string)8;
        $thirteen = (string)13;

        return $data->rankedSeasons->$eight->$thirteen->division +1; // +1 shitty start from 0
    }

    /**
     * @return array
     */
    public function tierBrakedown()
    {
        return [
            1 => 1,
            2 => 180,
            3 => 240,
            4 => 300,
            5 => 360,
            6 => 420,
            7 => 480,
            8 => 540,
            9 => 600,
            10 => 680,
            11 => 760,
            12 => 840,
            13 => 920,
            14 => 1000,
            15 => 1080,
            16 => 1180,
            17 => 1280,
            18 => 1380,
            19 => 1500,
        ];
    }

    /**
     * @param $data
     * @return float|int
     */
    public function winsUntilNextRank($data)
    {
        $averageMMRPerWin = 8.5;
        $tiers = self::tierBrakedown();
        $rating = self::getRating($data);
        $rank = self::getRank($data);

        return round(abs($tiers[$rank+1] - $rating) / $averageMMRPerWin) ;
    }
}
