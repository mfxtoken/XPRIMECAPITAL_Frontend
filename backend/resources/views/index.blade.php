@extends('layout.layout')

@section('content')
    <x-home-slider/>
    <x-home-features/>
    <x-common-platforms/>

    <!-- News Start -->
    <section class="home-news">
        <div class="container">

            <!-- News Category List -->
            <div class="home-news-newscat">

                <!-- Head Big News -->
                <div class="home-news-newscat-head">
                    <div class="home-news-newscat-head-row">
                        <div class="home-news-newscat-head-imgarea">
                            <div class="bignewstopimg">
                                <a href="/research/news/{{ $news[0]->_id }}" class="newsimgbg" style="background-image: url({{ $news[0]->image_url }});" title="{{ $news[0]->title }}" rel="bookmark"></a>
                            </div>
                        </div>
                        <div class="home-news-newscat-head-textarea">
                            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-left sitetitle-line">
                                <h2><a href="#" title="Latest News" rel="bookmark">Latest News</a></h2>
                            </div>
                            <div class="headnewstopimg">
                                <a href="/research/news/{{ $news[0]->_id }}" class="newsimgbg" style="background-image: url({{ $news[0]->image_url }});" title="{{ $news[0]->title }}" rel="bookmark"></a>
                            </div>
                            <div class="headnewstopinfo">
                                <span class="headnewsinfodate sitecolorcyan">{{ getNewsDate($news[0]) }}</span>
                            </div>
                            <div class="sitecontent-desc">
                                <h3><a href="/research/news/{{ $news[0]->_id }}" title="" rel="bookmark">{{ $news[0]->title }}</a></h3>
                                <p>{{ getNewsSpot($news[0]) }}</p>
                            </div>
                            <div class="headnewsreadbtn">
                                <a href="/research/news/{{ $news[0]->_id }}" class="btn rounded-pill btn-info" title="Read News" rel="bookmark">Read News</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Head Big News -->
                <!-- List Owl News -->
                <div class="home-news-newscat-owlbox">
                    <div class="home-news-newscat-owlbox-row">
                        <div class="home-news-newscat-owlbox-listarea">
                            <ul class="homenewsnewscatlistowl owl-carousel owl-theme">

                                @php $first = true @endphp
                                @foreach($news as $n)
                                    @if(!$first)
                                        <li>
                                            <div class="listnewstopimg">
                                                <a href="/research/news/{{ $n->_id }}" class="newsimgbg" style="background-image: url({{ $n->image_url }});" title="{{ $n->title }}" rel="bookmark"></a>
                                            </div>
                                            <div class="listnewsinfo">
                                                <span class="listnewsinfodate sitecolorcyan">{{ getNewsDate($n) }}</span>
                                            </div>
                                            <div class="sitecontent-desc">
                                                <h5><a href="/research/news/{{ $n->_id }}" title="" rel="bookmark">{{ $n->title }}</a></h5>
                                                <p>{{ getNewsSpot($n) }}</p>
                                            </div>
                                            <div class="listnewsreadbtn">
                                                <a href="/research/news/{{ $n->_id }}" class="btn btn-sm rounded-pill btn-info" title="Read News" rel="bookmark">Read News</a>
                                            </div>
                                        </li>
                                    @endif
                                    @php $first = false @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- List Owl News -->

            </div>
            <!-- News Category List -->

        </div>
    </section>
    <!-- News End -->


    <x-common-trade-mobile/>
@endsection
