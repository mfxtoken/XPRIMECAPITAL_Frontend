<!-- Footer Start -->
<footer class="footer">

    <!-- Footer Mount Start -->
    <div class="footer-mount"></div>
    <!-- Footer Mount End -->

    <!-- Footer Top Start -->
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-row row">

                <!-- Logo -->
                <div class="footer-logo col-12">
                    <div class="footer-logo-line">
                        <img src="/assets/img/footer/footer_logo.svg" alt="XPrime Capital" width="131" height="131" />
                    </div>
                </div>
                <!-- Logo -->

                <!-- Address -->
                <div class="footer-address col-lg-auto">
                    <h4>Office Locations</h4>
                    <ul>
                        <li><strong>Dubai:</strong> 2nd Dec Road Jafiliya, Trade Center Area, Dubai, United Arab Emirates</li>
                        <li><strong>Frankfurt:</strong> Schweizer Str. 28a 30, 60594 Frankfurt am Main, Germany</li>
                        <li><strong>London:</strong> Cabot Square, Canary Wharf, London E14 4QT, United Kingdom</li>
                        <li><strong>Malta:</strong> Triq san Gorg, St Paul's Bay SPB 3482, Malta</li>
                        <li><strong>Russia:</strong> Tverskaya St, 18, Moscow, Russia, 125007</li>
                    </ul>
                </div>
                <!-- Address -->

                <!-- Navigation -->
                <div class="footer-navigation col-lg">
                    <div class="row">
                        <div class="footer-navigation-col navmultimenu col-sm-6 col-xl-3">
                            <div class="row">
                                <div class="col-xm-6 col-xl-12">
                                    <h4>Trading</h4>
                                    <ul class="footer-navigation-list">
                                        <li><a href="{{ route('open_live_account') }}" title="Start Trading Now" rel="category">Start Trading Now</a></li>
                                        <li><a href="{{ route('open_demo_account') }}" title="Try Demo Account" rel="category">Try Demo Account</a></li>
                                        <li><a href="{{ route('account_types') }}" title="Account Types" rel="category">Account Types</a></li>
                                    </ul>
                                </div>
                                <div class="col-xm-6 col-xl-12">
                                    <h4>Products</h4>
                                    <ul class="footer-navigation-list">
                                        <li><a href="{{ route('forex') }}" title="Forex" rel="category">Forex</a></li>
                                        <li><a href="{{ route('commodities') }}" title="Commodities" rel="category">Commodities</a></li>
                                        <li><a href="{{ route('indices') }}" title="Indices" rel="category">Indices</a></li>
                                        <li><a href="{{ route('stocks') }}" title="Stocks CFDs" rel="category">Stocks CFDs</a></li>
                                        <li><a href="{{ route('cryptocurrencies') }}" title="Cryptocurrencies" rel="category">Cryptocurrencies</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-navigation-col navmultimenu col-sm-6 col-xl-3">
                            <div class="row">
                                <div class="col-xm-6 col-xl-12">
                                    <h4>Investments</h4>
                                    <ul class="footer-navigation-list">
                                        <li><a href="{{ route('pamm') }}" title="PAMM" rel="category">PAMM</a></li>
                                        <li><a href="{{ route('copy_trade') }}" title="Copy Trade" rel="category">Copy Trade</a></li>
                                    </ul>
                                </div>
                                <div class="col-xm-6 col-xl-12">
                                    <h4><a href="{{ route('education') }}" title="Education" rel="category">Education</a></h4>
                                    <h4><a href="{{ route('company') }}" title="Company" rel="category">Company</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="footer-navigation-col navmultimenu col-sm-12 col-xl-3">
                            <div class="row">
                                <div class="col-xs-6 col-md-3 col-xl-12">
                                    <h4>Platforms</h4>
                                    <ul class="footer-navigation-list">
                                        <li><a href="{{ route('mt5') }}" title="Metatrader 5 PC" rel="category">Metatrader 5 PC</a></li>
                                        <li><a href="{{ route('mt5') }}" title="Metatrader 5 Web" rel="category">Metatrader 5 Web</a></li>
                                        <li><a href="{{ route('mt5') }}" title="Metatrader 5 Mobil" rel="category">Metatrader 5 Mobil</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-6 col-md-3 col-xl-12">
                                    <h4>Partnership</h4>
                                    <ul class="footer-navigation-list">
                                        <li><a href="{{ route('broker') }}" title="Be A Introducing Broker" rel="category">Be A Introducing Broker</a></li>
                                        <li><a href="{{ route('affiliate') }}" title="Be An Affiliate" rel="category">Be An Affiliate</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-md-6 col-xl-12">
                                    <h4>Economic Cal & News</h4>
                                    <ul class="footer-navigation-list">
                                        <li><a href="{{ route('economic_calendar') }}" title="Economic Calendar" rel="category">Economic Calendar</a></li>
                                        <li><a href="{{ route('news') }}" title="News" rel="category">News</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-navigation-col colmultimenu col-sm-12 col-xl-3">
                            <h4>Analysis</h4>
                            <ul class="footer-navigation-list ">
                                <li><a href="{{ route('analysis', ["symbol" => 'EURUSD']) }}" title="EUR/USD" rel="category">EUR/USD</a></li>
                                <li><a href="{{ route('analysis', ["symbol" => 'GBPUSD']) }}" title="GBP/USD" rel="category">GBP/USD</a></li>
                                <li><a href="{{ route('analysis', ["symbol" => 'NZDUSD']) }}" title="NZD/USD" rel="category">NZD/USD</a></li>
                                <li><a href="{{ route('analysis', ["symbol" => 'USDCHF']) }}" title="USD/CHF" rel="category">USD/CHF</a></li>
                                <li><a href="{{ route('analysis', ["symbol" => 'USDJPY']) }}" title="USD/JPY" rel="category">USD/JPY</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Navigation -->

            </div>
        </div>
    </div>
    <!-- Footer Top End -->

    <!-- Risk Warning -->
    <div class="container">
        <div class="footer-risk">
            <h6>RISK WARNING</h6>
            <p>All financial products traded on margin carry a high degree of risk to your capital. They are not suited to all investors and you can lose more than your initial deposit. Please ensure that you fully understand the risks involved and seek independent advice if necessary. For further information, please see our full Risk Warning, <a href="{{ route('terms_conditions') }}" title="Terms and Conditions" rel="bookmark">Terms and Conditions</a> and <a href="{{ route('privacy_policy') }}" title="Privacy Policy" rel="bookmark">Privacy Policy</a>.</p>
            <p>We use cookies to support features like login and allow trusted media partners to analyse aggregated site usage. Keep cookies enabled to enjoy the full site experience. By browsing our site with cookies enabled, you are agreeing to their use. Review our cookies information for <a href="{{ route('cookie_policy') }}" title="Cookie Policy" rel="bookmark">more details</a></p>
        </div>
    </div>
    <!-- Risk Warning -->

    <!-- Copyright -->
    <div class="container">
        <div class="footer-copyright">
            <div class="footer-copyright-row row">
                <div class="copyright col-sm">
                    <p><strong>© 2020 XPrime Capital</strong>, All Rights Reserved</p>
                </div>
                <div class="socialmedia col-sm-auto">
                    <ul class="sociallist">
                        <li class="d-none"><a href="{{ config('app.social_fb') }}" data-toggle="tooltip" data-placement="bottom" title="Follow us on Facebook" rel="external nofollow" target="_blank"><i class="socialicon icons-sprite sprite-24-socialmedia icons-facebook"></i></a></li>
                        <li><a href="{{ config('app.social_tw') }}" data-toggle="tooltip" data-placement="bottom" title="Follow on Twitter" rel="external nofollow" target="_blank"><i class="socialicon icons-sprite sprite-24-socialmedia icons-twitter"></i></a></li>
                        <li class="d-none"><a href="{{ config('app.social_li') }}" data-toggle="tooltip" data-placement="bottom" title="Follow on LinkedIn" rel="external nofollow" target="_blank"><i class="socialicon icons-sprite sprite-24-socialmedia icons-linkedin"></i></a></li>
                        <li><a href="{{ config('app.social_ins') }}" data-toggle="tooltip" data-placement="bottom" title="Follow on Instagram" rel="external nofollow" target="_blank"><i class="socialicon icons-sprite sprite-24-socialmedia icons-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer End -->
