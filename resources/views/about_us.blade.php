@extends('layouts.app')

@section('content')
    <section id="hero" class="text-white overlay " data-jarallax data-speed="0.2" class="jarallax">
        <div class="container">
            <div class="row ">
                <div class=" col-lg-6 col-sm-6  d-flex justify-content-center align-items-center ">
                    <h1 class="hero-title">meet our <br> team</h1>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="pic-logo">
                        <img src="{{asset('imges/top.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="text-center bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-4 col-sm-6 ">
                    <div class="logo-2">
                        <img src="{{asset('imges/PHOTO.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-sm-6 ">
                    <p class="para-1"> <strong>Hey, I'm Damian.</strong>  <br> Art is my passion. I has been working as an illustrator and graphic artist for ten years. I work with individual clients and large companies. I have been running the company myself for several years, therefore, knowing the need of the entrepreneur and graphic designers, beign fully aware of what challenges and problems can arise while ordering projects, I created this portal.</p>
                </div>
            </div>

        </div>

    </section>

    <!-- about-2  -->

    <section id="about-2" class="text-white">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class=" col-lg-7 col-sm-6">
                    <h5 class="text-white"><strong class="text-white">our team:</strong></h5>
                    <p class="text-white">We work with professionals in this fields, each of them has its own individual style, which is why our effer is wide. We're developing, each of us improves our skills to best meet the needs of our clients. <br>
                        We are open to suggestion and cooperation with the clients.</p>
                </div>
                <div class="col-lg-5 col-sm-6 col-md-6 text-end">
                    <div class="logo-3">
                        <img src="{{asset('imges/frontpage/TEAM.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--end-->

    <!-- mission  -->
    <section id="services" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 intro mx-auto text-center text-capitalize">
                    <h3><strong>Our mission:</strong></h3>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="service-box  p-lg-5 p-4">
                        <div class="icon-box me-3">
                            <i class='bx bx-support'></i>
                        </div>
                        <div>
                            <h5 class="service-title">support</h5>
                            <p class="service-para"> We support the development of your business through the highest quality products and professional service.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box p-lg-5 p-4">
                        <div class="icon-box me-3">
                            <i class='bx bxs-edit'></i>
                        </div>
                        <div>
                            <h5 class="service-title">create</h5>
                            <p class="service-para">The content is to teach, inform and inspire others.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box p-lg-5 p-4">
                        <div class="icon-box me-3">
                            <i class='bx bxl-meta'></i>
                        </div>
                        <div>
                            <h5 class="service-title">develop</h5>
                            <p class="service-para">We invest in our development to be flexible and open to the needs of our clients.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--end-->
@endsection
