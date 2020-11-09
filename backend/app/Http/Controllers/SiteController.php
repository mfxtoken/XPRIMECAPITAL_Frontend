<?php

namespace App\Http\Controllers;

use App\CryptoMarket;
use App\Market;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SiteController extends Controller
{
    private $newsCache = 3*60*60;

    public function notfound(){
        abort(404);
    }

    public function index(){

        $news = Cache::has('latestnews') ? Cache::get('latestnews') : Cache::remember('latestnews', $this->newsCache, function() {
            return $this->loadNews('all', 10);
        });
        return view('index', [
            'news' => array_slice($news, 0, 5)
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
        $request_url = env('APIURL') . '/economic_calendar';

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

        return view('pages.analysis.ecocal', [
            'calendarEvents' => $responsejson,
            'current_time' => date('H:i')
        ]);
    }

    public function analysis(Request $request){
        if(!$request->has('symbol')){
            return abort(404);
        }

        $symbol = $request->symbol;

        $cache_key = $symbol . 'analysis';
        $analysisData = Cache::has($cache_key) ? Cache::get($cache_key) : Cache::remember($cache_key, 36000, function() use($symbol) {
            $request_url = env('APIURL') . '/analysis/' . $symbol;
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
            return $responsejson;
        });

        if(is_null($analysisData)){
            return abort(404);
        }

        return view('pages.analysis.analysis', [
            'analysisData' => $analysisData,
            'symbol' => $symbol
        ]);
    }

    public function news(){

        $fxNews = Cache::has('latestfxnews') ? Cache::get('latestfxnews') : Cache::remember('latestfxnews', $this->newsCache, function() {
            return $this->loadNews('forex_news', 6);
        });

        $ecoNews = Cache::has('latestEcoNews') ? Cache::get('latestEcoNews') : Cache::remember('latestEcoNews', $this->newsCache, function() {
            return $this->loadNews('economy_news', 6);
        });

        $ecoIndicators  = Cache::has('latestEcoInd') ? Cache::get('latestEcoInd') : Cache::remember('latestEcoInd', $this->newsCache, function() {
            return $this->loadNews('economic_indicators', 6);
        });


        return view('pages.news.news', [
            'fx_news' => $fxNews,
            'eco_news' => $ecoNews,
            'eco_ind' => $ecoIndicators,
        ]);
    }

    public function news_detail($newsid){
        $cache_key = $newsid . '_nd';
        $news = Cache::has($cache_key) ? Cache::get($cache_key) : Cache::rememberForever($cache_key, function() use($newsid) {
            return $this->loadNewsDetail($newsid);
        });

        $latesNews = Cache::has('latestnews') ? Cache::get('latestnews') : Cache::remember('latestnews', $this->newsCache, function() {
            return $this->loadNews('all', 10);
        });

        return view('pages.news.news_detail', [
            'news' => $news,
            'latestNews' => $latesNews
         ]);
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
            Log::error($err);
            abort(500);
        }

        $responsejson = json_decode($response);
        return $responsejson->items;
    }

    protected function loadNewsDetail($newsid){
        $request_url = env('APIURL') . '/news/'. $newsid;
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
        return $responsejson;
    }
}
