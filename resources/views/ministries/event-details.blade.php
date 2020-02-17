@extends('layouts.template')
@section('content')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Past Event Details</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Ministries</a></li>
                    <li class="active">About {Praise And Worship}</li>
                    <li class="active">{Powernight 2017/2018}</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->
    <section class="event_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <img class="img-fluid" src="{{asset('image/event.jpg')}}" alt="">
                </div>
                <div class="col-md-4 align-self-center">
                    <ul class="list_style sermons_category event_category">
                        <li><i class="lnr lnr-user"></i>Saturday, 5th may, 2018</li>
                        <li><i class="lnr lnr-apartment"></i>Rocky beach Church</li>
                        <li><i class="lnr lnr-location"></i>Santa monica, Los Angeles, USA</li>
                        <li><a href="{{ route('gallery.show', ['id' => 1])}}" class="genric-btn info-border circle arrow">Gallery<span class="lnr lnr-arrow-right"></span></a></li>
                        <li><a href="{{ route('video.show', ['id' => 1])}}" class="genric-btn info-border circle arrow">Videos<span class="lnr lnr-arrow-right"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-9 event_details">
                    <a href="#"><h2 class="event_title">Spreading Peace to world</h2></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
