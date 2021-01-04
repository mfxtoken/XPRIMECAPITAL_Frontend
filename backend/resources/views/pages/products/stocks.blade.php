@extends('layout.layout')

@section('content')


    <!-- Products Start -->
    <section class="products products-section noheadtitle">
        <div class="container">

            <!-- Title -->
            <div class="products-sitetitle">
                <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width900">
                    <h2>XPrime Delivers You The Best Of The Best. Enjoy It!</h2>
                    <p>The forex market is the largest and the biggest market in the world. All banks, financial institutions, hedge funds, brokers even central banks are contributor of this market.</p>
                    <p>Experience the most profitable market in the world with a regulated broker.</p>
                </div>
            </div>
            <!-- Title -->

            <!-- Features -->
            <div class="component-featuresbox">
                <ul class="sitefeaturesv1">
                    <li>
                        <div class="sitefeaturesv1-box">
                            <i class="icons-sprite sprite-60-sitefeatures-cyan icons12"></i>
                            <h4>Regulated & Licensed</h4>
                            <p>XPrime is a registered and regulated forex broker under SVGFSA with the license number of 38923.</p>
                        </div>
                    </li>
                    <li>
                        <div class="sitefeaturesv1-box">
                            <i class="icons-sprite sprite-60-sitefeatures-cyan icons13"></i>
                            <h4>Worldwide Service</h4>
                            <p>Hundreds of products including cryptos and stocks. Tightest spreads. Market swap ratios. No commission.</p>
                        </div>
                    </li>
                    <li>
                        <div class="sitefeaturesv1-box">
                            <i class="icons-sprite sprite-60-sitefeatures-cyan icons14"></i>
                            <h4>Best Conditions</h4>
                            <p>Our dedicated, multilingual customer service team works 24/5 to provide you with an exceptional level of support.</p>
                        </div>
                    </li>
                    <li>
                        <div class="sitefeaturesv1-box">
                            <i class="icons-sprite sprite-60-sitefeatures-cyan icons15"></i>
                            <h4>Fast Of The Fastest</h4>
                            <p>XPrime is fast. Real fast. In execution. In deposit and withdrawals. Just try and see for yourself.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Features -->

        </div>
    </section>
    <!-- Products End -->

    <!-- Products Content Start -->
    <section class="products products-content">
        <div class="container">

            <div class="products-content-row row">

                <!-- Image -->
                <div class="products-content-imgarea col-xl-auto">
                    <img src="/assets/img/section/products_section_forex.svg" alt="Stock CFDs" width="477" height="454" />
                </div>
                <!-- Image -->

                <!-- Title -->
                <div class="products-content-textarea col-xl">
                    <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-left">
                        <h2>CFD Trading Explained</h2>
                        <p>At City Index, we offer CFDs on thousands of individual markets including shares, indices, currencies, commodities, interest rates and bonds, allowing you instant exposure to major global markets including the UK, US, Europe, Asia, Australia and New Zealand.</p>
                        <p>With so much choice, it is important to find a trading opportunity that suits you. You can use the research tools provided on the trading platform to help you identify trading opportunities that match your trading style.</p>
                        <p>Use the search function on the platform or app to search and select your market. Learn more about our research tools here.</p>
                        <p>Once you have chosen a market, you need to know the current price. You can do this this by bringing up a trading ticket in the platform.</p>
                        <p>CFD markets have two prices. The first price quoted, is the sell price (the bid), and the second price is the buy price (the offer). The difference between the two is known as the spread. The price of your CFD is based on the price of the underlying instrument.</p>
                    </div>
                </div>
                <!-- Title -->

            </div>

            <div class="sitecontent-desc mt-5">
                <p>If you believe a market price will go up, you buy that market (known as going long). If you believe it will fall, you sell the market (going short).</p>
                <p>With CFD trading you select the number of CFDs you wish to trade.</p>
                <p>With equity trades, 1 CFD is equivalent to 1 share. When trading indices, FX, commodities, bonds or interest rates, the value of 1 CFD varies depending on the instrument. You can see which number you are trading on by looking up the 'tick value' in the instrument's market information sheets. CFDs are traded in the base currency of the market.</p>
                <p>CFD trading is a leveraged product which means you only need to have a small percentage of the overall trade value, known as margin, in your account in order to open the trade. Generally speaking, the larger the value of your trade, the more margin required. It is important that you have sufficient funds in the account to place the trade. The margin calculator in the trading platform will automatically calculate your initial margin for you.</p>
                <p>Before you place your trade, it's important to consider your risk management strategy.</p>
                <p>A key risk management technique is to place an order such as a stop loss that will automatically close the trade if the market reaches a certain level.</p>
                <p>A stop loss order is an instruction that allows the platform to close your open position once it reaches a specific level set by you. This will, as the name suggests, be at a price below the current market level and be triggered on losing trades to help minimise losses.</p>
            </div>

        </div>
    </section>
    <!-- Products Content End -->

    <!-- Summary Table Start -->
    <section class="products-summarytable">
        <div class="container">

            <!-- Title -->
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width900">
                <h2>Trade With XPrime Capital Online!</h2>
                <p>Trade hundreds of financial assets in one and single trading platform with almost zero spreads and zero commissions.</p>
            </div>
            <!-- Title -->

            <!-- Summary Table -->
            <div class="component-summarytable sitetabs">
                <div class="summarytable-tabcontent tab-content">
                    <div class="tab-pane fade show active" id="Popular" role="tabpanel" aria-labelledby="tab-Popular">
                        <div class="summarytable-tablearea">
                            <table class="summarytable-table sitetable linetable fixedtable hovertable table">
                                <thead>
                                <tr>
                                    <th><span>SYMBOL</span></th>
                                    <th><span>LAST PRICE</span></th>
                                    <th><span>ASK</span></th>
                                    <th><span>BID</span></th>
                                    <th><span>PRICE CHANGE</span></th>
                                    <th><span>PRICE CHANGE (%)</span></th>
                                    <th class="centercell btncell"><span>FREE BONUS</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($prices as $price)
                                    @php
                                        $priceClass = 'sitecolorred';
                                        if(floatval($price->price_change) > 0){
                                            $priceClass = 'sitecolorgreen';
                                        }
                                    @endphp
                                    <tr>
                                        <td><span>{{ $price->name }}</span></td>
                                        <td><span class="{{ $priceClass }}">{{ $price->last_price }}</span></td>
                                        <td><span>{{ $price->ask }}</span></td>
                                        <td><span>{{ $price->bid }}</span></td>
                                        <td><span class="{{ $priceClass }}">{{ $price->price_change }}</span></td>
                                        <td><span class="{{ $priceClass }}">% {{ $price->price_change_percent }}</span></td>
                                        <td class="centercell btncell"><a href="/trading/account/open-live-account" class="btn btn-sm rounded-pill btn-outline-info" title="START" rel="bookmark">START</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- TabContent -->
            </div>
            <!-- Summary Table -->

        </div>
    </section>
    <!-- Summary Table End -->

    @include('components.product_account_types')

    <x-common-platforms/>
    <x-common-about-us/>

@endsection
