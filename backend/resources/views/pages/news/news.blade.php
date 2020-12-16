@extends('layout.layout')

@section('content')
    <!-- Research Start -->
    <section class="research-section section-content noheadtitle">
        <div class="container">

            <!-- News -->
            <div class="research-news">

            @include('components.category_news', [
                'news' => $fx_news,
                'title' => 'Forex <span>News</span>'
            ]);

            @include('components.category_news', [
                'news' => $eco_news,
                'title' => 'Economy <span>News</span>'
            ]);

            @include('components.category_news', [
                'news' => $eco_ind,
                'title' => 'Economic <span>Indicators</span>'
            ]);

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
