@extends('layout.layout')

@section('content')

    <!-- Products Start -->
    <section class="products products-section noheadtitle">
        <div class="container">

            <!-- Title -->
            <div class="products-sitetitle">
                <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width900">
                    <h2>Bitcoin. Financial Revolution. Trade It!</h2>
                    <p>Crypto currencies are the Z generations of the financial industry. Social. Digital. Realistic. Unlimited. Ethical. Unique. And rebel somehow. With XPRIME CAPITAL cutting-edge trading platform you can buy or sell major crypto currencies in one basket. Hedge your self and benefit from the huge price movements and maximise it with leverage.</p>
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
                        <h2>Bitcoin. Financial Revolution. Trade It!</h2>
                        <p>Crypto currencies are the Z generations of the financial industry. Social. Digital. Realistic. Unlimited. Ethical. Unique. And rebel somehow. With XPRIME CAPITAL cutting-edge trading platform you can buy or sell major crypto currencies in one basket. Hedge your self and benefit from the huge price movements and maximise it with leverage.</p>
                    </div>
                </div>
                <!-- Title -->

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
                                    <th><span>LOW</span></th>
                                    <th><span>HIGH</span></th>
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
                                        <td><span>{{ $price->low }}</span></td>
                                        <td><span>{{ $price->high }}</span></td>
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
