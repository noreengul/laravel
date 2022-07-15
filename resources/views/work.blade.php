@extends('layouts.app')

@section('content')
    <!-- blog head  -->
    <section id="blogs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="blog-head text-center">
                        <strong>latest</strong>
                        <strong class="blog-head"> creations for our clients</strong>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section id="blog-post">
        <div class="container">
            <!-- <div class="row"> -->
            <p class="work-section-links">
                <a class="section-links" href="#custom-illus">Custom Illustration</a
                >,<a class="section-links" href="#tshirt"> T-shirts</a>,
                <a class="section-links" href="#infogfx"> Infographics</a>,
                <a class="section-links" href="#covers"> Book Covers</a>,
                <a class="section-links" href=""> Brochures</a> ,
                <a class="section-links" href=""> Flyers</a>,
                <a class="section-links" href="">Online-ads</a> ,
                <a class="section-links" href="">Packaging</a> ,
                <a class="section-links" href="">Social Media</a>
            </p>
            <!-- </div> -->

            <div id="custom-illus">
                <p class="section-heading">Custom Illustration</p>
                <div class="section-block">
                    <div class="section-item">
                        <div class="project">
                            <img src="{{asset('imges/custom illustration//usa.jpg')}}" alt="" />
                            <div class="project-info text-center text-white">
                                <div>
                                    <h5 class="mt-3">Project Five</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-item">
                        <div class="project">
                            <img
                                src="{{asset('imges/custom illustration/shopify guzikart other.jpg')}}"
                                alt=""
                            />
                            <div class="project-info text-center text-white">
                                <div>
                                    <h5 class="mt-3">Project Five</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-item">
                        <div class="project">
                            <img src="{{asset('imges/custom illustration/spicy miami2.jpg')}}" alt="" />
                            <div class="project-info text-center text-white">
                                <div>
                                    <h5 class="mt-3">Project Five</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tshirt">
                <p class="section-heading">T-Shirts</p>
                <div class="section-block">
                    <div class="section-item">
                        <div class="project">
                            <img src="{{asset('imges/new/tripp2.jpg')}}" alt="" />
                            <div class="project-info text-center text-white">
                                <div>
                                    <h5 class="mt-3">Project One</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-item">
                        <div class="project">
                            <img src="{{asset('imges/new/tread.jpg')}}" alt="" />
                            <div class="project-info text-center text-white">
                                <div class="over-box">
                                    <h5 class="mt-3">Project Two</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-item">
                        <div class="project">
                            <img src="{{asset('imges/new/trippy.jpg')}} " alt="" />
                            <div class="project-info text-center text-white">
                                <div>
                                    <h5 class="mt-3">Project Three</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-item">
                        <div class="project">
                            <img src="{{asset('imges/new/tropical.jpg')}}" alt="" />
                            <div class="project-info text-center text-white">
                                <div>
                                    <h5 class="mt-3">Project Four</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="covers">
                    <p class="section-heading">Book Covers</p>
                    <div class="section-block">
                        <div class="section-item">
                            <div class="project">
                                <img src="{{asset('imges/book1.jpg')}}" alt="" />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Five</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-item">
                            <div class="project">
                                <img src="{{asset('imges/book2.jpg')}}" alt="" />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Six</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-item">
                            <div class="project">
                                <img src="{{asset('imges/book3.jpg')}}" alt="" />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Six</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-item">
                            <div class="project">
                                <img src="{{asset('imges/book4.jpg') }}" alt="" />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Six</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-item">
                            <div class="project">
                                <img src="{{asset('imges/book5.jpg')}}" alt="" />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Six</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
