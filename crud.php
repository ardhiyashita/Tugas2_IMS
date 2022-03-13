<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="newStyle.css">
    
    <title>movie-crud</title>
</head>
<body>
    <div class="desktop">
        <nav>
            <div class="logo">
                HealingTime
            </div>
            <ul>
                <li class="movie"><a href="">Movie</a></li>
                <li class="series"><a href="">Series</a></li>
                <li class="cartoon"><a href="">Cartoon</a></li>
                <li class="anime"><a href="">Anime</a></li>
            </ul>
            <div class="search"></div>
            <div class="notification"></div>
        </nav>
        <div class="side-user"></div>
            <img class="profile-user" src="img/unsplash_Zz5LQe-VSMY.png" alt="">
            <div class="username">Katty Perry</div>
            <div class="user-gmail">kattyper2032@gmail.com</div>
                <div class="user-line" style="left: 1107px;top: 133px;"></div>
                    <div class="create-movie"></div>
                        <a class="text-crud" style="left: 1188px;top: 166px;" href="create.php">Create Movie</a>
                    <div class="read-movie"></div>
                        <a class="text-crud" style="left: 1188px;top: 234px;" href="">Read Movie</a>
                    <div class="update-movie"></div>
                        <a class="text-crud" style="left: 1188px;top: 309px;" href="">Update Movie</a>
                    <div class="delete-movie"></div>
                        <a class="text-crud" style="left: 1188px;top: 379px;" href="">Delete Movie</a>
                <div class="user-line" style="left: 1107px;top: 467px;"></div>
        <div class="box-news">
            <div class="text-news">Today's Booming Movie</div>
            <div class="img-news"></div>
            <div class="text-news-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</div>
        </div>
        <div class="box-next"></div>
            <div class="box-film gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            </div>
        <div class="box-iklan">

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>