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
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506587.38452864334!2d108.84312683281252!3d-7.2733561000000035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8c76ae3df821%3A0x2011c84f029d4905!2sWisata%20Tuk%20Bening%20Dan%20Gua%20Jepang!5e0!3m2!1sid!2sid!4v1622987617959!5m2!1sid!2sid"
                                width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="join-container">
                            <a href="checkout.html" class="btn btn-block btn-join-now mt-3 py-2">
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
