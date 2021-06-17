<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('frontend.includes.style')

</head>

<body>
    @include('frontend.includes.navbar')

    <div class="row">
        <div class="container">
            <div class="col p-0">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            Info Wisata
                        </li>
                        <li class="breadcrumb-item active">
                            Wisata Sejarah
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- Block Default - More info over block -->
                <div class="wp-block inverse no-margin">
                    <div class="figure">
                        <img src="{{ $brebes->galleries[0]->Photo }}" class="rounded" width="350px" height="330px">
                        <div class="wp-block-info-over left">
                            <h2>
                                <span class="pull-left">
                                    <form action="{{ route('wisatasejarah.details') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $brebes->id }}">
                                        <input type="hidden" name="kabupaten" value="{{ $brebes->kabupaten }}">
                                        <button type="submit" class="btn btn-warning px-4 text-weight-bold"> <b>
                                                {{ $brebes->kabupaten }} </b></button>
                                    </form>
                                </span>
                            </h2>
                        </div>
                    </div>
                    <h2 class="title font-weight-bold">{{ $brebes->nama }}</h2>
                    <p class="mt-2">
                        {{ $brebes->alamat }}
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- Block Default - More info over block -->
                <div class="wp-block inverse no-margin">
                    <div class="figure">
                        <img src="{{ $semarang->galleries[0]->Photo }}" class="rounded w-100" height="330px">
                        <div class="wp-block-info-over left">
                            <h2>
                                <span class="pull-left">
                                    <form action="{{ route('wisatasejarah.details') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $semarang->id }}">
                                        <input type="hidden" name="kabupaten" value="{{ $semarang->kabupaten }}">
                                        <button type="submit" class="btn btn-warning px-4 text-weight-bold"> <b>
                                                {{ $semarang->kabupaten }} </b></button>
                                    </form>
                                </span>
                            </h2>
                        </div>
                    </div>
                    <h2 class="title font-weight-bold">{{ $semarang->nama }}</h2>
                    <p class="mt-2">
                        {{ $semarang->alamat }}
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- Block Default - More info over block -->
                <div class="wp-block inverse no-margin">
                    <div class="figure">
                        <img src="{{ $pekalongan->galleries[0]->Photo }}" class="rounded" width="350px"
                            height="330px">
                        <div class="wp-block-info-over left">
                            <h2>
                                <span class="pull-left">
                                    <form action="{{ route('wisatasejarah.details') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $pekalongan->id }}">
                                        <input type="hidden" name="kabupaten" value="{{ $pekalongan->kabupaten }}">
                                        <button type="submit" class="btn btn-warning px-4 text-weight-bold"> <b>
                                                {{ $pekalongan->kabupaten }} </b></button>
                                    </form>
                                </span>
                            </h2>
                        </div>
                    </div>
                    <h2 class="title font-weight-bold">{{ $pekalongan->nama }}</h2>
                    <p class="mt-2">
                        {{ $pekalongan->alamat }}
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- Block Default - More info over block -->
                <div class="wp-block inverse no-margin">
                    <div class="figure">
                        <img src="{{ $tegal->galleries[0]->Photo }}" class="rounded" width="350px" height="330px">
                        <div class="wp-block-info-over left">
                            <h2>
                                <span class="pull-left">
                                    <form action="{{ route('wisatasejarah.details') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $tegal->id }}">
                                        <input type="hidden" name="kabupaten" value="{{ $tegal->kabupaten }}">
                                        <button type="submit" class="btn btn-warning px-4 text-weight-bold"> <b>
                                                {{ $tegal->kabupaten }} </b></button>
                                    </form>
                                </span>
                            </h2>
                        </div>
                    </div>
                    <h2 class="title font-weight-bold">{{ $tegal->nama }}</h2>
                    <p class="mt-2">
                        {{ $tegal->alamat }}
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- Block Default - More info over block -->
                <div class="wp-block inverse no-margin">
                    <div class="figure">
                        <img src="{{ $demak->galleries[0]->Photo }}" class="rounded" width="350px" height="330px">
                        <div class="wp-block-info-over left">
                            <h2>
                                <span class="pull-left">
                                    <form action="{{ route('wisatasejarah.details') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $demak->id }}">
                                        <input type="hidden" name="kabupaten" value="{{ $demak->kabupaten }}">
                                        <button type="submit" class="btn btn-warning px-4 text-weight-bold"> <b>
                                                {{ $demak->kabupaten }} </b></button>
                                    </form>
                                </span>
                            </h2>
                        </div>
                    </div>
                    <h2 class="title font-weight-bold">{{ $demak->nama }}</h2>
                    <p class="mt-2">
                        {{ $demak->alamat }}
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- Block Default - More info over block -->
                <div class="wp-block inverse no-margin">
                    <div class="figure">
                        <img src="{{ $magelang->galleries[0]->Photo }}" class="rounded" width="350px" height="330px">
                        <div class="wp-block-info-over left">
                            <h2>
                                <span class="pull-left">
                                    <form action="{{ route('wisatasejarah.details') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $magelang->id }}">
                                        <input type="hidden" name="kabupaten" value="{{ $magelang->kabupaten }}">
                                        <button type="submit" class="btn btn-warning px-4 text-weight-bold"> <b>
                                                {{ $magelang->kabupaten }} </b></button>
                                    </form>
                                </span>
                            </h2>
                        </div>
                    </div>
                    <h2 class="title font-weight-bold">{{ $magelang->nama }}</h2>
                    <p class="mt-2">
                        {{ $magelang->alamat }}
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- Block Default - More info over block -->
                <div class="wp-block inverse no-margin">
                    <div class="figure">
                        <img src="{{ $klaten->galleries[0]->Photo }}" class="rounded" width="350px" height="330px">
                        <div class="wp-block-info-over left">
                            <h2>
                                <span class="pull-left">
                                    <form action="{{ route('wisatasejarah.details') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $klaten->id }}">
                                        <input type="hidden" name="kabupaten" value="{{ $klaten->kabupaten }}">
                                        <button type="submit" class="btn btn-warning px-4 text-weight-bold"> <b>
                                                {{ $klaten->kabupaten }} </b></button>
                                    </form>
                                </span>
                            </h2>
                        </div>
                    </div>
                    <h2 class="title font-weight-bold">{{ $klaten->nama }}</h2>
                    <p class="mt-2">
                        {{ $klaten->alamat }}
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- Block Default - More info over block -->
                <div class="wp-block inverse no-margin">
                    <div class="figure">
                        <img src="{{ $jepara->galleries[0]->Photo }}" class="rounded" width="350px" height="330px">
                        <div class="wp-block-info-over left">
                            <h2>
                                <span class="pull-left">
                                    <form action="{{ route('wisatasejarah.details') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $jepara->id }}">
                                        <input type="hidden" name="kabupaten" value="{{ $jepara->kabupaten }}">
                                        <button type="submit" class="btn btn-warning px-4 text-weight-bold"> <b>
                                                {{ $jepara->kabupaten }} </b></button>
                                    </form>
                                </span>
                            </h2>
                        </div>
                    </div>
                    <h2 class="title font-weight-bold">{{ $jepara->nama }}</h2>
                    <p class="mt-2">
                        {{ $jepara->alamat }}
                    </p>
                </div>
            </div>
        </div>
    </div>



    @include('frontend.includes.script')
</body>

</html>
