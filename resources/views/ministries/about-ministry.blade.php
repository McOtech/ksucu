@extends('layouts.template')
@section('content')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">About Praise And Worship</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Ministry</a></li>
                    <li class="active">View Details</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================Sermons work Area =================-->
    <section class="sermons_work_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2>Welcome To Praise And Worship Ministry</h2>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from</p>
            </div>
            <div class="sermons_slider owl-carousel">
                <div class="item row">
                    <div class="col-lg-8">
                        <div class="sermons_image">
                        <img src="{{asset('image/sermns.jpg')}}" alt="">
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sermons_content">
                            <h3 class="title_color">That I May Know You And The Power Of Your Resurection. Philipian 3: 10</h3>
                            <ul class="list_style sermons_category">
                                <li><i class="lnr lnr-user"></i><span>Memories: </span><a href="#"> @KSUCU Worship Team</a></li>
                                <li><i class="lnr lnr-database"></i><span>Event: </span> Maseno</li>
                                <li><i class="lnr lnr-calendar-full"></i><span>Date:</span> 5th may, 2018</li>
                            </ul>
                        <a href="{{ route('event.show', ['id' => 2])}}" class="btn_hover">View More Details</a>
                        </div>
                    </div>
                </div>
                <div class="item row">
                    <div class="col-lg-8">
                        <div class="sermons_image">
                        <img src="{{asset('image/sermns.jpg')}}" alt="">
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sermons_content">
                            <h3 class="title_color">That I May Know You And The Power Of Your Resurection. Philipian 3: 10</h3>
                            <ul class="list_style sermons_category">
                                <li><i class="lnr lnr-user"></i><span>Memories: </span><a href="#"> @KSUCU Worship Team</a></li>
                                <li><i class="lnr lnr-database"></i><span>Event: </span> Maseno</li>
                                <li><i class="lnr lnr-calendar-full"></i><span>Date:</span> 5th may, 2018</li>
                            </ul>
                            <a href="#" class="btn_hover">View More Details</a>
                        </div>
                    </div>
                </div>
                <div class="item row">
                    <div class="col-lg-8">
                        <div class="sermons_image">
                        <img src="{{asset('image/sermns.jpg')}}" alt="">
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sermons_content">
                            <h3 class="title_color">That I May Know You And The Power Of Your Resurection. Philipian 3: 10</h3>
                            <ul class="list_style sermons_category">
                                <li><i class="lnr lnr-user"></i><span>Memories: </span><a href="#"> @KSUCU Worship Team</a></li>
                                <li><i class="lnr lnr-database"></i><span>Event: </span> Maseno</li>
                                <li><i class="lnr lnr-calendar-full"></i><span>Date:</span> 5th may, 2018</li>
                            </ul>
                            <a href="#" class="btn_hover">View More Details</a>
                        </div>
                    </div>
                </div>
                <div class="item row">
                    <div class="col-lg-8">
                        <div class="sermons_image">
                        <img src="{{asset('image/sermns.jpg')}}" alt="">
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sermons_content">
                            <h3 class="title_color">That I May Know You And The Power Of Your Resurection. Philipian 3: 10</h3>
                            <ul class="list_style sermons_category">
                                <li><i class="lnr lnr-user"></i><span>Memories: </span><a href="#"> @KSUCU Worship Team</a></li>
                                <li><i class="lnr lnr-database"></i><span>Event: </span> Maseno</li>
                                <li><i class="lnr lnr-calendar-full"></i><span>Date:</span> 5th may, 2018</li>
                            </ul>
                            <a href="#" class="btn_hover">View More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Sermons work Area=================-->

    <!--================ Ministry Description Area =================-->
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <h3 class="mb-30 title_color">Chairperson</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="team_item">
                            <div class="team_img">
                            <img src="{{asset('image/elements/d.jpg')}}" alt="team" class="img-fluid">
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>Philip Goodwin</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 mt-sm-20 left-align-p">
                        <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.</p>
                    </div>
                </div>
            </div>
            <div class="section-top-border text-right">
                <h3 class="mb-30 title_color">Secretary</h3>
                <div class="row">
                    <div class="col-md-9">
                        <p class="text-right">Over time, even the most sophisticated, memory packed computer can begin to run slow if we don’t do something to prevent it. The reason why has less to do with how computers are made and how they age and more to do with the way we use them. You see, all of the daily tasks that we do on our PC from running programs to downloading and deleting software can make our computer sluggish. To keep this from happening, you need to understand the reasons why your PC is getting slower and do something to keep your PC running at its best. You can do this through regular maintenance and PC performance optimization programs</p>
                        <p class="text-right">Before we discuss all of the things that could be affecting your PC’s performance, let’s talk a little about what symptoms</p>
                    </div>
                    <div class="col-md-3">
                        <div class="team_item">
                            <div class="team_img">
                            <img src="{{asset('image/elements/d.jpg')}}" alt="team" class="img-fluid">
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>Philip Goodwin</h3>
                            </div>
                        </div>
                        <!-- <img src="image/elements/d.jpg" alt="" class="img-fluid"> -->
                    </div>
                </div>
            </div>
            <div class="section-top-border">
                <h3 class="mb-30 title_color">Our Mission</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote">
                            “Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking”
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ Ministry Description Area =================-->

    <!--================Features Area =================-->
    <section class="features_area">
        <div class="row m0">
            <div class="col-md-3 features_item">
                <h3>Our Policy</h3>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence and upturning of the natural.</p>
                <a href="{{-- route('policy.show', ['id' => 1])--}}{{asset('image/policy/pw_policy.pdf')}}" class="btn_hover view_btn">View Details</a>
            </div>
            <div class="col-md-3 features_item">
                <h3>Members</h3>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence and upturning of the natural.</p>
            <a href="{{ route('members.show', ['id' => 1])}}" class="btn_hover view_btn">View Details</a>
            </div>
            <div class="col-md-3 features_item">
                <h3>Our Library</h3>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence and upturning of the natural.</p>
                <a href="{{ route('library.show', ['id' => 1])}}" class="btn_hover view_btn">View Details</a>
            </div>
            <div class="col-md-3 features_item">
                <h3>Our Gallery</h3>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence and upturning of the natural.</p>
            <a href="{{ route('gallery.show', ['id' => 1])}}" class="btn_hover view_btn">View Details</a>
            </div>
        </div>
    </section>
    <!--================Features Area =================-->

    <!--================Event Blog Area=================-->
    <section class="event_blog_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2>Upcoming Events</h2>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="event_post">
                    <img src="{{asset('image/blog1.jpg')}}" alt="">
                        <a href="#"><h2 class="event_title">Spreading Peace to world</h2></a>
                        <ul class="list_style sermons_category">
                            <li><i class="lnr lnr-user"></i>Saturday, 5th may, 2018</li>
                            <li><i class="lnr lnr-apartment"></i>Rocky beach Church</li>
                            <li><i class="lnr lnr-location"></i>Santa monica, Los Angeles, USA</li>
                        </ul>
                        <a href="#" class="btn_hover">View Details</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="event_post">
                    <img src="{{asset('image/blog2.jpg')}}" alt="">
                        <a href="#"><h2 class="event_title">Spreading Peace to world</h2></a>
                        <ul class="list_style sermons_category">
                            <li><i class="lnr lnr-user"></i>Saturday, 5th may, 2018</li>
                            <li><i class="lnr lnr-apartment"></i>Rocky beach Church</li>
                            <li><i class="lnr lnr-location"></i>Santa monica, Los Angeles, USA</li>
                        </ul>
                        <a href="#" class="btn_hover">View Details</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="event_post">
                    <img src="{{asset('image/blog3.jpg')}}" alt="">
                        <a href="#"><h2 class="event_title">Spreading Light to world</h2></a>
                        <ul class="list_style sermons_category">
                            <li><i class="lnr lnr-user"></i>Saturday, 5th may, 2018</li>
                            <li><i class="lnr lnr-apartment"></i>Rocky beach Church</li>
                            <li><i class="lnr lnr-location"></i>Santa monica, Los Angeles, USA</li>
                        </ul>
                        <a href="#" class="btn_hover">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area=================-->
@endsection
