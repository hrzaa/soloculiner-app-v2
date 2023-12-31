@extends('layouts.app')
 @section('title')
    Event Page
 @endsection
 @section('content')
    <div class="container-fluid py-5 bg-dark hero-header" style="background: linear-gradient(0deg,
            rgba(15, 23, 43, 0.75),
            rgba(15, 23, 43, 0.75)),
        url(/vendor/img/header-event.JPG), #0f172b;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Semangat Festival</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid bg-white py-5">
        {{-- event start --}}
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">@lang('lang.solo events')</h5>
                <h1 class="mb-5">@lang('lang.our event')</h1>
                </div>
            <div class="row g-4">
                @php
                    $incrementCategory = 0
                @endphp
                @forelse ($events as $event)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $incrementCategory+=100 }}">
                    <div class="team-item bg-white h-100 d-flex p-4 flex-column">`
                        <img src="{{ Storage::url($event->event_galleries->first()->photos ?? '') }}" alt="">
                        <h3 class="mt-2 text-center">{{ $event->event_name }}</h3>
                        <p>{!! Str::words($event->{'event_desc_'.app()->getLocale()}, 20) !!} <span></span></p>
                        <a href="{{ route('event-detail', $event->slug) }}" class="btn btn-primary mt-auto">Detail</a>
                    </div>
                </div>
                @empty
                    <div class="col-12 text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                        No Event Found!
                    </div>
                @endforelse
                <div class="col-12 text-center py-5">
                   <div class="d-flex justify-content-center">
                        {{ $events->links() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- event end --}}

        {{-- new event start --}}
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">
                    @lang('lang.finished events')
                </h5>
                <h1 class="mb-5">@lang('lang.occured events')</h1>
            </div>
            <div class="row g-4">
                <div class="container-fluid py-5 bg-dark hero-header mb-5" style="background: linear-gradient(0deg,
                rgba(15, 23, 43, 0.75),
                rgba(15, 23, 43, 0.75)),
                url(/vendor/img/header-event.JPG), #0f172b;
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;">
                    <div class="container text-start my-5 pt-5 pb-4">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Semangat Festival</h1>
                        <h6 class="text-white">This year, the theme is the taste of Indonesian culinary satay. which starts March 9-12, 2023 at the Vastenburg Fortress</h6>
                        <a href="" class="">Start Explore  <i class="fas fa-arrow-right text-primary mb-4"></i></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- new event end --}}

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    </div>

@endsection
