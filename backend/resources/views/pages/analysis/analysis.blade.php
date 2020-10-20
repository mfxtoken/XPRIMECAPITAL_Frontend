@extends('layout.layout')

@section('content')
    <!-- Research Start -->
    <section class="research-section section-content noheadtitle">
        <div class="container">

            <!-- Analysis -->
            <div class="research-analysis sitecontent-desc">
                <h1>{!! $analysisData->title !!}</h1>
                <p>{!! $analysisData->spot !!}</p>


                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div id="tradingview_19de1" style="height: 500px;"><div id="tradingview_c2cdd-wrapper" style="position: relative;box-sizing: content-box;width: 100%;height: 100%;margin: 0 auto !important;padding: 0 !important;font-family:Arial,sans-serif;"><div style="width: 100%;height: 100%;background: transparent;padding: 0 !important;"><iframe id="tradingview_c2cdd" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_c2cdd&amp;symbol=FX%3AEURUSD&amp;interval=D&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=light&amp;style=1&amp;timezone=Etc%2FUTC&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en&amp;utm_source=ixbrokers.local&amp;utm_medium=widget_new&amp;utm_campaign=chart&amp;utm_term=FX%3AEURUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe></div></div></div>
                    <div class="tradingview-widget-copyright" style="width: 100%;"><a href="https://www.tradingview.com/symbols/FX-USDTRY/" rel="noopener" target="_blank"><span class="blue-text">USDTRY Chart</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js" wfd-invisible="true"></script>
                    <script type="text/javascript" wfd-invisible="true">
                        new TradingView.widget(
                            {
                                "autosize": true,
                                "symbol": "FX:{{$symbol}}",
                                "interval": "D",
                                "timezone": "Etc/UTC",
                                "theme": "light",
                                "style": "1",
                                "locale": "en",
                                "toolbar_bg": "#f1f3f6",
                                "enable_publishing": false,
                                "allow_symbol_change": true,
                                "container_id": "tradingview_19de1"
                            }
                        );
                    </script>
                </div>
                <!-- TradingView Widget END -->

                @if(count($analysisData->technical_overviews) > 0)
                    <h3>Technical Overview</h3>
                    <p><em></em></p>
                    @foreach($analysisData->technical_overviews as $item)
                        <p>{!! $item !!}</p>
                    @endforeach
                @endif

                @if(count($analysisData->fundamental_overviews) > 0)
                    <h3>Fundamental Overview</h3>
                    @foreach($analysisData->fundamental_overviews as $item)
                        <p>{!! $item !!}</p>
                    @endforeach
                @endif
            </div>
            <!-- Analysis -->

        </div>
    </section>
    <!-- Research End -->

    <x-common-about-us/>
@endsection
