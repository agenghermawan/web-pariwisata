@extends('frontend.includes.layout')
@section('content')
    <div class="container" style="margin-top: 120px">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h3 class="text-center text-uppercase"> <b> Kontak Kami </b></h3>
                <p>
                <h6 class="mt-5"> <b> GET CONNECTED </b> </h6>
                Jakarta Selatan <br>
                Indonesia <br>
                isazizahindri18@gmail.com
                </p>
            </div>
            <div class="col-12 col-lg-6">
                <img src="{{ asset('frontend/frontend/images/contact.jpg') }}" width="400px" class="rounded" alt="">
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
