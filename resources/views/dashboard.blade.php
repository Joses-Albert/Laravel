<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Teman Cerita - Mahasiswa Pendidikan Komputer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px 10%;
            background-color: white;
        }
        .header .text {
            max-width: 50%;
        }
        .header .text h1 {
            color: #ff6384;
            font-size: 36px;
        }
        .header .text p {
            color: #333;
            font-size: 16px;
            margin: 20px 0;
        }
        .header .text button {
            background-color: #ffeb3b;
            border: none;
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .header .image img {
            max-width: 100%;
        }
        .features {
            display: flex;
            justify-content: space-around;
            padding: 50px 10%;
            background-color: white;
        }
        .features .feature {
            text-align: center;
            max-width: 200px;
        }
        .features .feature img {
            width: 50px;
        }
        .features .feature p {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
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
            max-width: 45%;
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
        .container {
            display: flex;
            padding: 50px;
            background-color: #ffeb3b;
        }
        .left {
            flex: 1;
            padding-right: 50px;
        }
        .left h1 {
            font-size: 36px;
            color: #333;
        }
        .left p {
            font-size: 18px;
            color: #333;
        }
        .right {
            flex: 2;
        }
        .right .header {.navbar {
            background-color: #00b4db;
            display: flex;
            align-items: center;
            padding: 20px 10%;
            color: white;
        }
        }
        .right .header h2 {
            font-size: 36px;
            color: #333;
            margin: 0;
        }
        .right .header p {
            font-size: 24px;
            color: #333;
            margin: 0;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .grid .item {
            background-color: #fff5cc;
            padding: 20px;
            border-radius: 10px;
        }
        .grid .item h3 {
            font-size: 18px;
            color: #333;
            margin-top: 0;
        }
        .grid .item p {
            font-size: 16px;
            color: #666;
            margin-bottom: 0;
        }
        .testimoni {
            padding: 50px 10%;
            background-color: #fff;
            text-align: center;
        }
        .testimoni h2 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }
        .testimoni .line {
            width: 80%;
            height: 2px;
            background-color: #ccc;
            margin: 0 auto 50px auto;
        }
        .testimoni .testi-container {
            display: flex;
            justify-content: space-between;
        }
        .testimoni .testi {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            max-width: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .testimoni .testi img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .testimoni .testi h3 {
            font-size: 18px;
            color: #333;
            margin: 10px 0 5px 0;
        }
        .testimoni .testi p {
            font-size: 16px;
            color: #666;
            margin: 5px 0;
        }
        .team {
            text-align: center;
            padding: 50px 0;
            background-color: #f4f4f4;
        }
        .team h2 {
            font-size: 36px;
            color: #333;
        }
        .team .team-members {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .team .member {
            text-align: center;
        }
        .team .member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
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
            </ul>
            <div class="d-flex" style="margin-right: 10px">
                <a href="/login" class="btn btn-outline-primary bg-white text-primary">Sign Up</a>
            </div>
            <div class="d-flex" style="margin-left: 10px">
                <a href="/register" class="btn btn-outline-primary bg-white text-primary">Register</a>
            </div>
          </div>
        </div>
      </nav>
    <div class="header">
        <div class="text">
            <h1>Experience a happier life with the best mental health solutions</h1>
            <p>Jika kamu mau berbicara dengan salah satu dari kami mungkin dapat membantu meringankan beban. Kami ingin menawarkan seseorang yang membimbing dan mampu memantikkan harapan.</p>
            <button onclick="window.location.href='/login'">Try Counseling</button>
        </div>
        <div class="image">
            <img src="images\image1.png" alt="Mental Health Solutions">
        </div>
    </div>
    <div class="features">
        <div class="feature">
            <img src="images\heart.png" alt="Wellbeing">
            <p><strong>22%</strong> increase in users wellbeing</p>
        </div>
        <div class="feature">
            <img src="images\users.png" alt="Users">
            <p>Trusted by <strong>50+</strong> users</p>
        </div>
        <div class="feature">
            <img src="images\rating.png" alt="Rating">
            <p>Received a <strong>4.9/5</strong> Rating from users</p>
        </div>
    </div>
    <div id="solution" class="solution">
        <h2>We have the solution!</h2>
        <div class="solution-content">
            <img src="images\image2.png" alt="Solution Image">
            <div class="solution-text">
                <h3>Check your mental health condition here!</h3>
                <p>Get to know your current wellbeing condition through a set of mental health tests, prepared by the Riflex Team for you.</p>
                <button onclick="window.location.href='/login'">Try Assessment</button>
            </div>
        </div>
    </div>
    <div id="konseling" class="container">
        <div class="left">
            <h1>Apa itu Konseling?</h1>
            <p>Konseling adalah layanan konsultasi one-on-one dengan Psikolog Satu Persen untuk mengatasi masalah kehidupan yang mengganggu kehidupan sehari-hari dan membahayakan dirimu atau orang lain.</p>
        </div>
        <div class="right">
            <div class="header">
                <h2>3</h2>
                <p>tanda kamu butuh Konseling dengan Psikolog</p>
            </div>
            <div class="grid">
                <div class="item">
                    <h3>Menyakiti atau membahayakan diri sendiri</h3>
                    <p>(e.g.: Merasa harga diri rendah, pikiran yang menyakiti diri sendiri, gangguan nafsu makan)</p>
                </div>
                <div class="item">
                    <h3>Menyakiti atau membahayakan orang lain</h3>
                    <p>(e.g.: Sulit mengontrol emosi hingga melakukan kekerasan kepada orang lain)</p>
                </div>
                <div class="item">
                    <h3>Mengganggu kehidupan sehari-hari</h3>
                    <p>(e.g.: Tidak bisa tidur sehingga sulit fokus di pekerjaan, hilang nafsu makan hingga sakit fisik)</p>
                </div>
            </div>
        </div>
    </div>
    <div id="testimoni" class="testimoni">
        <h2>Testimoni</h2>
        <div class="line"></div>
        <div class="testi-container">
            <div class="testi">
                <img src="images\users1.png" alt="User 1">
                <h3>AY</h3>
                <p>20 Tahun</p>
                <p>"Karena website ini bisa berhasil menarik aku yang keras kepala ini dari jalan buntu, dan kembali ke jalan utama, jadi lebih bisa melihat masalah dari sisi yang sangat berbeda."</p>
            </div>
            <div class="testi">
                <img src="images\users2.png" alt="User 2">
                <h3>NH</h3>
                <p>20 Tahun</p>
                <p>"Bagus banget untuk langkah awal konseling. Merasa didengarkan dan tepat."</p>
            </div>
            <div class="testi">
                <img src="images\users3.png" alt="User 3">
                <h3>AI</h3>
                <p>21 Tahun</p>
                <p>"Melalui website ini saya merasa sangat baik, karena bisa memposisikan dan memahami apa yang dirasa, apa yang menjadi masalah tanpa menyinggung ataupun menjudge. Pokoknya, nyaman banget sharingnya."</p>
            </div>
        </div>
    </div>
    <div class="team">
        <h2>OUR TEAM</h2>
        <div class="team-members">
            <div class="member">
                <img src="images\amel.jpg" alt="Team Member 1">
            </div>
            <div class="member">
                <img src="images\olin.jpg" alt="Team Member 2">
            </div>
            <div class="member">
                <img src="images\joses.jpg" alt="Team Member 3">
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Teman Cerita. All Rights Reserved. <a href="#solution">Solution</a> | <a href="#konseling">Apa itu Konseling?</a> | <a href="#testimoni">Testimoni</a></p>
    </div>
</body>
</html>
