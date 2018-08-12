<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
       $auth = '&apikey=Z2W3ML6Z5AKG7SC3XEO2I5DUQRBH4I6K';
       $ids = [
           '76561198042552194', // justus
           '76561198072364318', // jamie
           '76561198069106193', // jack
       ];

       foreach ($ids as $key => $id) {
           if ($key == 1) sleep(1); // api limit 2 per second

           $client = new \GuzzleHttp\Client();
           $res = $client->request('GET',
               'https://api.rocketleaguestats.com/v1/player?unique_id='.$id.'&platform_id=1'.$auth);
           $data = json_decode($res->getBody());
           array_push($players, $data);
       }
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

       switch ($tier)
       {
           case 6: return 'https://rocketleague.tracker.network/Images/RL/ranked/s4-6.png';
           case 7: return 'https://rocketleague.tracker.network/Images/RL/ranked/s4-7.png';
           case 8: return 'https://rocketleague.tracker.network/Images/RL/ranked/s4-8.png';
       }
   }




}