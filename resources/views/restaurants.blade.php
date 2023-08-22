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
                <form class="position-relative w-75 mb-5 mx-auto animated slideInDown">
                    <input name="query" class="form-control border-2 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Ex: Pizza Hut">
                    <button type="submit" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                </form>
            </div>

            <div class="row g-4 justify-content-center">
                @for ($i = 0; $i < count($restaurants); $i++)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden text-center">
                            <img class="img-fluid" style="height: 250px" src="http://localhost/API_EatNGo/restaurant/profile_pict/{{ rawurlencode($restaurants[$i]->photo_url) }}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <a style="font-size:14px; "href="https://www.google.com/maps/search/?api=1&query={{ $restaurants[$i]->coordinates }}" class="flex-fill text-center border-end py-2 nav-item nav-link"><i class="fa fa-map-marker-alt text-prim me-2"></i>View Location</a>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-prim me-2"></i>Table(s):
                              @if ($restaurants[$i]->isTableAvailable == 1)
                                <span class="text-green">Available</span>
                              @else
                                <span class="text-red">Full</span>
                              @endif
                            </small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">{{ $restaurants[$i]->name }}</h3>
                            <div class="mb-3">
                                @for ($j = 1; $j < 6; $j++)
                                    @if ($j > $restaurants[$i]->rating )
                                        <small class="fa fa-star text-gray"></small>
                                    @else
                                        <small class="fa fa-star text-prim"></small>
                                    @endif
                                @endfor
                            </div>
                            <p>{{ $restaurants[$i]->description }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="/menu/{{ $restaurants[$i]->restaurantId }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px;">View Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- Restaurants End -->

    <!-- Promo Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Promo & Discount</h6>
                <h1 class="mb-5">Check Out our Special Offers!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @for ($g = 0; $g < count($promos); $g++)
                    <div class="testimonial-item bg-white border p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="bg-white rounded-circle shadow p-1" src="http://localhost/API_EatNGo/restaurant/profile_pict/{{ rawurlencode($promos[$g]->photo_url) }}" style="width: 80px; height: 80px;">
                            <div class="ms-4">
                                <h5 class="mb-1">{{ $promos[$g]->promoName }}</h5>
                                <span>{{ $promos[$g]->name }}</span>
                            </div>
                        </div>
                        <p class="mb-3">{{ $promos[$g]->promoDesc }}</p>
                        <p class="mb-0">Available Until: {{ $promos[$g]->promoDateEnd}}</p>
                    </div>
                    @endfor
            </div>
        </div>
    </div>
    <!-- Promo End -->

@endsection
