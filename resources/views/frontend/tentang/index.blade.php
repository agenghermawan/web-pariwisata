@extends('frontend.includes.layout')

@section('content')

    <div class="container" style="margin-top: 120px">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h3 class="mb-5 text-center text-uppercase"> <b> Tentang Kami </b></h3>
                <p>
                <h4> <i> <b> Ayokejawatengah </b> </i> </h4>
                <p class="text-justify">
                    Menyediakan informasi pariwisata di Jawa Tengah
                    yang terdapat di wilayah Brebes, Tegal, Pekalongan, Pemalang, Jepara,
                    Semarang, Pati dan Klaten. Informasi wisata yang kami sediakan meliputi
                    wisata sejarah, wisata alam, wisata kuliner dan wisata keluarga.
                </p>
            </div>
            <div class="col-12 col-lg-6">
                <img src="{{ asset('frontend/frontend/images/nusa_penida_5.jpg') }}" class="rounded" alt="">
            </div>
        </div>

    </div>

@endsection

@section('footer')
    <footer class="section-footer mt-5 mb-4 border-top fixed-bottom">
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2019 Copyright Nomads • All rights reserved • Made in Jakarta
                </div>
            </div>
        </div>
    </footer>

@endsection
