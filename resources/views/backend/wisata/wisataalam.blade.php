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
                                    <th class="border-top-0" scope="col">Kategori
                                    </th>
                                    <th class="border-top-0" scope="col">Nama
                                    </th>
                                    <th class="border-top-0" scope="col">Kabupaten</th>
                                    <th class="border-top-0" scope="col">Alamat</th>
                                    <th class="border-top-0" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @forelse ($data as $item )
                                    <tr>
                                        <td>
                                            {{ $item->kategori->kategori }}
                                        </td>
                                        <td>
                                            {{ $item->nama }}
                                        </td>
                                        <td>
                                            {{ $item->kabupaten }}
                                        </td>
                                        <td>
                                            {{ $item->alamat }}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary fas fa-edit text-white"
                                                href="{{ route('wisata.edit', $item->id) }}"></a>
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
