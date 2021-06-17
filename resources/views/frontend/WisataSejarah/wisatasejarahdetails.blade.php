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
                                    {{-- {{ $item->kategori->kategori }} --}}
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="card">

                </div>
                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="card card-details">
                            @include('frontend.includes.slidekota')
                            <hr>

                            @foreach ($data as $item)
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <img src="{{ $item->galleries->first()->Photo }}" width="320px" height="300px"
                                            class="responsive rounded " alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4> {{ $item->nama }} </h4>
                                        <p> <b> {{ $item->alamat }} </b> </p>
                                        <p class="text-justify"> {{ $item->deskripsi }} </p>
                                        <a href="{{ route('detail', $item->id) }}"> <i> Selengkapnya </i> </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
