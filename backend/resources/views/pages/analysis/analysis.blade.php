@extends('layout.layout')

@section('content')
    <!-- Research Start -->
    <section class="research-section section-content noheadtitle">
        <div class="container">

            <!-- Analysis -->
            <div class="research-analysis sitecontent-desc">
                <h1>EUR/USD trading around 1.1750 amid dollar weakness, ahead of ZEW data</h1>
                <p>EUR/USD is trading around 1.1750, marginally higher. The safe-haven dollar is under pressure amid an upbeat market mood. The German ZEW figures are awaited.&nbsp;</p>

                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div id="tradingview_19de1" style="height: 500px;"><div id="tradingview_c2cdd-wrapper" style="position: relative;box-sizing: content-box;width: 100%;height: 100%;margin: 0 auto !important;padding: 0 !important;font-family:Arial,sans-serif;"><div style="width: 100%;height: 100%;background: transparent;padding: 0 !important;"><iframe id="tradingview_c2cdd" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_c2cdd&amp;symbol=FX%3AEURUSD&amp;interval=D&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=light&amp;style=1&amp;timezone=Etc%2FUTC&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en&amp;utm_source=ixbrokers.local&amp;utm_medium=widget_new&amp;utm_campaign=chart&amp;utm_term=FX%3AEURUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe></div></div></div>
                    <div class="tradingview-widget-copyright" style="width: 100%;"><a href="https://www.tradingview.com/symbols/FX-USDTRY/" rel="noopener" target="_blank"><span class="blue-text">USDTRY Chart</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js" wfd-invisible="true"></script>
                    <script type="text/javascript" wfd-invisible="true">
                        new TradingView.widget(
                            {
                                "autosize": true,
                                "symbol": "FX:EURUSD",
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

                <h3>Technical Overview</h3>
                <p><em></em></p>
                <p>EUR/USD looks to have formed a double top bearish reversal pattern on the daily chart with the neckline support at 1.1696 (Aug. 3 low). A daily close below that level would confirm the double top breakdown and create room for a sell-off to 1.1475 (target as per the measured height method).&nbsp;</p>
                <p>A move to the double top necklines support at 1.1696 looks likely with the recent candlestick arrangement signaling a bullish-to-bearish trend change and bearish divergences of the the 14-day relative strength index and the slow stochastic.&nbsp;</p>
                <h3>Fundamental Overview</h3>
                <p>ZEW Economic Sentiment figures for Germany and the&nbsp;<a href="https://www.fxstreet.com/economic-calendar/united-states/country/c9822cb1-6cee-45f4-a9a2-89d136990308">Eurozone</a>&nbsp;are scheduled for release at 09:00 GMT.&nbsp;</p>
                <p>The German ZEW Economic Sentiment, which measures the difference between the share of investors that are optimistic and pessimistic, is forecasted to have dropped to 58.00 in August from July's 59.3. A below-forecast print would strengthen the case for a notable pullback put forward by technical studies.&nbsp;</p>
                <p>Later in the day, the focus would shift to the US NFIB Business Optimism Index (Jul) and Producer Price Index (July).&nbsp;</p>
                <p>Apart from the macro data releases, the pair could take cues from the US Congress' discussions and negotiations regarding the next federal stimulus package. President Trump said on Monday that that top congressional Democrats wanted to meet him for discussing virus-related economic relief, reviving hopes for additional stimulus. Also,&nbsp;<a href="https://www.fxstreet.com/news">news</a>&nbsp;flow&nbsp;related to the lingering US-China tensions could influence demand for the safe-haven&nbsp;<a href="https://www.fxstreet.com/economic-calendar/united-states">US</a>&nbsp;dollar. At press time, the pair is trading largely unchanged on the day at 1.1747.</p>
            </div>
            <!-- Analysis -->

        </div>
    </section>
    <!-- Research End -->

    <x-common-about-us/>
@endsection
