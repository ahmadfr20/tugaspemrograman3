<?php
    $url = file_get_contents('https://mangamint.kaedenoki.net/api/manhua/1');
    $menu = json_decode($url, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Manhua</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">    
            <a class="navbar-brand" href="../index.html">Mangainfos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="dropdown">
                  <button class="btn btn-sm btn-success dropdown-toggle" type="button" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Manga
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdown">
                  <a class="nav-link" href="manhwa.php">Manhwa</a>
                  <a class="nav-link" href="manhua.php">Manhua</a>
                  <a class="nav-link" href="popular.php">Popular</a>
                  <a class="nav-link" href="all.php">All</a>
                  <a class="nav-link" href="recommendations.php">Rekomendasi</a>
                  <a class="nav-link" href="forum.php">Forum</a>
                  </div>
                </div>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="top.php">Top</a>
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="genre.php">Genre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news.php">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pictures.php">Pictures</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="userupdate.php">User Update</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>

    <hr>

    <h1 class="text-center">Manhua</h1>

    <hr>

    <div class="row" id="manga-list">
        <div class="row justify-content-center">
            <?php foreach ($menu['manga_list'] as $data): ?>
              <div class="card" style="width: 20rem;">
                <div class="col-md-12">
                <center>
                    <img src="<?=$data['thumb']?>" class="rounded" width="286" height="180" alt="">
                    <div class="card-body">
                        <h5 class="card-title"> Judul : <?=$data['title']?></h5>
                        <p class="card-text"> Tipe : <?=$data['type']?></p>
                        <p class="card-text"> Chapter : <?=$data['chapter']?></p>
                        <p class="card-text"> Updated : <?=$data['updated_on']?> yang lalu</p>
                    </div>
                </center>
                </div>
            </div>
            <?php endforeach; ?>
        </div>           
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>
