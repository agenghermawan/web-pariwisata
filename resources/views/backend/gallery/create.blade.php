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
                            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Input groups with icon -->
                                <div class="row">
                                    <div class="col-md-12">
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

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">
                                                <h5>Nama Wisata :</h5>
                                            </label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-send text-primary"></i></span>
                                                </div>
                                                <select class="form-control" name="wisata_id" id="wisata_id">
                                                    <option>-- Choose Category --</option>
                                                    @foreach ($wisata as $item)
                                                        <option value=" {{ $item->id }}">
                                                            {{ $item->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">
                                            <h5>Gambar :</h5>
                                        </label>
                                        <input type="file" class="custom-file-input" id="customFileLang" lang="en"
                                            name="Photo">
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

@section('script')
    {{-- $(function () {
    $('#kategori_id').on('change', function () {
    axios.post('{{ route('dependent-dropdown.store') }}', {id: $(this).val()})
    .then(function (response) {
    $('#nama').empty();

    $.each(response.data, function (id, name) {
    $('#nama').append(new Option(name, id))
    })
    });
    });
    }); --}}
@endsection
