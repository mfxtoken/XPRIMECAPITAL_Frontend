<?php

use App\CryptoMarket;
use App\Market;
use Illuminate\Support\Facades\Cache;

if (! function_exists('getMarketPrices')) {
    function getMarketPrices()
    {
        $prices = Cache::has('marketprices') ? Cache::get('marketprices') : Cache::remember('marketprices', 60, function() {
            return Market::where('status', 1)->orderBy('type','asc')->orderBy('market_name','asc')->get();
        });

        return $prices;
    }
}

if (! function_exists('getCryptoPrices')) {
    function getCryptoPrices()
    {
        $prices = Cache::has('cryptoprices') ? Cache::get('cryptoprices') : Cache::remember('cryptoprices', 60, function() {
            return CryptoMarket::where('status', 1)->select('market_name','price','bid','ask')->orderBy('price', 'desc')->get();
        });

        return $prices;
    }
}


if (! function_exists('getNewsSpot')) {
    function getNewsSpot($news)
    {
        $newsSpot = $news->news_detail[1];
        $newsSpot = str_replace('Investing.com - ', '', $newsSpot);
        $newsSpot = str_replace('Investing.com -- ', '', $newsSpot);
        $newsSpot = str_replace('TAIPEI (Reuters) - ', '', $newsSpot);
        $newsSpot = str_replace('SINGAPORE (Reuters) - ', '', $newsSpot);
        $newsSpot = str_replace('(Bloomberg) -- ', '', $newsSpot);
        $newsSpot = str_replace('LONDON (Reuters) - ', '', $newsSpot);
        return $newsSpot;
    }
}

if (! function_exists('getNewsDate')) {
    function getNewsDate($news)
    {
        return $news->publish_date;
        return date('d F Y', strtotime($news->publish_date));
    }
}
