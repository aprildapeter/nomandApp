@extends('layouts.home')
@section('title')
    Detail Travel
@endsection


@section('content')
    <main>
        <section class="section-details-header">
        </section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>
                                Nusa Penida
                            </h1>
                            <p>
                                Republic of Indonesia Raya
                            </p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontend/images/details-1.jpg" class="xzoom" id="xzoom-default"
                                        xoriginal="frontend/images/details-1.jpg">
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="frontend/images/details-1.jpg">
                                        <img src="frontend/images/details-1.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/details-1.jpg">
                                    </a>
                                    <a href="frontend/images/banner2.jpg">
                                        <img src="frontend/images/banner2.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/banner2.jpg">
                                    </a>
                                    <a href="frontend/images/details-1.jpg">
                                        <img src="frontend/images/details-1.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/details-1.jpg">
                                    </a>
                                    <a href="frontend/images/details-1.jpg">
                                        <img src="frontend/images/details-1.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/details-1.jpg">
                                    </a>
                                </div>
                            </div>
                            <h2>
                                Tentang Wisata
                            </h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium asperiores
                                repudiandae voluptatem quam odio, nulla nostrum deserunt! Molestias temporibus iure id
                                veniam provident ipsum! Suscipit quia odit iste rerum. Magnam!</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta et in illum modi neque
                                nisi error repellendus consequatur tempora! Laudantium blanditiis magni quam alias
                                accusantium, sequi sint sit! Assumenda, nihil!</p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="frontend/images/ic_event.png" alt="" class="feature-image">
                                        <div class="description">
                                            <h3>
                                                Featured Event
                                            </h3>
                                            <p>Tari Kecak</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="frontend/images/ic_bahasa.png" alt="" class="feature-image">
                                        <div class="description">
                                            <h3>
                                                Language
                                            </h3>
                                            <p>Bahasa Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="frontend/images/ic_foods.png" alt="" class="feature-image">
                                        <div class="description">
                                            <h3>
                                                Food
                                            </h3>
                                            <p>Local Food</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="card card-details card-right">
                            <h2>Member are going</h2>
                            <div class="member my-2">
                                <img src="frontend/images/avatar-1@2x.png" class="member-ava mr-1">
                                <img src="frontend/images/avatar-2.png" class="member-ava mr-1">
                                <img src="frontend/images/avatar-3.png" class="member-ava mr-1">
                            </div>
                            <hr>
                            <h2>Trip Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">
                                        22 Aug, 2019
                                </tr>
                                <tr>
                                    </td>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">
                                        4D 3N
                                    </td>

                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">
                                        Open Trip
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">
                                        $80,00 / Person
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="frontend/libraries/xzoom/dist/xzoom.css">
@endpush


@push('addon-script')
    <script src="frontend/libraries/xzoom/dist/xzoom.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
@endpush
