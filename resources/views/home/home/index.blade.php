<style>
    .wrapper-img-b1 {
        max-width: 100%;
        max-height: 400px;
        overflow: hidden;
    }

    .img-b1 {
        width: 100%;
    }
</style>
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Klien</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    
    <style>
        .client-container {
            max-height: 200px; /* Sesuaikan tinggi maksimal */
            overflow-y: auto;  /* Aktifkan scrolling vertikal jika melebihi batas */
            border: 1px solid #1767ca; /* Opsional: Tambahkan border */
            padding: 10px;
            width: 100%; /* Sesuaikan dengan desain */
        }

        .client-list {
            list-style: none; /* Hilangkan bullet points */
            padding: 5px;
            margin: 0;
        }

        /* Tambahkan scrollbar custom agar lebih halus */
        .client-container::-webkit-scrollbar {
            width: 8px;
        }

        .client-container::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 4px;
        }

        .client-container::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>


<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        @foreach ($banner as $key => $item)
        <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
            <div class="wrapper-img-b1">
                <img src="{{ $item->gambar }}" class="img-b1" alt="">
            </div>
            <div class="container">
                <div class="carousel-caption text-start"
                    style="top: 50%; left: 50%; transform: translate(-50%, -50%); position: absolute;">
                    <h1>{{ $item->headline }}</h1>
                    <p class="opacity-75">{{ $item->desc }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- Bagian About -->
<div id="about">
    <div class="container mt-5">
        <div class="text-center">
            <h4 class="text-center">Tentang Kami</h4>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img src="/{{$about->cover}}" width="100%" alt="">

            </div>
            <div class="col-md-6">
                {!!$about->desc!!}
            </div>
        </div>
    </div>
</div>
<div class="bg-primary my-5">
    <div class="container py-5">
        <div class="text-white">
            <h5>Pelajari Tentang Kami</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam rerum molestiae ducimus quos
                doloribus
                vel consequuntur possimus eum odio, quod cum accusamus quae sequi pariatur unde ex delectus, nihil
                impedit.</p>
        </div>
    </div>
</div>

<!-- Bagian Services -->
<div id="services">
    <div class="container my-5">
        <div class="text-center">
            <h4 class="text-center">Layanan</h4>
            <p>Apa yang akan kami lakukan? akan kami beritahu anda</p>
        </div>

        <div class="row">
            @foreach ($service as $item)

                <div class="col-md-3">
                    <div class="text-center">
                        <i class="{{$item->icon}} fa-3x text-primary"></i>
                        <h5><b>{{$item->title}}</b></h5>
                        <p>{{$item->desc}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-2">
            <a href=""class="btn btn-primary px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    <div class="bg-light my-5">
        <div class="container py-5">
            <div class="text-dark text-center">
                <h5>Pelajari Tentang Kami</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam rerum molestiae ducimus quos
                    doloribus
                    vel consequuntur possimus eum odio, quod cum accusamus quae sequi pariatur unde ex delectus, nihil
                    impedit.</p>
            </div>
        </div>
    </div>

    <style>

    </style>
    <!-- Bagian Best Seller -->
    <div id="bestseller">
        <div class="container my-5">
            <div class="text-center">
                <h4 class="text-center">Best Seller</h4>
                <p>produk paling banyak dibeli!</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach ($bestseller as $item)
                <div class="col-md-3 col-lg-2">
                    <div class="card">
                        <div class="wrapper-card-best-seller">
                            <img src="/{{$item->cover}}" class="img-card-best-seller img-fluid" alt="">
                        </div>
                        <div class="p-2">
                            <h5>{{$item->title}}</h5>
                            <p>{!!Illuminate\Support\Str::limit($item->body, 100)!!}
                                {{-- <a href="">Selengkapnya &rightarrow; </a> --}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    {{-- <div class="text-center mt-2">
        <a href=""class="btn btn-primary px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
    </div> --}}
</div>
</div>

<!-- Bagian Client -->
<div id="client">
    <div class="container my-5">
        <div class="text-center">
            <h4 class="text-center">Klien Kami</h4>
            <p>Terima kasih banyak kepada para klien!</p>
        </div>
        
        <!-- Tambahkan div pembungkus untuk scroll -->
        <div class="client-container">
            @foreach ($client as $item)
                <ul class="client-list">
                    <li>{{$item->name}}</li>
                </ul>
            @endforeach
        </div>
        
    </div>
</div>



<div class="bg-primary my-5">
    <div class="container py-5">
        <div class="text-white">
            <h5>Pelajari Tentang Kami</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam rerum molestiae ducimus quos doloribus
                vel consequuntur possimus eum odio, quod cum accusamus quae sequi pariatur unde ex delectus, nihil
                impedit.</p>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="text-center">
        <h4 class="text-center">Hubungi Kami</h4>
        <p>Hubungi kontak di bawah untuk pembelian atau kerja sama lebih lanjut.</p>
        <a href=""class="btn btn-primary px-5" target="blank"><i class="fas fa-phone"></i> Hubungi kami di
            WhatsApp</a>
    </div>
</div>
