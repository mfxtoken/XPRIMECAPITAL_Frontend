
<!-- Sticky Ticker Start -->
<div class="stickyside-ticker">
    <div class="container">
        <div class="stickyside-ticker-row">

            <!-- Ticker -->
            <div class="foottickercol">
                <ul class="stickytickersowl owl-carousel owl-theme">
                    @foreach($marketPrices as $market)
                        <li>
                            <small class="stickytickersowl-symbol">{{ $market->market_name }}</small>
                            <span class="stickytickersowl-price">{{ sprintf('%0.4f', $market->current_price) }}</span>
                        </li>
                    @endforeach
                    @foreach($cryptoPrices as $market)
                        <li>
                            <small class="stickytickersowl-symbol">{{ $market->market_name }}</small>
                            <span class="stickytickersowl-price">{{ sprintf('%0.4f', $market->price) }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- Ticker -->

            <!-- Risk -->
            <div class="footriskcol">
                <h6>Invest Responsibly:</h6>
                <p>Trading CFDs involves significant risks.</p>
            </div>
            <!-- Risk -->

            <!-- Open Account -->
            <div class="footopenacccol">
                <div class="openaccountbtns">
                    <a href="{{ route('open_live_account') }}" class="btn rounded-pill btn-success" title="Start Trading Now" rel="bookmark">Start Trading Now</a>
                </div>
            </div>
            <!-- Open Account -->

        </div>
    </div>
</div>
<!-- Sticky Ticker End -->
