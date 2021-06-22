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
                            <form action="{{ route('wisata.update', $data->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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
                                                    <option value="{{ $data->kategori_id }}">
                                                        {{ $data->kategori->kategori }}</option>
                                                    @if ($data->kategori->kategori == 'Wisata Sejarah')
                                                        <option value="2"> Wisata Kuliner
                                                        </option>
                                                        <option value="4"> Wisata Alam </option>
                                                        <option value="3"> Wisata Keluarga
                                                        </option>
                                                    @elseif ($data->kategori->kategori == 'Wisata Kuliner')
                                                        <option value="1"> Wisata Sejarah </option>
                                                        <option value="4"> Wisata Alam </option>
                                                        <option value="3"> Wisata Keluarga
                                                        </option>
                                                    @elseif ($data->kategori->kategori == 'Wisata Alam')
                                                        <option value="1"> Wisata Sejarah </option>
                                                        <option value="2"> Wisata Kuliner
                                                        </option>
                                                        <option value="3"> Wisata Keluarga
                                                        </option>
                                                    @elseif ($data->kategori->kategori == 'Wisata Keluarga')
                                                        <option value="1"> Wisata Sejarah
                                                        </option>
                                                        <option value="2"> Wisata Kuliner
                                                        </option>
                                                        <option value="4"> Wisata Alam </option>
                                                    @endif
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
                                                <input class="form-control" name="kabupaten" type="text"
                                                    value="{{ $data->kabupaten }}">
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
                                                <input class="form-control" name="nama" type="text"
                                                    value="{{ $data->nama }}">
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
                                                <input class="form-control" name="alamat" type="text"
                                                    value="{{ $data->alamat }}">
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
                                                <input class="form-control" name="location" type="text"
                                                    value="{{ $data->location }}">
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
                                                <input class="form-control" name="locationmaps" type="text"
                                                    value="{{ $data->locationmaps }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">
                                                <h5>Description :</h5>
                                            </label>
                                            <textarea class="form-control" name="deskripsi" type="text"
                                                style="height:180px"> {{ $data->deskripsi }} </textarea>
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
