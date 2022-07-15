@extends('layouts.app')

@section('content')
    <!-- design section  -->
    <section id="design-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mb-3 plan">
                    <h1 class="des-title">choose the right plan <br> for you</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- pricing section  -->
    <section id="pricing">
        <section class="section-100">
            <div class="container">

                <div class="main-pricing-container">
                    <div class="pricing-card">
                        <div class="pricing-card_header">
                            <h3 class="text-center head">Basic</h3>
                            <h1 class="text-center">$349/mo</h1>

                            <h5 class="text-center">paid monthly</h5>
                        </div>
                        <div class="pricing-card_content">
                            <ul>
                                <li><i class="fa fa-check"></i>graphic design</li>
                                <li class="ps-4">custom illustration</li>
                                <li class="ps-4">infography</li>
                                <li class="ps-4">motion design</li>
                                <li class="ps-4">presentaion design</li>
                                <li class="ps-4">dedicated designer</li>
                                <li class="text-lowercase"><i class="fa fa-check"></i><strong> 1-2 days turnaround</strong></li>
                                <li><i class="fa fa-check"></i> unlimited revisions</li>
                                <li><i class="fa fa-check"></i> unlimited requests</li>
                                <li class="ps-4">source file</li>
                                <li class="ps-4 text-capitalize">prioritized support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pricing-card pricing-card--annual mx-2 pb-5">
                        <div class="pricing-card_header">
                            <h3 class="text-center head">standard</h3>
                            <h1 class="text-center">$699/mo</h1>
                            <h5 class="text-center">paid monthly</h5>
                        </div>
                        <div class="pricing-card_content tick">
                            <ul>
                                <li><i class="fa fa-check"></i>graphic design</li>
                                <li><i class="fa fa-check"></i>custom illustration</li>
                                <li class="ps-4">infography</li>
                                <li class="ps-4">motion design</li>
                                <li class="ps-4">presentaion design</li>
                                <li><i class="fa fa-check"></i>dedicated designer</li>
                                <li class="text-lowercase"><i class="fa fa-check"></i><strong> 1-2 days turnaround</strong></li>
                                <li><i class="fa fa-check"></i> unlimited revisions</li>
                                <li><i class="fa fa-check"></i> unlimited requests</li>
                                <li><i class="fa fa-check"></i> source file</li>
                                <li class="ps-4 text-capitalize">prioritized support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pricing-card">
                        <div class="pricing-card_header">
                            <h3 class="text-center head">Expert</h3>
                            <h1 class="text-center">$1149/mo</h1>
                            <h5 class="text-center">paid monthly</h5>
                        </div>
                        <div class="pricing-card_content">
                            <ul>
                                <li><i class="fa fa-check"></i>graphic design</li>
                                <li><i class="fa fa-check"></i>custom illustration</li>
                                <li><i class="fa fa-check"></i>infography</li>
                                <li><i class="fa fa-check"></i>motion design</li>
                                <li><i class="fa fa-check"></i>presentaion design</li>
                                <li><i class="fa fa-check"></i>dedicated designer</li>
                                <li class=""><i class="fa fa-check"></i><strong> same-day turnaround</strong></li>
                                <li><i class="fa fa-check"></i> <strong>unlimited revisions</strong></li>
                                <li><i class="fa fa-check"></i> <strong>unlimited requests</strong></li>
                                <li><i class="fa fa-check"></i> source file</li>
                                <li><i class="fa fa-check"></i>prioritized support</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-3 plan">
                        <h1 class="des-t text-black">not sure which plan is for you? </h1>
                        <h1 class="des-t text-black">or you need special plan? </h1>
                        <h1 class="des-c">contact us!</h1>
                    </div>
                </div>
        </section>
    </section>

    <!-- pricing packge  -->
    <section id="packge">
        <div class="container mb-5">
            <div class="row  gy-md-5">
                <div class="col-12">
                    <h1 class="plan-title text-center">all plans include</h1>
                </div>
            </div>
            <div class="row gx-0 my-3">
                <div class="col-lg-3">
                    <div class="plan-box">
                        <div class="plan-icon">
                            <i class='bx bx-git-pull-request'></i>
                        </div>
                        <h2 class="p-title">unlimited <br> requests</h2>
                        <p class="p-text">request as many design as you need even if you have already submitted 100.</p>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="plan-box pb-4">
                        <div class="plan-icon">
                            <i class='bx bx-badge'></i>
                        </div>
                        <h2 class="p-title">unlimited <br> revision</h2>
                        <p class="p-text">we'll keep editing untill your satisfaction.</p>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="plan-box pb-4">
                        <div class="plan-icon">
                            <i class='bx bx-align-middle'></i>
                        </div>
                        <h2 class="p-title">a dedicated  <br> designer</h2>
                        <p class="p-text">work  with your designer directly. </p>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="plan-box">
                        <div class="plan-icon">
                            <i class='bx bx-album'></i>
                        </div>
                        <h2 class="p-title">fast & faster <br>turnaround times </h2>
                        <p class="p-text">most request onlt take one or two  business days--even same-day.</p>

                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-4 offset-lg-2">
                    <div class="plan-box">
                        <div class="plan-icon">
                            <i class='bx bx-add-to-queue'></i>
                        </div>
                        <h2 class="p-title">access to free <br> stock photos</h2>
                        <p class="p-text">make your brand and your designs unique with free stock photos via unsplash</p>

                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="plan-box">
                        <div class="plan-icon">
                            <i class='bx bx-adjust'></i>
                        </div>
                        <h2 class="p-title">source file <br>included</h2>
                        <p class="p-text">you have100% ownership of files the moment we deliver them with you.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- question section  -->
    <section id="question" class="border-bottom">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-md-5 que">
                    <img class="q2" src="{{asset('imges/design.png')}}" alt="">
                </div>
                <div class="col-lg-6 col-md-7 ">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Is it really unlimited?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    With a tenamto.com monthly subscription, you can request any number of graphics, and our designers will work on them in the order they are assigned each day. If we will not be able to meet all your expectations, no problem - the revisions are also unlimited. Please remember, our designers need 1-2 business days to create a design (depending on the package). Any revisions are available within 24 business hours. Do you want any of your projects faster? Change your priority to high.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    I would like to design...
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    If you need a graphic design, first ask yourself: can I reasonably explain or show what I want? If the answer is yes - fantastic! Using communication tools, send our graphic designers instructions, drawings, photos, any materials that you want to be used in your project. Our range of services is wide: banners, leaflets, posters, t-shirt graphics, illustrations, brochures, advertising graphics, infographics, book and CD covers and packaging.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Who owns commercial use rights?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    All our work is carried out on individual orders and tailored to you and your brand. You have 100% ownership of the files upon delivery. These files are in Adobe PSD, JPG, PNG and Adobe PDF format.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    How many revisions Can I get?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                                <div class="accordion-body">
                                    You can ask for any number of revisions in the project you order.
                                    Just remember that each change will be treated as a new request and may affect the delivery times of other pending / active projects for implementation.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                                    Delivery time:
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfive">
                                <div class="accordion-body">
                                    On average, users of the standard package receive the first concept or the next version within 1-2 business days. Users of the expert package benefit from shorter lead times, including delivery of the concept on the same business day if possible.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
