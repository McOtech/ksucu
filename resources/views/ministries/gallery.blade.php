@extends('layouts.template')
@section('content')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Image Gallery</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Gallery</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================Breadcrumb Area =================-->
    <section class="gallery_area section_gap">
        <div class="container">
            <div class="row imageGallery1" id="gallery">
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/gallery/01.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/gallery/01.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/gallery/02.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/gallery/02.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/gallery/03.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/gallery/03.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/gallery/04.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/gallery/04.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/gallery/06.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/gallery/05.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/gallery/05.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/gallery/06.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Gallery Area =================-->
@endsection