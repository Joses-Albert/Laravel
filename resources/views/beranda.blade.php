<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mahasiswa Butuh Teman Cerita</title>
    <style>
        /* Add a new class for the separator */
        .separator {
            height: 2px;
            background-color: #ddd;
            margin: 30px 0;
            border-radius: 5px;
        }
        
        /* Update the existing styles */
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        background-color: #FFFFFF; /* Background color is white */
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        display: flex; /* Add flexbox to container */
        justify-content: space-between; /* Align items horizontally */
        align-items: center; /* Align items vertically */
    }

    .header {
        background-color: #00b4db; /* Header background color */
        color: #FFFFFF; /* Header text color */
        padding: 10px;
        text-align: center;
    }

    .header ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-between;
    }

    .header li {
        margin-right: 20px;
    }

    .header a {
        color: #FFFFFF;
        text-decoration: none;
    }

    .header a:hover {
        color: #CCCCCC;
    }

    .hero {
        flex-basis: 50%; /* Set width of hero section to 50% */
        padding: 20px;
    }

    .hero h1 {
        font-size: 48px;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 18px;
        line-height: 1.5;
        margin-bottom: 30px;
    }

    .btn-hero {
        text-decoration: none;  
        color: black;
        background-color: #ffeb3b;
        border: none;
        padding: 15px 30px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        margin: 10px;
    }

    .btn-hero:hover {
        background-color: #f7dc6f;
    }

    .image {
        flex-basis: 50%; /* Set width of image section to 50% */
        padding: 20px;
    }

    .image img {
        width: 100%; /* Make image full width */
        height: 100%; /* Make image full height */
        object-fit: cover; /* Make image cover the entire area */
    }
    
    .solution {
        padding: 50px 10%;
        background-color: white;
        text-align: center;
    }
    .solution h2 {
        color: #ff6384;
        font-size: 30px;
    }
    .solution-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 30px;
    }
    .solution-content img {
        max-width: 40%;
    }
    .solution-text {
        max-width: 50%;
        text-align: left;
    }
    .solution-text h3 {
        color: #00b4db;
        font-size: 24px;
    }
    .solution-text p {
        color: #333;
        font-size: 16px;
        margin: 20px 0;
    }
    .solution-text button {
        background-color: #ffeb3b;
        border: none;
        padding: 15px 30px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }
    .articles-section {
        text-align: center;
        padding: 50px 10%;
    }

    .articles-section::before {
        content: '';
        display: block;
        width: 80%;
        height: 2px;
        background-color: #ddd;
        margin: 0 auto;
        margin-bottom: 10px;
    }

    .articles-section h2 {
        font-size: 32px; /* Increase the font size of the "Artikel" header */
        margin-top: 0;
    }

    .articles {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items:stretch; /* Ensure all articles have the same height */
        padding: 20px 0;
    }

   .article {
        background-color: #f4f4f4;
        padding: 15px;
        border-radius: 5px;
        width: 30%;
        margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

   .article img {
        max-width: 100%;
        border-radius: 5px;
    }

   .article h3 {
        font-size: 18px;
        color: #333;
        margin: 10px 0;
    }

   .article p {
        font-size: 14px;
        color: #666;
    }

   .article.btn {
        background-color: #ffeb3b;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        text-align: center;
        display: block;
        width: 100%;
        margin-top: 10px;
        text-decoration: none;
    }

   .article.btn:hover {
        background-color: #ffeb3b;
    }
     
    .center-button {
  text-align: center; /* horizontal centering */
  margin: 0 auto; /* vertical centering */
}

.btn button {
  background-color: #ffeb3b;
  border: none;
  padding: 15px 30px;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}

.btn button:hover {
  background-color: #f7dc6f;
}

   .footer {
        background-color: #00b4db;
        color: white;
        text-align: center;
        padding: 10px 0;
        margin-top: 30px;
    }

   .footer a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
        font-size: 14px;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #00b4db">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: #fefefefe">Teman Cerita</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/beranda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Teman Cerita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/psikotes">Psikotes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/konsultasi">Konsultasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/artikel">Artikel</a>
              </li>
            </ul>
            <div class="user me-3 text-white">
                Halo, {{ Auth::user()->name }}
            </div>
            <div class="logout">
                <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
            </div>
          </div>
        </div>
      </nav>
    <section class="hero">
        <div class="container">
            <div class="hero">
                <h1>Mahasiswa Butuh Teman Cerita</h1>
                <p>Siapapun pasti butuh teman untuk curhat, Seseorang yang bisa menjadi pendengar yang baik, bisa memahami dan menerima kita apa adanya. Lebih jauhnya bisa membantu memberikan solusi dari setiap permasalahan yang dihadapi.</p>
                <a href="TemanCerita.php" class="btn-hero">Ayo Bercerita</a>
                <a href="Konsultasi.php" class="btn-hero">Mari Berkonsultasi</a>
            </div>
            <div class="image">
                <img src="images/berandaa.png" alt="Beranda Image">
            </div>
        </div>
    </section>
    <div class="separator"></div>
    <div id="solution" class="solution">
        <h2>We have the solution!</h2>
        <div class="solution-content">
            <img src="images/image2.png" alt="Solution Image">
            <div class="solution-text">
                <h3>Check your mental health condition here!</h3>
                <p>Get to know your current wellbeing condition through a set of mental health tests, prepared by the Riflex Team for you.</p>
                <button onclick="window.location.href='halamanpsikotes.php'">Mari Coba Tes Kesehatan Mental</button>
            </div>
        </div>
    </div>
    <section class="articles-section">
    <h2>Artikel</h2>
    <div class="container articles">
        <div class="article">
            <img src="images/article1.jpg" alt="Article 1 Image">
            <h3>Dampak polusi udara bagi kesehatan mental: dari depresi hingga bunuh diri</h3>
            <p>Beberapa bulan belakangan ini polusi udara Jakarta memprihatinkan. Berdasarkan situs pemantau kualitas udara IQAir.com, konsentrasi partikel debu atau particulate matter 2,5 (PM2,5) per 21 September masih di angka 68 mikrogram per meter kubik (µg/m³). Angka tersebut melampaui dua kali lipat standar PM2,5 harian versi WHO sebesar 25 µg/m3.</p>
            <a href="https://theconversation.com/dampak-polusi-udara-bagi-kesehatan-mental-kita-dari-depresi-hingga-bunuh-diri-214072" class="btn"><button>Baca Selengkapnya</button></a>
        </div>
        <div class="article">
            <img src="images/article2.jpg" alt="Article 2 Image">
            <h3>4 hal yang bisa mencegah dan mengurangi risiko bunuh diri</h3>
            <p>Secara global, diperkirakan 700.000 orang bunuh diri setiap tahunnya - sebuah statistik yang menggarisbawahi pentingnya pencegahan bunuh diri. Pikiran (ide), rencana, dan percobaan bunuh diri adalah hal yang sangat umum terjadi: 12% orang Kanada pernah berpikir untuk bunuh diri selama hidup mereka, 4.3% membuat rencana, dan 3.1% mencobanya.</p>
            <a href="https://theconversation.com/4-hal-yang-bisa-mencegah-dan-mengurangi-risiko-bunuh-diri-203506" class="btn"><button>Baca Selengkapnya</button></a>
        </div>
        <div class="article">
            <img src="images/article3.jpg" alt="Article 3 Image">
            <h3>Tiga cara untuk mengatasi kecemasan yang dirasakan banyak orang di akhir pekan</h3>
            <p>Hari Minggu sering kali merupakan kesempatan untuk bertemu dengan teman-teman, yang menyebabkan kita kurang tidur, dan berusaha pulih dari mabuk semalam. Tetapi bagi sebagian dari kita, pada saat Minggu sore tiba, muncul perasaan cemas dan takut yang sering disebut sebagai “teror hari Minggu”.</p>
            <a href="https://theconversation.com/tiga-cara-untuk-mengatasi-kecemasan-yang-dirasakan-banyak-orang-di-akhir-pekan-189235" class="btn"><button>Baca Selengkapnya</button></a>
        </div>
        <div class="center-button">
            <a href="artikel.php" class="btn"><button>Lihat Semua Artikel</button></a>
        </div>
    </div>
</section>
    <footer class="footer">
        <p>&copy; 2024 Mahasiswa Butuh Teman Cerita</p>
    </footer>
</body>
</html>