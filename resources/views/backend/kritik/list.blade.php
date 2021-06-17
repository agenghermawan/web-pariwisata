@extends('includesbackend.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="table-responsive mt-5">
                    <div class="card">
                        @foreach ($data as $item)
                            <h2 class="card-header" style="background-color:#D3D3D3">
                                {{ $item->Subject }}
                            </h2>

                            <div class=" card-body">
                                <h3 class="card-title">{{ $item->Nama }}</h3>
                                <h5 class="card-title">{{ $item->Email }}</h5>
                                <p class="card-text"> {{ $item->kritiksaran }}
                                </p>
                                <a href="#" class="btn btn-primary">Delete Kritik dan Saran</a>
                            </div>

                        @endforeach
                    </div>

                    {{-- <div class="card">
                        <div class="card-header">
                            {{ $item->Subject }}
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p> b{{ $item->Nama }}</p>
                                <p>{{ $item->Email }}</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                        Title</cite></footer>
                            </blockquote>
                            <blockquote class="blockquote mb-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                        Title</cite></footer>
                            </blockquote>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
