@extends('layout.main')

@section('container')

    <!-- Banner Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-5 text-white mb-3 animated slideInDown">Looking for a Restaurant ? Just EatNGo it</h1>
                    <p class="fs-5 text-white mb-4 animated slideInDown">Search for your favorite Restaurants and browse their menu here</p>
                    <p class="fs-5 text-white mb-4 animated slideInDown">Or download our mobile apps to easily order for Dine-in or Takeaway with countless restos to try</p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Ex: Pizza Hut">
                        <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                    </div>
                </div>
             </div>
        </div>
    </div> 
    <!-- Banner End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-prim pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-prim">EatNGo</span></h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-prim me-2"></i>Order food for Dine-in and Takeaway</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-prim me-2"></i>Table Reservation</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-prim me-2"></i>Countless Restaurants to try</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-prim me-2"></i>Various Promo & Discount</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->  

    <!-- Restaurants Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-prim px-3">Restaurants</h6>
                <h1 class="mb-5">Countless Restaurants</h1>
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
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px;">View Menu</a>
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


    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Online Booking</h6>
                        <h1 class="text-white mb-4">Find your table for any occation</h1>
                        <p class="mb-4">Make online reservation on your favorites restaurant easier by using our mobile apps.</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2 " href="">Download EatNGo Now </a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Book A Table</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="Date & Time" class="form-control bg-transparent" id="Date & Time" placeholder="Date & Time">
                                        <label for="Date & Time">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="Number of Person" class="form-control bg-transparent" id="Number of Person" placeholder="Number of Person">
                                        <label for="Number of Person">Number of Person</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Note</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
