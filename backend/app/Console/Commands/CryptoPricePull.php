<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\CryptoMarket;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;


class CryptoPricePull extends Command
{
    protected $signature = 'price:crypto';
    protected $description = 'Loads crypto market prices';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $jsonurl = "http://price.icrypex.com/getcurrency?symbol=BTCUSD,LTCUSD,XRPUSD,ETHUSD,XLMUSD";
        $json = @file_get_contents($jsonurl);
        if($json){
            $data = json_decode($json);
            foreach ($data->result as $item){
                print_r($item);
                echo "\n\n";
                $market = CryptoMarket::where('market_name', $item->symbols)->first();
                if(is_null($market)){
                    $market = new CryptoMarket();
                    $market->market_name = $item->symbols;
                }

                $market->price = floatval($item->price);
                $market->bid = floatval($item->bid);
                $market->ask = floatval($item->ask);
                $market->save();
            }
        }
        Log::info("Crypto prices loaded");
        Cache::forget('cryptoprices');
    }
}
