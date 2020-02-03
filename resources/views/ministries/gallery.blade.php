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
                    <img src="{{asset('image/gallery/01.jpg')}}" alt="">
                        <div class="hover">
                        <a class="light" href="{{asset('image/gallery/01.jpg')}}"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                    <img src="{{asset('image/gallery/02.jpg')}}" alt="">
                        <div class="hover">
                        <a class="light" href="{{asset('image/gallery/02.jpg')}}"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                    <img src="{{asset('image/gallery/03.jpg')}}" alt="">
                        <div class="hover">
                        <a class="light" href="{{asset('image/gallery/03.jpg')}}"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                    <img src="{{asset('image/gallery/04.jpg')}}" alt="">
                        <div class="hover">
                        <a class="light" href="{{asset('image/gallery/04.jpg')}}"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                    <img src="{{asset('image/gallery/06.jpg')}}" alt="">
                        <div class="hover">
                        <a class="light" href="{{asset('image/gallery/06.jpg')}}"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                    <img src="{{asset('image/gallery/05.jpg')}}" alt="">
                        <div class="hover">
                        <a class="light" href="{{asset('image/gallery/05.jpg')}}"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Gallery Area =================-->
@endsection

@section('footer')
    <script src="{{asset('template/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('template/js/popper.js')}}"></script>
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('template/vendors/lightbox/simpleLightbox.min.js')}}"></script>
    <script src="{{asset('template/vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('template/vendors/isotope/isotope-min.js')}}"></script>
    <script src="{{asset('template/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('template/js/mail-script.js')}}"></script>
    <script src="{{asset('template/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('template/js/stellar.js')}}"></script>
    <script src="{{asset('template/js/custom.js')}}"></script>
@endsection
