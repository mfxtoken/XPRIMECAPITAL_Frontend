<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class NewsFetch extends Command
{
    protected $signature = 'news:fetch';
    protected $description = 'Fetches news from api';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $latestNews = $this->loadNews('all', 10);
        if($latestNews){
            Cache::forget('latestnews');
            Cache::put('latestnews', $latestNews, 3600);
        }
        Log::info("Latest news loaded");

        $fxNews = $this->loadNews('forex_news', 6);
        if($fxNews){
            Cache::forget('latestfxnews');
            Cache::put('latestfxnews', $fxNews, 3600);
        }
        Log::info("Forex news loaded");

        $ecoNews = $this->loadNews('economy_news', 6);
        if($ecoNews){
            Cache::forget('latestEcoNews');
            Cache::put('latestEcoNews', $ecoNews, 3600);
        }
        Log::info("Economy news loaded");

        $ecoIndicators = $this->loadNews('economic_indicators', 6);
        if($ecoNews){
            Cache::forget('latestEcoInd');
            Cache::put('latestEcoInd', $ecoIndicators, 3600);
        }
        Log::info("Economic indicators loaded");
    }

    private function loadNews($type, $count){
        $request_url = env('APIURL') . '/news?type=' . $type . '&count=' . $count;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $request_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            abort(500);
        }

        $responsejson = json_decode($response);
        return $responsejson->items;
    }
}
