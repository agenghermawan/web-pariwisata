@extends('includesbackend.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body rounded">
                    <div class="row">
                        <div class="col-md-8">
                            <h5> Daftar Kategori </h5>
                        </div>
                    </div>
                    <div class="table-responsive mt-5">
                        <table class="table align-items-center table-flush table stylish-table no-wrap" id="myTable">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-top-0" scope="col">Id
                                    </th>
                                    <th class="border-top-0" scope="col">Nama
                                    </th>
                                    <th class="border-top-0" scope="col">Kategori
                                    </th>
                                    <th class="border-top-0" scope="col">Gambar</th>
                                    <th class="border-top-0" scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody class="list">
                                @forelse ($data as $item )
                                    <tr>
                                        <td>
                                            {{ $item->id }}
                                        </td>
                                        <td>
                                            {{ $item->wisata->nama }}
                                        </td>
                                        <td>
                                            {{ $item->kategori->kategori }}
                                        </td>
                                        <td> <img src="{{ $item->Photo }}" style="width: 150px" class="rounded"
                                                height="130px" alt="">
                                        </td>
                                        <td>
                                            <a class="btn btn-primary fas fa-edit text-white"
                                                href="{{ route('gallery.edit', $item->id) }}"></a>
                                            <a class="btn btn-primary fas fa-eye text-white"></a>
                                            <button class="btn btn-warning fas fa-trash"></button>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
