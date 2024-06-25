
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Artikel Populer dan Terbaru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .main-container {
            display: flex;
            flex-direction: column;
            padding: 50px 10%;
            background-color: #ffffff;
        }
        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .article-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .article-card img {
            width: 100%;
            height: auto;
        }
        .article-card h3 {
            font-size: 18px;
            color: #333;
            margin: 10px;
        }
        .article-card p {
            font-size: 14px;
            color: #666;
            margin: 10px;
        }
        .article-card a {
            text-decoration: none;
            color: inherit;
        }
        .main-article {
            display: flex;
            margin-bottom: 40px;
        }
        .main-article img {
            width: 60%;
            height: auto;
        }
        .main-article-content {
            padding: 20px;
            width: 40%;
        }
        .main-article-content h2 {
            font-size: 24px;
            color: #333;
            margin: 0 0 20px 0;
        }
        .main-article-content p {
            font-size: 16px;
            color: #666;
            margin: 0 0 10px 0;
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

    <div class="main-container">
        <h2>Artikel Terpopuler</h2>
        <?php if (!empty($articles_populer)): ?>
        <div class="main-article">
            <img src="<?php echo $articles_populer[0]['image_url']; ?>" alt="Article Image">
            <div class="main-article-content">
                <a href="<?php echo $articles_populer[0]['link']; ?>" target="_blank">
                    <h2><?php echo $articles_populer[0]['title']; ?></h2>
                </a>
                <p><?php echo $articles_populer[0]['category']; ?> | <?php echo $articles_populer[0]['time_to_read']; ?></p>
            </div>
        </div>
        <?php else: ?>
        <p>Tidak ada artikel populer tersedia.</p>
        <?php endif; ?>

        <h2>Artikel Terbaru</h2>
        <div class="articles-grid">
            <?php if (!empty($articles_terbaru)): ?>
            <?php foreach ($articles_terbaru as $article): ?>
            <div class="article-card">
                <a href="<?php echo $article['link']; ?>" target="_blank">
                    <img src="<?php echo $article['image_url']; ?>" alt="Article Image">
                    <h3><?php echo $article['title']; ?></h3>
                    <p><?php echo $article['category']; ?> | <?php echo $article['time_to_read']; ?></p>
                </a>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
            <p>Tidak ada artikel terbaru tersedia.</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Teman Cerita. All Rights Reserved.</p>
    </div>
</body>
</html>
