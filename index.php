<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Sumatera Utara</title>

    <!-- import custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- import bootsrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- import google fonts : Poppins & Caveat -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&display=swap" rel="stylesheet">

    <!-- import icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body>
    <!-- menu section -->
    <div class="menu pt-5">
        <div class="logo">
            <img src="images/logo.png" width="100px">
            <h3 class="text-center pt-4">Universitas Sumatera Utara</h3>
            <p class="text-center">Towards Exellence as University to Industry</p>
        </div>

        <div class="login-form">
            <h4 class="pb-4">Portal</h4>
            <p><i class='fas fa-user-graduate'></i><a href="s-login.php">Mahasiswa</a></p><br>
            <p><i class='fas fa-chalkboard-teacher'></i><a href="l-login.php">Dosen/Staff</a></p>
        </div>
    </div>

    <!-- main section -->
    <div class="content">
        <!-- navbar -->
        <nav>
            <div class="d-md-flex flex-row justify-content-md-around p-2">
                <div class="p-2">
                    <a href="">
                        <h5><i class='fas fa-home'></i> Home</h5>
                    </a>
                </div>
                <div class="p-2">
                    <a href="#news">
                        <h5><i class="bi bi-newspaper"></i> News</h5>
                    </a>
                </div>
                <div class="p-2">
                    <a href="#program">
                        <h5><i class='fas fa-school'></i> Program</h5>
                    </a>
                </div>
                <div class="p-2">
                    <a href="#visi">
                        <h5><i class='bi bi-book-half'></i> Visi & Misi</h5>
                    </a>
                </div>
                <div class="p-2">
                    <a href="#contact">
                        <h5><i class="bi bi-telephone-fill"></i> Contact</h5>
                    </a>
                </div>
            </div>
        </nav>
        <!-- navbar -->

        <!-- jumbotron -->
        <section id="jumbotron">
            <div class="container">
                <img src="images/bg.png" width="100%">
            </div>
            <h3 class="text-center">Kolaborasi Menuju Indonesia Maju</h3>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#543ae6 " fill-opacity="1" 
            d="M0,128L48,112C96,96,192,64,288,96C384,128,480,224,576,256C672,288,768,256,864,229.3C960,203,1056,181,
            1152,176C1248,171,1344,181,1392,186.7L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,
            0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        </section>

        <!-- news -->
        <section id="news">
            <div class="news text-end">
                <p class="mb-0">Berita</p>
                <p style="color: #251965;">Terkini</p>
            </div>
            <div class="d-md-flex container justify-content-md-center pt-2 ">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="images/news.png" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text text-center">USU Borong 9 Penghargaan Bergengsi dari Diktiristek</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="images/news(2).png" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text text-center">USU Raih Penghargaan Anugerah KIP Lembaga Informatif 2022 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="images/news(3).png" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text text-center">USU Melangsungkan Kerja Sama dengan BKIPM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#543ae6 " fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,96C384,128,480,224,576,256C672,288,768,256,864,229.3C960,203,1056,181,1152,176C1248,171,1344,181,1392,186.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </section>
        <section id="program">
            <h3 class="text-center">Program</h3>
            <div class="d-md-flex flex-row justify-content-md-around">
                <div class="az p-2 m-2 flex-wrap" >
                    <h4 class="text-center">Program Sarjana</h4>
                    <p class="text-center">Program sarjana pada Universitas Sumatera Utara bisa diikuti oleh lulusan SMA/SMK/MA/MAK, dapat ditempuh dalam waktu 8-14 semester, untuk menghasilkan lulusan yang dapat berkontribusi dalam kemajuan ilmu dan teknologi.</p>
                </div>
                <div class="az p-2 m-2 flex-wrap">
                    <h4 class="text-center">Program Pascasarjana</h4>
                    <p class="text-center">USU menawarkan program studi lanjutan di tingkat S2 dan S3 yang diselenggarakan di fakultas serta sekolah Pascasarjana, untuk menghasilkan lulusan yang dapat berkontribusi baik dalam penelitian maupun kontribusi langsung pada masyarakat.</p>
                </div>
                <div class="az p-2 m-2 flex-wrap">
                    <h4 class="text-center">Program Diploma Spesialis</h4>
                    <p class="text-center">Sekolah Vokasi menawarkan berbagai program studi Diploma yang berfokus untuk memperlengkapi mahasiswa dengan keterampilan yang relevan dengan tuntutan dunia kerja.</p>
                </div>
                <div class="az p-2 m-2 flex-wrap">
                    <h4 class="text-center">Program Profesi</h4>
                    <p class="text-center">Program profesi diperuntukkan sebagai bagi lulusan program studi tertentu sebagai syarat untuk mendapatkan gelar keprofesian, untuk menghasilkan lulusan dengan memilki persyaratan keahlian khusus.</p>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#543ae6 " fill-opacity="1" d="M0,96L24,90.7C48,85,96,75,144,90.7C192,107,240,149,288,170.7C336,192,384,192,432,192C480,192,528,192,576,208C624,224,672,256,720,250.7C768,245,816,203,864,181.3C912,160,960,160,1008,144C1056,128,1104,96,1152,122.7C1200,149,1248,235,1296,245.3C1344,256,1392,192,1416,160L1440,128L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
        </section>
        <section id="visi">
            <h3 class="text-center">Visi & Misi</h3>
            <div class="d-md-flex p-3 flex-row justify-content-md-around">
                <div class="az col-md-4 p-2 m-2" >
                    <h4 class="text-center">VISI</h4>
                    <p class="text-center" style="color: #251965;">Menjadi perguruan tinggi yang memiliki keunggulan akademik sebagai barometer kemajuan ilmu pengetahuan yang mampu bersaing dalam tataran dunia global</p>
                </div>
                <div class="az col-md-8 p-2 m-2">
                    <h4 class="text-center">MISI</h4>
                    <ul style="color: #251965;">
                        <li class="text-center p-2">Menyelenggarakan pendidikan tinggi berbasis otonomi yang menjadi wadah bagi pengembangan karakter dan profesionalisme sumber daya manusia yang didasarkan pada pemberdayaan yang mengandung semangat demokratisasi pendidikan yang mengakui kemajemukan dengan orientasi pendidikan yang menekankan pada aspek pencarian alternatif penyelesaian masalah aktual berlandaskan kajian ilmiah, moral, dan hati nurani</li>
                        <li class="text-center p-2">Menghasilkan lulusan yang menjadi pelaku perubahan sebagai kekuatan modernisasi dalam kehidupan masyarakat luas, yang memiliki kompetensi keilmuan, relevansi dan daya saing yang kuat, serta berperilaku kecendikiawanan yang beretika</li>
                        <li class="text-center p-2">Melaksanakan, mengembangkan, dan meningkatkan pendidikan, budaya penelitian dan program pengabdian masyarakat dalam rangka peningkatan kualitas akademik dengan mengembangkan ilmu yang unggul, yang bermanfaat bagi perubahan kehidupan masyarakat luas yang lebih baik.</li>
                    </ul>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#543ae6" fill-opacity="1" d="M0,32L26.7,80C53.3,128,107,224,160,240C213.3,256,267,192,320,176C373.3,160,427,192,480,192C533.3,192,587,160,640,149.3C693.3,139,747,149,800,133.3C853.3,117,907,75,960,69.3C1013.3,64,1067,96,1120,138.7C1173.3,181,1227,235,1280,245.3C1333.3,256,1387,224,1413,208L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
        </section>
        <section id="contact">
            <h3 class="text-center mt-4 pb-5">CONTACT</h3>
            <div class="d-md-flex flex-row justify-md-center" style="align-items: center;">
                <div class="col-7 p-2">
                    <h4 class="text-center">Hubungi kami disini</h4>
                    <div class="d-flex justify-content-center">
                        <div class="p-2">
                            <a href="https://www.instagram.com/accounts/login/"><i class="bi bi-instagram"></i></a>
                        </div>
                        <div class="p-2">
                            <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Fusuofficial"><i class="bi bi-facebook"></i></a>
                        </div>
                        <div class="p-2">
                            <a href="https://twitter.com/usuofficial"><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>
                    <p class="text-center"><a href="https://www.usu.ac.id/-">info.usu.ac.id</a></p>
                </div>
                <div class="col-5 p-2">
                    <img src="images/cs.png" width="300px">
                </div>
            </div>
        </section>

        <!-- footer -->
        <footer>
            <p class="text-center">Copyright <i class="bi bi-c-circle"></i> UNIVERSITAS SUMATERA UTARA, 2022</p>
        </footer>
    </div>

    <!-- link to bootsrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>