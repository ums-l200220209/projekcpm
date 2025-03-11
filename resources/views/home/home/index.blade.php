<style>
    .wrapper-img-1 {
        max-width: 100%;
        max-height: 400px;
        overflow: hidden;
    }

    .img-1 {
        width: 100%;
    }
</style>

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="wrapper-img-1">
                <img src="/img/1.png" class="img-1" alt="">
            </div>
            <div class="container">
                <div class="carousel-caption text-center"
                    style="top: 50%; left: 50%; transform: translate(-50%, -50%); position: absolute;">
                    <h1>Example headline.</h1>
                    <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.
                    </p>
                    {{-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> --}}
                </div>
            </div>
        </div>
    </div>

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
                <img src="/img/cmp2.jpg" width="100%" alt="">

            </div>
            <div class="col-md-6">
                <p><b>CV CAHAYA MITRA PRATAMA</b> hadir untuk memenuhi dan melayani kebutuhan industri Pneumatic dan
                    Electric,
                    Control
                    Component untuk perindustrian dengan Divisi yang kami miliki TEKNIK & ELECTRIC
                    Dengan dukungan dan produk yang ada kami mengajukan penawaran kerja sama dengan lembaga dan instansi
                    perusahaan
                    untuk memenuhi kebutuhan.
                </p>
                <p> <b>VISI DAN MISI</b>
                    CV.CAHAYA MITRA PRATAMA mempunyai Visi dan Misi untuk memenuhi sparepart Electric Pneumatic,
                    Hydraulic,
                    Automatic Control Component yang dibutuhkan oleh dunia Industri sehingga dapat lebih meminimalisasi
                    cost/ biaya
                    yang dikeluarkan oleh perusahaan.
                </p>
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
            @for ($i = 0; $i < 4; $i++)
                <div class="col-md-3">
                    <div class="text-center">
                        <i class="fas fa-home fa-3x text-primary"></i>
                        <h5><b>PENJUALAN</b></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, excepturi.</p>
                    </div>
                </div>
            @endfor
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
    <div id="best-seller">
        <div class="container my-5">
            <div class="text-center">
                <h4 class="text-center">Best Seller</h4>
                <p>produk paling banyak dibeli!</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @for ($i = 1; $i <= 4; $i++)
                <div class="col-md-3 col-lg-2">
                    <div class="card">
                        <div class="wrapper-card-best-seller">
                            <img src="/img/best1.jpg" class="img-card-best-seller img-fluid" alt="">
                        </div>
                        <div class="p-2">
                            <h5>Jembo cable</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, similique!</p>
                        </div>
                    </div>
                </div>
            @endfor
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

        <ul class="client-list">
            <li>PT ANEKA BOGA NUSANTARA</li>
            <li>PT. ABC PRESIDENT INDONESIA</li>
            <li>PT. ALESINDO DIKA TEHNIK</li>
            <li>PT. ANUGERAH SUKSE MAKMUR</li>
            <li>PT. ARTHA GUNA WIRATAMA</li>
            <li>PT. ASRI DHARMA TEKNIK</li>
            <li>PT. ASTER TAI SUMMIT</li>
            <li>PT ASTRA NIPPON GASKET</li>
            <li>PT. ASTRA NIPPON NHK</li>
            <li>PT.AZKA</li>
            <li>PT. ASKA INTERNATIONAL</li>
            <li>PT. ADYAWINSA DINAMIKA KARAWANG</li>
            <li>PT. A&K DOOR</li>
            <li>PT. B BRAUN PHARMACEUTICAL INDONESIA</li>
            <li>PT. BAYU AJIMANDIRI</li>
            <li>PT. BERLIAN GLOBAL TEHNIK</li>
            <li>PT. BIOTIS PRIMA AGRISINDO</li>
            <li>PT. BMR</li>
            <li>PT. BUKIT MURIA JAYA (BMJ)</li>
            <li>PT. CABININDO PUTRA</li>
            <li>PT. CAHAYA MEKANINO PRATAMA</li>
            <li>PT. CATEK</li>
            <li>PT. CENTURY BATTERIES INDONESIA</li>
            <li>PT. CENTRAL PANGAN PERTIWI</li>
            <li>PT. DANTOSAN PRECON</li>
            <li>PT DAESANG</li>
            <li>PT. DELOYD INDONESIA</li>
            <li>PT. DONG IL CASTING</li>
            <li>PT. DONG IL INDONESIA</li>
            <li>PT ERINAKA PERDANA</li>
            <li>PT. FREYABADI INDOTAMA</li>
            <li>PT FUJI OOZX INDONESIA</li>
            <li>PT. HARMONICS INDONESIA</li>
            <li>PT. HAGIHARA WESTJAVA</li>
            <li>PT. HON CHUAN INDONESIA</li>
            <li>PT. HORIGUCHI ENGGENERING</li>
            <li>PT. HUA YII INDONESIA</li>
            <li>PT. INDO RAYA ENERGI</li>
            <li>PT. INDOTECH METAL NUSANTARA</li>
            <li>PT. KAWAMURA INDAH</li>
            <li>PT. K.D HEAT TECHNOLOGY</li>
            <li>PT. KYORAKU KANTO MOULD INDONESIA</li>
            <li>PT. KYORAKU BLOWMOLDING INDONESIA</li>
            <li>PT. MESINDO PUTRA PERKASA</li>
            <li>PT. MOLD & DIES</li>
            <li>PT. NBC INDONESIA</li>
            <li>PT. KASAI TECK SEE INDONESIA</li>
            <li>PT. ORANG TUA GROUP</li>
            <li>PT. PAKOAKUINA</li>
            <li>PDAM KARAWANG</li>
            <li>PT. PLASTIK KARAWANG FLEXINDO</li>
            <li>PT. PLATINUM CERAMICS INDUSTRY</li>
            <li>PT SANTOS JAYA ABADI</li>
            <li>PT SINERGI EGENERING</li>
            <li>PT. SANABIL PRIMA ENGINEERING</li>
            <li>PT. SANKEIKID MANUTEC</li>
            <li>PT. SANKOSHA INDONESIA</li>
            <li>PT. SARANA CENTRAL BAJATAMA</li>
            <li>PT. SMURFIT CONTAINER INDONESIA</li>
            <li>PT. STEEL PIPE INDUSTRI</li>
            <li>PT. SUPRAVISI RAMA OPTIK (SRO)</li>
            <li>PT. SAITAMA STAMPING INDONESIA (SSI)</li>
            <li>PT. SUNCALL INDONESIA</li>
            <li>PT. TAIKISHA MANUFACTURING</li>
            <li>PT. TRI TUNGGAL MULTI CHEMICALS</li>
            <li>PT. TOCHU SILICA</li>
            <li>PT. TOTOKU INDONESIA</li>
            <li>PT. TOYO DIES INDONESIA</li>
            <li>PT. TOYO BESQ PRECISION PART</li>
            <li>PT. TOYOBO KNITING</li>
            <li>PT. TRIX</li>
            <li>PT. VOITH PAPER</li>
            <li>PT. WONTI INDONESIA</li>
        </ul>
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
