<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        nav {
            font-family: Arial, sans-serif;
            color: #ff6384;
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
          <a class="navbar-brand" href="/dashboard" style="color: #fefefefe">Teman Cerita</a>
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
    <div class="container mt-4">
        @yield('container')
    </div>
    <div class="footer">
      <p>&copy; 2024 Teman Cerita. All Rights Reserved. <a href="#solution">Solution</a> | <a href="#konseling">Apa itu Konseling?</a> | <a href="#testimoni">Testimoni</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>