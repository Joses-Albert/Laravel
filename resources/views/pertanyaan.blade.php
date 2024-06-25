<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Survey Form</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            background-size: 100% 200%;
            background-attachment: fixed;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #00b4db;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            font-size: 1em;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: #a9d9ff;
        }

        .navbar .nav-links {
            display: flex;
            align-items: center;
        }

        .container {
            max-width: 600px;
            margin: 60px auto 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
        }

        h1 {
            color: #1d2d50;
            text-align: center;
        }

        .question {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ccc;
        }

        .question label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #666;
        }

        .options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .options label {
            margin-bottom: 10px;
        }

        .options input[type="radio"] {
            margin-right: 5px;
        }

        button[type="submit"] {
            background-color: #1d2d50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s;
            display: block;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #ffeb30;
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background: #1d2d50;
            border-top-left-radius: 50% 20%;
            border-top-right-radius: 50% 20%;
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
        <h1>Test Kesehatan Mental</h1>
        <form action="hasil.php" method="POST">
            <div class="question">
                <label>Dalam 1 bulan terakhir, Seberapa sering kamu merasa terganggu oleh hal berikut?</label>
            </div>
            <div class="question">
                <label>Kurang senang atau tertarik dalam kegiatan sehari-hari?</label>
                <div class="options">
                    <label><input type="radio" name="question1" value="0"> Tidak pernah</label>
                    <label><input type="radio" name="question1" value="1"> Beberapa Hari</label>
                    <label><input type="radio" name="question1" value="2"> Sebagian Besar Hari</label>
                    <label><input type="radio" name="question1" value="3"> Hampir Setiap Hari</label>
                </div>
            </div>
            <div class="question">
                <label>Merasa sedih, muram, dan putus asa?</label>
                <div class="options">
                    <label><input type="radio" name="question2" value="0"> Tidak pernah</label>
                    <label><input type="radio" name="question2" value="1"> Beberapa Hari</label>
                    <label><input type="radio" name="question2" value="2"> Sebagian Besar Hari</label>
                    <label><input type="radio" name="question2" value="3"> Hampir Setiap Hari</label>
                </div>
            </div>
            <div class="question">
                <label>Sulit tidur atau tidur nyenyak; atau terlalu banyak tidur?</label>
                <div class="options">
                    <label><input type="radio" name="question3" value="0"> Tidak pernah</label>
                    <label><input type="radio" name="question3" value="1"> Beberapa Hari</label>
                    <label><input type="radio" name="question3" value="2"> Sebagian Besar Hari</label>
                    <label><input type="radio" name="question3" value="3"> Hampir Setiap Hari</label>
                </div>
            </div>
            <div class="question">
                <label>Merasa lelah atau kekurangan energi?</label>
                <div class="options">
                    <label><input type="radio" name="question4" value="0"> Tidak pernah</label>
                    <label><input type="radio" name="question4" value="1"> Beberapa Hari</label>
                    <label><input type="radio" name="question4" value="2"> Sebagian Besar Hari</label>
                    <label><input type="radio" name="question4" value="3"> Hampir Setiap Hari</label>
                </div>
            </div>
            <div class="question">
                <label>Apakah kekhawatiran kamu berlebihan?</label>
                <div class="options">
                    <label><input type="radio" name="question5" value="0"> Tidak pernah</label>
                    <label><input type="radio" name="question5" value="1"> Beberapa Hari</label>
                    <label><input type="radio" name="question5" value="2"> Sebagian Besar Hari</label>
                    <label><input type="radio" name="question5" value="3"> Hampir Setiap Hari</label>
                </div>
            </div>
            <div class="question">
                <label>Tidak napsu makan, atau makan berlebihan?</label>
                <div class="options">
                    <label><input type="radio" name="question6" value="0"> Tidak pernah</label>
                    <label><input type="radio" name="question6" value="1"> Beberapa Hari</label>
                    <label><input type="radio" name="question6" value="2"> Sebagian Besar Hari</label>
                    <label><input type="radio" name="question6" value="3"> Hampir Setiap Hari</label>
                </div>
            </div>
            <div class="question">
                <label>Kesulitan berkonsentrasi untuk melakukan kegiatan?</label>
                <div class="options">
                    <label><input type="radio" name="question7" value="0"> Tidak pernah</label>
                    <label><input type="radio" name="question7" value="1"> Beberapa Hari</label>
                    <label><input type="radio" name="question7" value="2"> Sebagian Besar Hari</label>
                    <label><input type="radio" name="question7" value="3"> Hampir Setiap Hari</label>
                </div>
            </div>
            <div class="question">
                <label>Malas untuk turun dari tempat tidur untuk memulai hari?</label>
                <div class="options">
                    <label><input type="radio" name="question8" value="0"> Tidak pernah</label>
                    <label><input type="radio" name="question8" value="1"> Beberapa Hari</label>
                    <label><input type="radio" name="question8" value="2"> Sebagian Besar Hari</label>
                    <label><input type="radio"                    name="question8" value="3"> Hampir Setiap Hari</label>
                </div>
            </div>
            <div class="question">
                <label>Menangis tanpa alasan?</label>
                <div class="options">
                    <label><input type="radio" name="question9" value="0"> Tidak pernah</label>
                    <label><input type="radio" name="question9" value="1"> Beberapa Hari</label>
                    <label><input type="radio" name="question9" value="2"> Sebagian Besar Hari</label>
                    <label><input type="radio" name="question9" value="3"> Hampir Setiap Hari</label>
                </div>
            </div>
            <div class="question">
                <label>Rasa ingin mengakhiri hidup yang tinggi?</label>
                <div class="options">
                    <label><input type="radio" name="question10" value="0"> Tidak pernah</label>
                    <label><input type="radio" name="question10" value="1"> Beberapa Hari</label>
                    <label><input type="radio" name="question10" value="2"> Sebagian Besar Hari</label>
                    <label><input type="radio" name="question10" value="3"> Hampir Setiap Hari</label>
                </div>
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>