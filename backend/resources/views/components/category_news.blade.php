<!-- News Category List -->
<div class="research-newsblock">
    <div class="newscontcatbox boxcolorcyan">

        <!-- HeadArea -->
        <div class="newscontcatbox-headarea">
            <div class="row">
                <div class="sitetitle sitetitle-lg sitetitle-dark sitetitle-left col-xs">
                    <h2>{!! $title !!}</h2>
                </div>
                <div class="col-xs-auto">
{{--                    <a href="Research_News_CatList.html" class="btn rounded-pill btn-outline-secondary" title="All Forex News" rel="bookmark">All Forex News</a>--}}
                </div>
            </div>
        </div>
        <!-- HeadArea -->

        <!-- NewsArea -->
        <div class="newscontcatbox-newsarea">
            <div class="row">
                <div class="newscontcatbox-newsarea-big col-xl">
                    <div class="headnewstopimg">
                        <a href="/research/news/{{ $news[0]->id }}" class="newsimgbg" style="background-image: url({{ $news[0]->image }});" title="{{ $news[0]->title }}" rel="bookmark"></a>
                    </div>
                    <div class="headnewstopinfo">
                        <span class="headnewsinfodate">{{ date('F d, Y', strtotime($news[0]->publish_date)) }}</span>
                    </div>
                    <div class="sitecontent-desc">
                        <h3><a href="/research/news/{{ $news[0]->id }}" title="" rel="bookmark">{{ $news[0]->title }}</a></h3>
                        <p>{{ substr(strip_tags($news[0]->detail), 0, 150) }} ...</p>
                    </div>
                    <div class="headnewsreadbtn">
                        <a href="/research/news/{{ $news[0]->id }}" class="btn rounded-pill btn-secondary" title="Read News" rel="bookmark">Read News</a>
                    </div>
                </div>
                <div class="newscontcatbox-newsarea-list col-xl">
                    <div class="newslistscrollbar">
                        <ul>
                            @php $first = true @endphp
                            @foreach($news as $n)
                                <li>
                                    <div class="row">
                                        <div class="col-sm-auto">
                                            <div class="listnewstopimg">
                                                <a href="/research/news/{{ $n->id }}" class="newsimgbg" style="background-image: url({{ $n->image }});" title="{{ $n->title }}" rel="bookmark"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="sitecontent-desc">
                                                <h5><a href="/research/news/{{ $n->id }}" title="" rel="bookmark">{{ $n->title }}</a></h5>
                                                <p>{{ substr(strip_tags($n->detail), 0, 150) }} ...</p>
                                            </div>
                                            <div class="listnewsinfo">
                                                <span class="listnewsinfodate">{{ date('F d, Y', strtotime($n->publish_date)) }}</span>
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
