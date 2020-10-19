<?php

namespace App\Http\Controllers;

use App\CryptoMarket;
use App\Market;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function notfound(){
        abort(404);
    }

    public function index(){
        $news = Cache::has('latestnews') ? Cache::get('latestnews') : Cache::remember('latestnews', 180, function() {
            return $this->loadNews('all', 5);
        });

        return view('index', [
            'news' => $news
        ]);
    }

    public function open_live_account(){
        return view('pages.trading.open_live_account');
    }

    public function open_demo_account(){
        return view('pages.trading.open_demo_account');
    }

    public function copy_trade(){
        return view('pages.investments.copy_trade');
    }

    public function pamm(){
        return view('pages.investments.pamm');
    }

    public function broker(){
        return view('pages.partnership.broker');
    }

    public function forex(){
        return view('pages.products.forex');
    }

    public function economic_calendar(){
        return view('pages.analysis.ecocal');
    }

    public function analysis(){
        return view('pages.analysis.analysis');
    }

    public function news(){

        $fxNews = Cache::has('latestfxnews') ? Cache::get('latestfxnews') : Cache::remember('latestfxnews', 180, function() {
            return $this->loadNews('forex_news', 6);
        });

        $ecoNews = Cache::has('latestEcoNews') ? Cache::get('latestEcoNews') : Cache::remember('latestEcoNews', 180, function() {
            return $this->loadNews('economy_news', 6);
        });

        $ecoIndicators  = Cache::has('latestEcoInd') ? Cache::get('latestEcoInd') : Cache::remember('latestEcoInd', 180, function() {
            return $this->loadNews('economic_indicators', 6);
        });


        return view('pages.news.news', [
            'fx_news' => $fxNews,
            'eco_news' => $ecoNews,
            'eco_ind' => $ecoIndicators,
        ]);
    }

    public function news_detail(){
        return view('pages.news.news_detail');
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
