@extends('frontend.includes.layout')
@section('content')
    <div class="container" style="margin-top:100px">
        <h4 class="text-center">
            Kritik Saran
        </h4>
    </div>
    <form action="{{ route('kritik.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="container col-lg-8 mt-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Nama" name="Nama" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Email" name="Email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <input type="text" class="form-control" placeholder="Subject" name="Subject">

                        <div class="mt-4">
                            <textarea name="kritiksaran" placeholder="Kritik dan Saran" class="form-control" id="" cols="30"
                                rows="10"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mt-2 w-100 "> Kirim </button>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <img src="{{ asset('frontend/frontend/images/kritik.jpg') }}" height="400px" width="500px"
                        class="rounded" alt="">
                </div>
            </div>
    </form>

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
