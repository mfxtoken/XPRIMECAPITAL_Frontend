@extends('layout.layout')

@section('content')
    <!-- Research Start -->
    <section class="research-section section-content noheadtitle">
        <div class="container">

            <!-- News -->
            <div class="research-news">
                <div class="row">

                    <!-- News Detail -->
                    <div class="research-newsdetailcol col-lg">
                        <div class="research-newsblock">
                            <div class="newscontcatbox boxcolorcyan">

                                <!-- HeadArea -->
                                <div class="newscontcatbox-headarea">
                                    <div class="sitetitle sitetitle-lg sitetitle-dark sitetitle-left">
                                        <h1>{{ $news->title }}</h1>
                                    </div>
                                </div>
                                <!-- HeadArea -->

                                <!-- NewsArea -->
                                <div class="newscontcatbox-newsdetail">
                                    <div class="headnewstopimg">
                                        <div class="newsimgbg" style="background-image: url({{ $news->image_url }});"></div>
                                    </div>
                                    <div class="headnewstopinfo">
                                        @switch($news->type)
                                            @case("forex_news")
                                            <h2 class="headnewsinfocat">Forex News</h2>
                                            @break

                                            @case("economic_indicators")
                                            <h2 class="headnewsinfocat">Economic Indicators</h2>
                                            @break

                                            @case("economy_news")
                                            <h2 class="headnewsinfocat">Economy News</h2>
                                            @break
                                        @endswitch
                                        <span class="headnewsinfodate">{{ getNewsDate($news) }}</span>
                                    </div>
                                    <div class="sitecontent-desc">
                                        @foreach($news->news_detail as $item)
                                            <p>{!! $item !!}</p>
                                        @endforeach
                                    </div>
                                    <div class="headallnewsbtn">
                                        <a href="/research/news" class="btn rounded-pill btn-outline-secondary" title="All News" rel="bookmark">All News</a>
                                    </div>
                                </div>
                                <!-- NewsArea -->

                            </div>
                        </div>
                    </div>
                    <!-- News Detail -->

                    <!-- News Sidebar -->
                    <div class="research-newssidebarcol col-lg-auto">
                        <div class="newscontsidebox">

                            <!-- HeadArea -->
                            <div class="newscontsidebox-headarea">
                                <div class="sitetitle sitetitle-md sitetitle-dark sitetitle-left">
                                    <h4>Recommended</h4>
                                </div>
                            </div>
                            <!-- HeadArea -->

                            <!-- News List -->
                            <div class="newscontsidebox-newslist newssidelistscrollbar">
                                <ul>
                                    @foreach($latestNews as $n)
                                        <li>
                                            <div class="sitecontent-desc">
                                                <h5><a href="/research/news/{{ $n->_id }}" title="" rel="bookmark">{{ $n->title }}</a></h5>
                                            </div>
                                            <div class="listnewsinfo">
                                                <span class="listnewsinfodate">{{ getNewsDate($n) }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- News List -->

                        </div>
                    </div>
                    <!-- News Sidebar -->

                </div>
            </div>
            <!-- News -->

        </div>
    </section>
    <!-- Research End -->

    <!-- Perfect Scrollbar Script -->
    <link id="css-perfect-scrollbar" rel="stylesheet" href="/assets/cdn/perfect-scrollbar/perfect-scrollbar.min.css">
    <script id="script-perfect-scrollbar-jquery" src="/assets/cdn/perfect-scrollbar/perfect-scrollbar.jquery.min.js"></script>
    <script id="script-perfect-scrollbar" src="/assets/cdn/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $(document).ready(function($){
            $('.newssidelistscrollbar').perfectScrollbar();
        });
    </script>
    <!-- Perfect Scrollbar Script -->


    <x-common-platforms/>
    <x-common-about-us/>

@endsection
