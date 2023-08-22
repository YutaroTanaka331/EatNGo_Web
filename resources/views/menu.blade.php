@extends('layout.main')

@section('container')

    <!-- Banner Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/restaurants">Restaurants</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title-normal bg-white ff-secondary text-center text-prim fw-normal px-3">Food Menu</h5>
                <h1 class="mb-5">Food Category</h1>
            </div>

            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    @for ($i = 0; $i < count($restaurant_menu); $i++)
                        @if ($i == 0)
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 py-3 pb-1 active" data-bs-toggle="pill"
                                href="#tab-{{ $i }}">
                                <div class="ps-1">
                                    <h6 class="mt-n1 mb-0">{{ $restaurant_menu[$i]->category }}</h6>
                                </div>
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 py-3 pb-1" data-bs-toggle="pill"
                                href="#tab-{{ $i }}">
                                <div class="ps-1">
                                    <h6 class="mt-n1 mb-0">{{ $restaurant_menu[$i]->category }}</h6>
                                </div>
                            </a>
                        </li>
                        @endif
                    @endfor
                </ul>

                <div class="tab-content">
                    @for ($i = 0; $i < count($restaurant_menu); $i++)
                        @if ($i == 0)
                        <div id="tab-{{ $i }}" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @foreach ($restaurant_menu[$i]->data as $menu)
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="http://localhost/API_EatNGo/restaurant/menu_pict/{{ rawurlencode($menu->photo_url) }}"
                                                alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span style="font-size:17px">{{ $menu->itemName }}</span>
                                                    <span class="text-prim" style="font-si  ze:17px">Rp.{{ $menu->cost }}</span>
                                                </h5>
                                                <small class="fst-italic">{{ $menu->itemDescription }}</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @else
                        <div id="tab-{{ $i }}" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach ($restaurant_menu[$i]->data as $menu)
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="http://localhost/API_EatNGo/restaurant/menu_pict/{{ rawurlencode($menu->photo_url) }}"
                                                alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span style="font-size:17px">{{ $menu->itemName }}</span>
                                                    <span class="text-prim" style="font-size:17px">Rp.{{ $menu->cost }}</span>
                                                </h5>
                                                <small class="fst-italic">{{ $menu->itemDescription }}</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

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
