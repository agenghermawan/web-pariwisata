@extends('frontend.includes.layout')

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
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
                            <h1>{{ $data->nama }}</h1>
                            <p>
                                {{ $data->kabupaten }}
                            </p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ $data->galleries[0]->Photo }} " class="xzoom" id="xzoom-default"
                                        xoriginal="{{ $data->galleries[0]->Photo }} ">
                                </div>
                                <div class="xzoom-thumbs">
                                    {{-- <a href="{{ url('frontend/frontend/images/details.jpg') }}">
                                        <img src="{{ url('frontend/frontend/images/details.jpg') }}" class="xzoom-gallery"
                                            width="128" xpreview="{{ url('frontend/frontend/images/details.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/frontend/images/nusa_penida.jpg') }}">
                                        <img src="{{ url('frontend/frontend/images/nusa_penida.jpg') }}"
                                            class="xzoom-gallery" width="128"
                                            xpreview="{{ url('frontend/frontend/images/nusa_penida.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/frontend/images/nusa_penida_1.jpg') }}">
                                        <img src=" {{ url('frontend/frontend/images/nusa_penida_1.jpg') }}"
                                            class="xzoom-gallery" width="128"
                                            xpreview="{{ url('frontend/frontend/images/nusa_penida_1.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/frontend/images/nusa_penida_3.jpg') }}">
                                        <img src="{{ url('frontend/frontend/images/nusa_penida_3.jpg') }}"
                                            class="xzoom-gallery" width="128"
                                            xpreview="{{ url('frontend/frontend/images/nusa_penida_3.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/frontend/images/nusa_penida_5.jpg') }}">
                                        <img src=" {{ url('frontend/frontend/images/nusa_penida_5.jpg') }}"
                                            class="xzoom-gallery" width="128"
                                            xpreview="{{ url('frontend/frontend/images/nusa_penida_5.jpg') }}">
                                    </a> --}}
                                </div>
                            </div>
                            <h2 class="font-weight-bold">Tentang Wisata</h2>
                            <p>
                                {{ $data->deskripsi }}
                            </p>

                            <div class=" features row">
                                <div class="col-md-4">
                                    <img src="{{ url('frontend/frontend/images/ic_event.png') }}" alt=""
                                        class="features-image">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('frontend/frontend/images/ic_bahasa.png') }}" alt=""
                                            class="features-image">
                                        <div class="description">
                                            <h3>Language</h3>
                                            <p>Bahasa Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('frontend/frontend/images/ic_foods – 1.png') }}" alt=""
                                            class="features-image">
                                        <div class="description">
                                            <h3>Food</h3>
                                            <p>Local Foods</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <iframe src="{{ $data->location }}" width="300" height="450" style="border:0;"
                                allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="join-container">
                            <a href="{{ $data->locationmaps }}" class="btn btn-block btn-join-now mt-3 py-2"
                                target="_blank">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="section-footer mt-5 mb-4 border-top pb-4">
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2019 Copyright Nomads • All rights reserved • Made in Jakarta
                </div>
            </div>
        </div>
    </footer>

@endsection
