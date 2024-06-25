<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Teman Cerita</title>
    <style>
        body {
            /* color: #1B325B;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            margin: 0;
            background-color: #F2F9EF;
            background-size: cover;
            background-position: center; */
        }
        .container {
        max-width: 800px;
        margin-top: 100px;
        margin-bottom: 170px;
        padding: 20px;
        }

        main {
        padding: 40px 0;
        }

        h1 {
        font-size: 32px;
        margin-bottom: 20px;
        }

        button {
        background-color: #ffeb3b;
        border: none;
        border-radius: 5px;
        color: black;
        cursor: pointer;
        font-size: 16px;
        padding: 10px 20px;
        }

        .instructions {
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top: 40px;
        padding: 20px;
        }

        .instructions h2 {
        font-size: 24px;
        margin-bottom: 20px;
        }

        .instructions ol {
        margin-left: 20px;
        }

        .instructions p {
        font-style: italic;
        margin-top: 20px;
        }
        .footer {
            background-color: #00b4db;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
        .footer a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
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
                <a class="nav-link active text-white" aria-current="page" href="#/artikel">Artikel</a>
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
    <div class="container">
        <main>
            <h1>Merasa sedih atau murung blakangan ini?</h1>
            <p>Tes ini bisa mengukur tingkat stres dalam dirimu. Hasil dari tes ini akan sangat membantu kamu mengetahui keadaan kesehatan mentalmu saat ini.</p>
            <a href="pertanyaan" class="btn"><button>Mulai</button></a>

            <section class="instructions">
            <h2>Baca panduan pengisiannya, yuk!</h2>
            <ol>
                <li>Gak ada jawaban yang benar atau salah. Isilah dengan jujur sesuai kepribadianmu.</li>
                <li>Santai aja, tes ini gak diberi waktu, kok.</li>
                <li>Cari tempat yang nyaman dan kondusif supaya kamu lebih fokus.</li>
                <li>Jika kamu keluar di tengah tes, maka seluruh proses tes dan jawaban akan hilang.</li>
                <li>Hasil tes bisa kamu dapatkan setelah mengisi semua pertanyaan dengan lengkap.</li>
            </ol>
            <p>Selamat mengisi, ya! : )</p>
            </section>
        </main>
    </div>
    <div class="footer">
        <p>&copy; 2024 Teman Cerita. All Rights Reserved. <a href="#solution">Solution</a> | <a href="#konseling">Apa itu Konseling?</a> | <a href="#testimoni">Testimoni</a></p>
      </div>
    </body>
</html>