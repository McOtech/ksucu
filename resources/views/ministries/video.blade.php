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
                        <video autoplay="false" controls="" src="image/gallery/07.mp4" style="width: 100%; height: 100%;"></video>
                        <div class="hover">
                            <a class="light" href="video.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Gallery Area =================-->
@endsection
