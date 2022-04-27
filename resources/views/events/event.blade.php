@extends('layouts.main')
@include('layouts.navigation')
@section('content')
<section class="w3l-inner-page-main">
    <div class="breadcrumb-infhny">
        <div class="container">
            <nav aria-label="breadcrumb">
                <h2 class="hny-title text-center">Event</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="w3l-wecome-content-6">
    <div class="ab-content-6-mian py-5">
        <div class="container py-lg-5">
            {{-- <h3 class="hny-title text-center">{{$event->title}}<span class="dot-1">.</span> --}}
            </h3>
            <div class="welcome-grids row">
                <div class="col-lg-4 mb-lg-0 mb-5">
                    <div class="event-right1" style="background:#3d3935; color:white">
                        <div class="categories mb-4 p-sm-4 p-3 border">
                        {{-- <span style="font-size:3em; color:#f08b0f;">15{{$time}}</span><span>Apr</span> --}}
                            <div class="row posts-grid mt-4">
                                <div class="col-lg-4 col-sm-4 posts-grid-left pr-0">
                                    <h4>
                                        Date
                                    </h4>
                                </div>
                                <div class="col-lg-8 col-sm-8 posts-grid-right mt-sm-0 mt-4">
                                    <span class="fa fa-calendar mr-2" aria-hidden="true"></span>15/05/18</li>
                                </div>
                            </div>
                            <hr style="border-top:1px solid white"/>
                            <div class="row posts-grid mt-4">
                                <div class="col-lg-4 col-sm-4 posts-grid-left pr-0">
                                    <h4>
                                        Venue
                                    </h4>
                                </div>
                                <div class="col-lg-8 col-sm-8 posts-grid-right mt-sm-0 mt-4">
                                    <span class="fa fa-building mr-2" aria-hidden="true"></span>No 23 Muhammdu Buhari way Abuja Nigeria</li>
                                </div>
                            </div>
                            <hr style="border-top:1px solid white"/>
                            <div class="row posts-grid mt-4">
                                <div class="col-lg-4 col-sm-4 posts-grid-left pr-0">
                                    <h4>
                                      Time
                                    </h4>
                                </div>
                                <div class="col-lg-8 col-sm-8 posts-grid-right mt-sm-0 mt-4">
                                    <span class="fa fa-clock mr-2" aria-hidden="true">10:00 PM - 4:00 PM</li>
                                </div>
                            </div>
                            <hr style="border-top:1px solid white"/>
                        </div>
                    </div>
                    <a href="single.html" class="read-more-btn btn" style="width:100%"> Start Register Here</a>
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <p>
                        Sed ut perspiciatis unde omnis iste.
                        In consectetur, elit in scelerisque malesuada, 
                        tellus leo viverra massa, nec malesuada turpis lectus ac urna. 
                        Suspendisse ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, 
                        fermentum viverra eros. Praesent neque purus, 
                        rhoncus nec nibh non, mollis sodales odio. 
                        Nullam facilisis diam non magna porta luctus. 
                        Aenean facilisis erat posuere erat ornare ultrices.
                         Aliquam ac arcu interdum, dapibus nibh convallis, semper augue.
                    </p>
                    <div class="p-4 my-4" style="background:#eee">
                        <p>
                            <span class="fa fa-quote-left mr-2" style="font-size:20px;color:black"></span>nibh eu consequat magna ipsum ac ex. Nulla
                            iaculis
                            tincidunt elit, tortor luctus sit amet.
                            Morbi in porta dolor. Morbi eget dui elit. consequat magna ipsum ac ex, Nulla iaculis
                            consequat
                            magna ipsum ac ex Nulla iaculis.
                            <span class="fa fa-quote-right ml-2" style="font-size:20px;color:black"></span>
                        </p>
                        <a href="#" class="mt-3 font-weight-bold text-right blockquote-footer">James Doe</a>
                    </div>
                    <table>
                        {{-- @foreach ($event->properties as $property)
                            <tr  class="col-md-12" style="border-bottom: 1px solid #e2e2e2;" >
                                <th style="padding: 25px 15px 25px 0;width:25%">
                                   {{$property['key']}}
                                </th>
                                <td style="padding: 25px 0 25px 15px; width:75%">
                                   {{$property['value']}}
                                </td>
                            </tr>
                        @endforeach --}}

                        {{-- <tr style="border-bottom: 1px solid #e2e2e2;">
                            <th style="padding: 25px 15px 25px 0;width:25%">
                                Who should attend:
                            </th>
                            <td style="padding: 25px 0 25px 15px; width:75%">
                                Ecommerce exporters
                            </td>
                        </tr> --}}
                        {{-- <tr style="border-bottom: 1px solid #e2e2e2;">
                            <th style="padding: 25px 15px 25px 0;width:25%">
                                Speakers:
                            </th>
                            <td style="padding: 25px 0 25px 15px; width:75%">
                                Sitah Leung Parnell, Account Manager (ANZ) ,Global Business Group, Facebook
                                Anastasia Pavlovic, Account Manager (ANZ), Global Business Group, Facebook
                                Andrew Cohen, Strategic Partnerships Manager, Shopify
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e2e2;">
                            <th style="padding: 25px 15px 25px 0;width:25%">
                                What is a webinar:
                            </th>
                            <td style="padding: 25px 0 25px 15px; width:75%">
                                A webinar is a seminar or presentation that's transmitted
                                 over the internet where each participant sits at their 
                                 computer and is connected to other participants via the
                                 internet. A presenter has control of the meeting and the 
                                 participants view the screen of the presenter and listen 
                                 to the presenter speaking either by telephone or by
                                  accessing an integrated audio facility.
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e2e2;">
                            <th style="padding: 25px 15px 25px 0;width:25%">
                               Please Note:
                            </th>
                            <td style="padding: 25px 0 25px 15px; width:75%">
                                Austrade is recording this webinar session and may 
                                make the recorded version of the webinar (including all 
                                audio and visual elements) accessible to internal Austrade 
                                staff and the general public via the Austrade website 
                                www.austrade.gov.au and other communication means.
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e2e2;">
                            <th style="padding: 25px 15px 25px 0;width:25%">
                               Cost:
                            </th>
                            <td style="padding: 25px 0 25px 15px; width:75%">
                                These events are free, but participants must register. 
                                The registration confirmation email will include all
                                 webinar log-on information.  </td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e2e2;">
                            <th style="padding: 25px 15px 25px 0;width:25%">
                               For more information please contact:
                            </th>
                            <td style="padding: 25px 0 25px 15px; width:75%">
                                Jack Lu
                                Senior e-Commerce Advisor, 
                                Austrade  </td>
                        </tr> --}}
                    </table>
                    <a href="single.html" class="read-more-btn btn"> Start Register Here</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection