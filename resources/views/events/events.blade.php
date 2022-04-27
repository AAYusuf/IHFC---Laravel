@extends('layouts.main')
@include('layouts.navigation')
@section('content')
<section class="w3l-inner-page-main">
    <div class="breadcrumb-infhny">
        <div class="container">
            <nav aria-label="breadcrumb">
                <h2 class="hny-title text-center">Events</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="w3l-services-sec-6">
    <div class="services-sec-6-main py-5">
        <div class="container py-lg-5">
           <h3 class="hny-title text-center">Upcoming Events <span class="dot-1">.</span></h3>
           <div class="welcome-grids row">
            <div class="col-lg-3 mb-lg-0 mb-5">
            </div>
            <div class="col-lg-8 col-md-12 col-12">
                {{-- @foreach($events as $event)
                <article class="px-2 py-3 mt-3" style="background:#eae9ea">
                    <header>
                        <a> 27 Apr 2020</a>
                        <a href="/event" class="news-article-a"><h3> {{$event->title}}</h3></a>
                    </header>
                    <p>{{$event->caption}}
                    </p>
                   <a href="/event/{{ $event->id }}" class="read-more-btn btn"> Read More</a>
                </article>
                @endforeach
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $events->links() }}
                    </div>
                </div> --}}
                <article class="px-2 py-3 mt-3" style="background:#eae9ea">
                    <header>
                        <a> 27 Apr 2020</a>
                        <a href="#" class="news-article-a"><h3> Korea Covid-19 update with AustCham Korea</h3></a>
                    </header>
                    <p>This webinar will provide an update on
                        how the Korean market is being impacted 
                        and is responding to the COVID-19 crisis. 
                        Hear insights and information from Rodney 
                        Commerford, Senior Trade and Investment 
                        Commissioner Seoul, Austrade, Yooni Kim, 
                        COO at Novo ...
                    </p>
                   <a href="single.html" class="read-more-btn btn"> Read More</a>
                </article>
                <article class="px-2 py-3 mt-3" style="background:#eae9ea">
                    <header>
                        <a> 27 Apr 2020</a>
                        <a href="#" class="news-article-a"><h3> Korea Covid-19 update with AustCham Korea</h3></a>
                    </header>
                    <p>This webinar will provide an update on
                        how the Korean market is being impacted 
                        and is responding to the COVID-19 crisis. 
                        Hear insights and information from Rodney 
                        Commerford, Senior Trade and Investment 
                        Commissioner Seoul, Austrade, Yooni Kim, 
                        COO at Novo ...
                    </p>
                   <a href={{url('/event/1')}} class="read-more-btn btn"> Read More</a>
                </article>
                <article class="px-2 py-3 mt-3" style="background:#eae9ea">
                    <header>
                        <a> 27 Apr 2020</a>
                        <a href="#" class="news-article-a"><h3> Korea Covid-19 update with AustCham Korea</h3></a>
                    </header>
                    <p>This webinar will provide an update on
                        how the Korean market is being impacted 
                        and is responding to the COVID-19 crisis. 
                        Hear insights and information from Rodney 
                        Commerford, Senior Trade and Investment 
                        Commissioner Seoul, Austrade, Yooni Kim, 
                        COO at Novo ...
                    </p>
                   <a href="single.html" class="read-more-btn btn"> Read More</a>
                </article>
            </div>
           </div>
        </div>
    </div>
</section>

@endsection 