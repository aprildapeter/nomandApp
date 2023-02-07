@extends('layouts.home')

@section('title')
    Home
@endsection

@section('content')
    <!-- header  -->
    <header class="text-center">
        <h1>
            Explore The Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p>
            You will see Beautiful
            <br>
            moment you never see before
        </p>
        <a href="#" class="btn btn-get-started px4 mt-4">
            Get Started
        </a>
    </header>

    <!-- main  -->
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20k</h2>
                    <p>Member</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3k</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partner</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>
                            Wisata popular
                        </h2>
                        <p>
                            Someting that you never try
                            <br>
                            before in the World
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/popular.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">DERATAN, BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/popular.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">BROMO, MALANG</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/popular.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">NUSA PENIDA</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/popular.jpg');">
                            <div class="travel-country">MIDDLE EST</div>
                            <div class="travel-location">DUBAI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-network" id="network">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Network</h2>
                        <p>
                            Companies are trusted us
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-2">
                        <img src="frontend/images/ana.png" alt="disney">
                    </div>
                    <div class="col-md-2">
                        <img src="frontend/images/disney.png" alt="disney">
                    </div>
                    <div class="col-md-2">
                        <img src="frontend/images/visa.png" alt="disney">
                    </div>
                    <div class="col-md-2">
                        <img src="frontend/images/shangri-la.png" alt="disney">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimoni-heading" id="testimoniHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>
                            They Are Loving Us
                        </h2>
                        <p>
                            Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimoni-content" id="testimoniContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimoni text-center">
                            <div class="testimoni-content">
                                <img src="frontend/images/anggaphoto.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Angga Risky</h3>
                                <p class="testimoni">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus modi natus id
                                    libero in ipsum expedita, est, soluta corrupti, velit officiis tempora? Fugit
                                    explicabo dolores modi qui accusantium, quis error!
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimoni text-center">
                            <div class="testimoni-content">
                                <img src="frontend/images/anggaphoto.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Angga Risky</h3>
                                <p class="testimoni">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus modi natus id
                                    libero in ipsum expedita, est, soluta corrupti, velit officiis tempora? Fugit
                                    explicabo dolores modi qui accusantium, quis error!
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimoni text-center">
                            <div class="testimoni-content">
                                <img src="frontend/images/anggaphoto.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Angga Risky</h3>
                                <p class="testimoni">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus modi natus id
                                    libero in ipsum expedita.
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>



                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="#" class="btn btn-getstarted px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
