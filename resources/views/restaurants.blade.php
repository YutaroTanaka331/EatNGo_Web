@extends('layout.main')

@section('container')

    <!-- Banner Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Restaurants</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Restaurants</li>
                        </ol>
                    </nav>
                </div>
             </div>
        </div>
    </div>  
    <!-- Banner End -->

    <!-- Restaurants Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-prim px-3">Restaurants</h6>
                <h1 class="mb-5">Browse Restaurants</h1>
                <div class="position-relative w-75 mb-5 mx-auto animated slideInDown">
                    <input class="form-control border-2 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Ex: Pizza Hut">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                </div>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-1.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-prim me-2"></i>Malang</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-prim me-2"></i>Table(s): <span class="text-green">Available</span></small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Sushi Tei</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-prim"></small>
                                <small class="fa fa-star text-prim"></small>
                                <small class="fa fa-star text-prim"></small>
                                <small class="fa fa-star text-prim"></small>
                                <small class="fa fa-star text-prim"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="/menu" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px;">View Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-prim me-2"></i>Jakarta</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-prim me-2"></i>Table(s): <span class="text-red">Full</span></small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Pizza Hut</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-prim"></small>
                                <small class="fa fa-star text-prim"></small>
                                <small class="fa fa-star text-prim"></small>
                                <small class="fa fa-star text-prim"></small>
                                <small class="fa fa-star text-prim"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px;">View Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-prim me-2"></i>Malang</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-prim me-2"></i>Table(s): <span class="text-green">Available</span></small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Kaizen</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-prim"></small>
                                <small class="fa fa-star text-prim"></small>
                                <small class="fa fa-star text-prim"></small>
                                <small class="fa fa-star text-prim"></small>
                                <small class="fa fa-star text-prim"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px;">View Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Restaurants End -->

@endsection