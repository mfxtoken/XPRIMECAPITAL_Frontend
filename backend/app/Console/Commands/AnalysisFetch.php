<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class AnalysisFetch extends Command
{
    protected $signature = 'analysis:fetch';
    protected $description = 'Fetches analysis data from api';


    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $analysis = $this->loadAnalysis('EURUSD');
        if($analysis){
            Cache::forget('EURUSDanalysis');
            Cache::put('EURUSDanalysis', $analysis, 36000);
        }

        $analysis = $this->loadAnalysis('GBPUSD');
        if($analysis){
            Cache::forget('GBPUSDanalysis');
            Cache::put('GBPUSDanalysis', $analysis, 36000);
        }

        $analysis = $this->loadAnalysis('USDJPY');
        if($analysis){
            Cache::forget('USDJPYanalysis');
            Cache::put('USDJPYanalysis', $analysis, 36000);
        }

        $analysis = $this->loadAnalysis('NZDUSD');
        if($analysis){
            Cache::forget('NZDUSDanalysis');
            Cache::put('NZDUSDanalysis', $analysis, 36000);
        }

        $analysis = $this->loadAnalysis('USDCHF');
        if($analysis){
            Cache::forget('USDCHFanalysis');
            Cache::put('USDCHFanalysis', $analysis, 36000);
        }
    }

    public function loadAnalysis($symbol){
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
    }
}
