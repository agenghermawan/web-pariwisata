<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('frontend.includes.style')
    <style>


    </style>
</head>

<body>


    <!-- navbar -->
    @include('frontend.includes.navbar')


    <!-- header -->

    <header class="text-center">
        <h1>Explore the Beautiful Central Java,
            <br>
            Feel the Experience and Beautiful Moments
        </h1>
        <a href="#" class="btn btn-get-started px-4 mt-4">
            Let's Get it
        </a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2>3k</h2>
                    <p>Hotels</p>
                </div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            Something that you never try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <section class="section-popular-content" id="popularContent">
                <div class="container">
                    <div class="section-popular-travel row justify-content-center">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column rounded"
                                style="background-image: url('frontend/frontend/images/purin.jpg');">
                                <div class="travel-location">TEGAL</div>
                                <div class="travel-button mt-auto">
                                    <a href="details.html" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column rounded"
                                style="background-image: url('frontend/frontend/images/muncar.jpg');background-position: center;">
                                <div class="travel-location">PEKALONGAN</div>
                                <div class="travel-button mt-auto">
                                    <a href="details.html" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column rounded"
                                style="background-image: url('frontend/frontend/images/lerengkelir.jpg');">
                                <div class="travel-location">SEMARANG</div>
                                <div class="travel-button mt-auto">
                                    <a href="details.html" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column rounded"
                                style="background-image: url('frontend/frontend/images/morosari.jpg');background-position: center;">
                                <div class="travel-location">DEMAK</div>
                                <div class="travel-button mt-auto">
                                    <a href="details.html" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>

        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Jawa Tengah </h2>
                        <p>
                            Jawa Tengah adalah sebuah provinsi Indonesia yang terletak di bagian tengah Pulau Jawa.
                            Provinsi ini berbatasan dengan Provinsi Jawa Barat di sebelah barat, Samudra Hindia dan
                            Daerah Istimewa Yogyakarta di sebelah selatan, Jawa Timur di sebelah timur, dan Laut Jawa di
                            sebelah utara.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container mx-auto">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center"> Pilihan Kami Untukmu </h2>
                        <section>
                            <div class="col-lg-12">
                                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 rounded img-thumbnail"
                                                src="{{ asset('frontend/frontend/images/sewu.jpg') }}"
                                                alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 rounded img-thumbnail"
                                                src="{{ asset('frontend/frontend/images/sewu.jpg') }}"
                                                alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 rounded img-thumbnail"
                                                src="{{ asset('frontend/frontend/images/sewu.jpg') }}"
                                                alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12">

                                <div class="row mt-5">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img src="{{ asset('frontend/frontend/images/sateblengong.jpg') }}"
                                            width="400px" class="img-thumbnail" data-aos="fade-zoom-in" width="280px"
                                            data-aos-easing="ease-in-back" data-aos-delay="600" data-aos-offset="0"
                                            height=" 182px" alt="">
                                        <div class="caption">
                                            <p>Lorem ipsum...</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img src="{{ asset('frontend/frontend/images/sateblengong.jpg') }}"
                                            width="400px" class="img-thumbnail" data-aos="fade-zoom-in" width="280px"
                                            data-aos-easing="ease-in-back" data-aos-delay="600" data-aos-offset="0"
                                            height=" 182px" alt="">
                                        <div class="caption">
                                            <p>Lorem ipsum...</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img src="{{ asset('frontend/frontend/images/sateblengong.jpg') }}"
                                            width="400px" class="img-thumbnail" data-aos="fade-zoom-in" width="280px"
                                            data-aos-easing="ease-in-back" data-aos-delay="600" data-aos-offset="0"
                                            height=" 182px" alt="">
                                        <div class="caption">
                                            <p>Lorem ipsum...</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img src="{{ asset('frontend/frontend/images/sateblengong.jpg') }}"
                                            width="400px" class="img-thumbnail" data-aos="fade-zoom-in" width="280px"
                                            data-aos-easing="ease-in-back" data-aos-delay="600" data-aos-offset="0"
                                            height=" 182px" alt="">
                                        <div class="caption">
                                            <p>Lorem ipsum...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-4" style="background-color: lightgrey">
            <div class="container content">
                <div class="text-center">
                    <h4 class="font-weight-bold"> Pilihan Destinasi Seru Untuk Perjalananmu
                    </h4>
                    <p>
                        Kunjungi tempat-tempat ini minimal sekali seumur hidup.
                    </p>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img class="card-img-top" src="{{ asset('frontend/frontend/images/tehkaligua.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img class="card-img-top" src="{{ asset('frontend/frontend/images/tehkaligua.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img class="card-img-top" src="{{ asset('frontend/frontend/images/tehkaligua.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img class="card-img-top" src="{{ asset('frontend/frontend/images/tehkaligua.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img class="card-img-top" src="{{ asset('frontend/frontend/images/tehkaligua.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img class="card-img-top" src="{{ asset('frontend/frontend/images/tehkaligua.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            </div>
        </section>

    </main>

    <hr>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <table class="h-100">
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <h3 class="text-upper font-weight-bold">Ayokejawatengah</h3>
                                    Menyediakan informasi pariwisata di Jawa Tengah yang terdapat di wilayah Brebes,
                                    Tegal,
                                    Pekalongan,
                                    Pemalang, Jepara, Semarang, Pati dan Klaten. Informasi wisata yang kami sediakan
                                    meliputi wisata
                                    sejarah, wisata alam, wisata kuliner dan wisata keluarga.
                                </td>
                            </tr>
                        </tbody>

                    </table>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('frontend/frontend/images/kontak.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer class="section-footer mt-5 mb-4 border-top ">
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2019 Copyright Nomads • All rights reserved • Made in Jakarta
                </div>
            </div>
        </div>
    </footer>
    @include('frontend.includes.script')
</body>

</html>
