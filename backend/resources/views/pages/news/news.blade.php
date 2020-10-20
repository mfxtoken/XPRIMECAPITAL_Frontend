@extends('layout.layout')

@section('content')
    <!-- Research Start -->
    <section class="research-section section-content noheadtitle">
        <div class="container">

            <!-- News -->
            <div class="research-news">

                <!-- News Category List -->
                <div class="research-newsblock">
                    <div class="newscontcatbox boxcolorcyan">

                        <!-- HeadArea -->
                        <div class="newscontcatbox-headarea">
                            <div class="row">
                                <div class="sitetitle sitetitle-lg sitetitle-dark sitetitle-left col-xs">
                                    <h2>Forex <span>News</span></h2>
                                </div>
                                <div class="col-xs-auto">
                                    <a href="Research_News_CatList.html" class="btn rounded-pill btn-outline-secondary" title="All Forex News" rel="bookmark">All Forex News</a>
                                </div>
                            </div>
                        </div>
                        <!-- HeadArea -->

                        <!-- NewsArea -->
                        <div class="newscontcatbox-newsarea">
                            <div class="row">
                                <div class="newscontcatbox-newsarea-big col-xl">
                                    <div class="headnewstopimg">
                                        <a href="/research/news/{{ $fx_news[0]->_id }}" class="newsimgbg" style="background-image: url({{ $fx_news[0]->image_url }});" title="{{ $fx_news[0]->title }}" rel="bookmark"></a>
                                    </div>
                                    <div class="headnewstopinfo">
                                        <span class="headnewsinfodate">{{ getNewsDate($fx_news[0]) }}</span>
                                    </div>
                                    <div class="sitecontent-desc">
                                        <h3><a href="/research/news/{{ $fx_news[0]->_id }}" title="" rel="bookmark">{{ $fx_news[0]->title }}</a></h3>
                                        <p>{{ getNewsSpot($fx_news[0]) }}</p>
                                    </div>
                                    <div class="headnewsreadbtn">
                                        <a href="/research/news/{{ $fx_news[0]->_id }}" class="btn rounded-pill btn-secondary" title="Read News" rel="bookmark">Read News</a>
                                    </div>
                                </div>
                                <div class="newscontcatbox-newsarea-list col-xl">
                                    <div class="newslistscrollbar">
                                        <ul>
                                            @php $first = true @endphp
                                            @foreach($fx_news as $n)
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-auto">
                                                            <div class="listnewstopimg">
                                                                <a href="/research/news/{{ $n->_id }}" class="newsimgbg" style="background-image: url({{ $n->image_url }});" title="{{ $n->title }}" rel="bookmark"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm">
                                                            <div class="sitecontent-desc">
                                                                <h5><a href="/research/news/{{ $n->_id }}" title="" rel="bookmark">{{ $n->title }}</a></h5>
                                                                <p>{{ getNewsSpot($n) }}</p>
                                                            </div>
                                                            <div class="listnewsinfo">
                                                                <span class="listnewsinfodate">{{ getNewsDate($n) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                @php $first = false @endphp
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- NewsArea -->

                    </div>
                </div>
                <!-- News Category List -->

                <!-- News Category List -->
                <div class="research-newsblock">
                    <div class="newscontcatbox boxcolorblue">

                        <!-- HeadArea -->
                        <div class="newscontcatbox-headarea">
                            <div class="row">
                                <div class="sitetitle sitetitle-lg sitetitle-dark sitetitle-left col-xs">
                                    <h2>Economy <span>News</span></h2>
                                </div>
                                <div class="col-xs-auto">
                                    <a href="Research_News_CatList.html" class="btn rounded-pill btn-outline-secondary" title="All Economy News" rel="bookmark">All Economy News</a>
                                </div>
                            </div>
                        </div>
                        <!-- HeadArea -->

                        <!-- NewsArea -->
                        <div class="newscontcatbox-newsarea">
                            <div class="row">
                                <div class="newscontcatbox-newsarea-big col-xl">
                                    <div class="headnewstopimg">
                                        <a href="/research/news/{{ $eco_news[0]->_id }}" class="newsimgbg" style="background-image: url({{ $eco_news[0]->image_url }});" title="{{ $eco_news[0]->title }}" rel="bookmark"></a>
                                    </div>
                                    <div class="headnewstopinfo">
                                        <span class="headnewsinfodate">{{ getNewsDate($eco_news[0]) }}</span>
                                    </div>
                                    <div class="sitecontent-desc">
                                        <h3><a href="/research/news/{{ $eco_news[0]->_id }}" title="" rel="bookmark">{{ $eco_news[0]->title }}</a></h3>
                                        <p>{{ getNewsSpot($eco_news[0]) }}</p>
                                    </div>
                                    <div class="headnewsreadbtn">
                                        <a href="/research/news/{{ $eco_news[0]->_id }}" class="btn rounded-pill btn-secondary" title="Read News" rel="bookmark">Read News</a>
                                    </div>
                                </div>
                                <div class="newscontcatbox-newsarea-list col-xl">
                                    <div class="newslistscrollbar">
                                        <ul>
                                            @php $first = true @endphp
                                            @foreach($eco_news as $n)
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-auto">
                                                            <div class="listnewstopimg">
                                                                <a href="/research/news/{{ $n->_id }}" class="newsimgbg" style="background-image: url({{ $n->image_url }});" title="{{ $n->title }}" rel="bookmark"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm">
                                                            <div class="sitecontent-desc">
                                                                <h5><a href="/research/news/{{ $n->_id }}" title="" rel="bookmark">{{ $n->title }}</a></h5>
                                                                <p>{{ getNewsSpot($n) }}</p>
                                                            </div>
                                                            <div class="listnewsinfo">
                                                                <span class="listnewsinfodate">{{ getNewsDate($n) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                @php $first = false @endphp
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- NewsArea -->

                    </div>
                </div>
                <!-- News Category List -->

                <!-- News Category List -->
                <div class="research-newsblock">
                    <div class="newscontcatbox boxcolorgreen">

                        <!-- HeadArea -->
                        <div class="newscontcatbox-headarea">
                            <div class="row">
                                <div class="sitetitle sitetitle-lg sitetitle-dark sitetitle-left col-xs">
                                    <h2>Economic <span>Indicator</span></h2>
                                </div>
                                <div class="col-xs-auto">
                                    <a href="Research_News_CatList.html" class="btn rounded-pill btn-outline-secondary" title="All Economic Indicator" rel="bookmark">All Economic Indicator</a>
                                </div>
                            </div>
                        </div>
                        <!-- HeadArea -->

                        <!-- NewsArea -->
                        <div class="newscontcatbox-newsarea">
                            <div class="row">
                                <div class="newscontcatbox-newsarea-big col-xl">
                                    <div class="headnewstopimg">
                                        <a href="/research/news/{{ $eco_ind[0]->_id }}" class="newsimgbg" style="background-image: url({{ $eco_ind[0]->image_url }});" title="{{ $eco_ind[0]->title }}" rel="bookmark"></a>
                                    </div>
                                    <div class="headnewstopinfo">
                                        <span class="headnewsinfodate">{{ getNewsDate($eco_ind[0]) }}</span>
                                    </div>
                                    <div class="sitecontent-desc">
                                        <h3><a href="/research/news/{{ $eco_ind[0]->_id }}" title="" rel="bookmark">{{ $eco_ind[0]->title }}</a></h3>
                                        <p>{{ getNewsSpot($eco_ind[0]) }}</p>
                                    </div>
                                    <div class="headnewsreadbtn">
                                        <a href="/research/news/{{ $eco_ind[0]->_id }}" class="btn rounded-pill btn-secondary" title="Read News" rel="bookmark">Read News</a>
                                    </div>
                                </div>
                                <div class="newscontcatbox-newsarea-list col-xl">
                                    <div class="newslistscrollbar">
                                        <ul>
                                            @php $first = true @endphp
                                            @foreach($eco_ind as $n)
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-auto">
                                                            <div class="listnewstopimg">
                                                                <a href="/research/news/{{ $n->_id }}" class="newsimgbg" style="background-image: url({{ $n->image_url }});" title="{{ $n->title }}" rel="bookmark"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm">
                                                            <div class="sitecontent-desc">
                                                                <h5><a href="/research/news/{{ $n->_id }}" title="" rel="bookmark">{{ $n->title }}</a></h5>
                                                                <p>{{ getNewsSpot($n) }}</p>
                                                            </div>
                                                            <div class="listnewsinfo">
                                                                <span class="listnewsinfodate">{{ getNewsDate($n) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                @php $first = false @endphp
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- NewsArea -->

                    </div>
                </div>
                <!-- News Category List -->

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
            $('.newslistscrollbar').perfectScrollbar();
        });
    </script>
    <!-- Perfect Scrollbar Script -->


    <x-common-platforms/>
    <x-common-about-us/>

@endsection
