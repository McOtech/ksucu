@extends('layouts.template')
@section('content')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">{Praise and Worship} Members</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Members</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================Team Area =================-->
    <section class="team_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2>Current Members</h2>
                <p><a href="#" class="genric-btn info-border circle arrow">View Alumni Here<span class="lnr lnr-arrow-right"></span></a></p>
            </div>
            <div class="row mb_30">
                <div class="col-md-3 col-sm-6">
                    <div class="team_item">
                        <div class="team_img">
                        <img src="{{asset('image/team1.jpg')}}" alt="team">
                            <ul class="list_style">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <a href="#" style="color: inherit;">
                            <div class="content">
                                <h3>Philip Goodwin</h3>
                                <p>Chief Pastor</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team_item">
                        <div class="team_img">
                        <img src="{{asset('image/team2.jpg')}}" alt="team">
                            <ul class="list_style">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <a href="#" style="color: inherit;">
                            <div class="content">
                                <h3>Duane Lewis</h3>
                                <p>Chief Pastor</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team_item">
                        <div class="team_img">
                        <img src="{{asset('image/team3.jpg')}}" alt="team">
                            <ul class="list_style">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <a href="#" style="color: inherit;">
                            <div class="content">
                                <h3>Jose Austin</h3>
                                <p>Chief Pastor</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team_item">
                        <div class="team_img">
                        <img src="{{asset('image/team5.jpg')}}" alt="team">
                            <ul class="list_style">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <a href="#" style="color: inherit;">
                            <div class="content">
                                <h3>Leroy Lopez</h3>
                                <p>Chief Pastor</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Team Area =================-->
@endsection
