<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito Sans', sans-serif;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top bg-white">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo_kinasih.png') }}" alt="Logo Batik Kinasih" width="40" height="40" class="me-2">
                Rumah Kinasih
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn me-2">Login</button>
                    <button type="button" class="btn" style="color: #3874FF; background-color: white; border: 2px solid #E3E6ED;"
>
    Sign Up
</button>
                </div>
            </div>
        </div>
    </nav>
    
    
    
    <div style="position: relative; width: 100%;">
        <img src="{{ asset('images/Background_1.png') }}" alt="Background_1" style="width: 100%; height: auto;">
        
        <div style="position: absolute; top: 50%; left: 9%; transform: translate(0%, -50%); color: white; padding: 0% 50% 0% 0%;">
            <h1 style="font-size: 57px; font-weight: bold;">
                <span style="color: #D49E5F;">Yayasan</span> Rumah Kinasih Batik Ciprat
            </h1>
            <p style="font-size: 16px;">Yayasan memproduksi Batik Ciprat dan wadah rehabilitasi bagi teman-teman Disabilitas</p>
            <button type="button" class="btn btn-dark" style="border-radius: 20px;">Sign Up</button>
            <a href="#" style="color: white; text-decoration: underline; margin-left: 10px;">Check Demo ></a>
        </div>
    </div>
    
    <div style="position: relative; width: 100%;">
        <img src="{{ asset('images/Background_2.png') }}" alt="Background_2" style="width: 100%; height: auto;">
        
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
            <h1 style="font-size: 48px; font-weight: bold;">
                Apa Itu <span style="color: #D49E5F;">Rumah Kinasih</span>
            </h1>
            <p style="font-size: 24px;">Yayasan Bhakti Kinasih Mandiri atau yang lebih dikenal dengan Rumah Kinasih  , merupakan sebuah yayasan yang berada di Kabupaten Blitar yang mempelopori gerakan inklusif dibidang kewirausahaan sebagai wadah rehabilitasi teman- teman disabilitas untuk meningkatkan kemandirian, kesejahteraan, dan dapat berdaya  saing.</p>
            <button type="button" class="btn btn-dark" style="border-radius: 20px;">Sign Up</button>
            <a href="#" style="color: white; text-decoration: underline; margin-left: 10px;">Check Demo ></a>
        </div>
    </div>

    <div class="container text-center py-5">
        <div class="row align-items-center">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/Image_1.png') }}" alt="Image" style="width: 100%; height: auto;">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h1 style="font-size: 40px; font-weight: bold;">
                    <span style="color: #987750;">Program</span>
                    <span style="color: #D49E5F;">Rumah Kinasih</span>
                </h1>
                <p style="font-size: 13px; text-align: center; color:#987750;">Rumah Kinasih bertujuan melaksanakan rehabilitasi sosial penyandang disabilitas dan ODGJ secara mandiri, dengan memberikan keterampilan yang bernilai ekonomis dengan difasilitasi dan pendampingan. Hasilnya para penyandang disabilitas disamping memperoleh bimbingan juga memperoleh kesempatan kerja serta penghasilan.</p>
            </div>
        </div>
    </div>

    <div class="container text-center py-5">
        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h1 style="font-size: 40px; font-weight: bold;">
                    <span style="color: #987750;">Visi dan Misi</span>
                    <span style="color: #D49E5F;">Rumah Kinasih</span>
                </h1>
                <p style="font-size: 13px; text-align: center; color:#987750;">Terwujudnya disabilitas yang mandiri, sejahtera, berkelanjutan bermartabat dan berdaya saing.</p>
                <p style="font-size: 13px; text-align: center; color:#987750;">1. Memfasilitasi disabilitas untuk mendapatkan layanan pendidikan dalam upaya kesetaraan bagi penyandang kelainan fisik, emosional, mental, dan sosial.</p>
                <p style="font-size: 13px; text-align: center; color:#987750;">2. Memberi pelayanan serta perlindungan bagi penyandang kelainan fisik, emosional, mental, dan sosial.</p>
                <p style="font-size: 13px; text-align: center; color:#987750;">3. Meningkatkan kemandirian serta kesejahteraan penyandang disabilitas dan gangguan mental melalui upaya kewirausahaan dan keterampilan yang inovatif dan kekinian.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/Image_1.png') }}" alt="Image" style="width: 100%; height: auto;">
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>