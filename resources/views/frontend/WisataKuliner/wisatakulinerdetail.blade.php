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
                                    Wisata Sejarah
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    @foreach ($data as $item)
                        <div class="col-lg-12 pl-lg-0">
                            <div class="card card-details">
                                @include('frontend.includes.slidekota')
                                <hr>

                                <h1><b>{{ $item->kabupaten }}</b></h1>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ $item->galleries[0]->Photo }}" class="rounded" alt="" height="220px"
                                            width="320px">
                                    </div>
                                    <div class="col-md-8">
                                        <h4> {{ $item->nama }} </h4>
                                        <p> <b> {{ $item->alamat }} </b> </p>
                                        <p> {{ $item->deskripsi }} </p>
                                        <a href="{{ route('detail', $item->id) }}"> <i> Selengkapnya </i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
