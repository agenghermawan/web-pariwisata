@extends('includesbackend.layout')

@section('content')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-wrapper">
                    <!-- Input groups -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <a href="#" class="btn btn-sm btn-neutral">Department</a>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form action="{{ route('wisata.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Input groups with icon -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">
                                                <h5>Kategori Wisata :</h5>
                                            </label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-planet text-primary"></i></span>
                                                </div>
                                                <select class="form-control" name="kategori_id"
                                                    id="exampleFormControlSelect1">
                                                    <option>-- Choose Category --</option>
                                                    @foreach ($data as $item)
                                                        <option value="{{ $item->id }}">{{ $item->kategori }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">
                                                <h5>Kabupaten / Kota :</h5>
                                            </label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-pin-3 text-primary"></i></span>
                                                </div>
                                                <input class="form-control" name="kabupaten" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">
                                                <h5>Nama :</h5>
                                            </label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-collection text-primary"></i></span>
                                                </div>
                                                <input class="form-control" name="nama" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">
                                                <h5>Alamat :</h5>
                                            </label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-square-pin text-primary"></i></span>
                                                </div>
                                                <input class="form-control" name="alamat" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">
                                                <h5>Location Frame :</h5>
                                            </label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-square-pin text-primary"></i></span>
                                                </div>
                                                <input class="form-control" name="location" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">
                                                <h5>Location Gmaps :</h5>
                                            </label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-square-pin text-primary"></i></span>
                                                </div>
                                                <input class="form-control" name="locationmaps" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">
                                                <h5>Description :</h5>
                                            </label>
                                            <textarea class="form-control" name="deskripsi" type="text"
                                                style="height:180px"> </textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mx-auto text-center"> Submit
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
