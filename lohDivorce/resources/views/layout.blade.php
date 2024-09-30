<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link">Инструкции</a></li>
            <li class="nav-item"><a href="/" class="nav-link active">РАЗВОД ЛОХОВ</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">О лохах</a></li>
        </ul>
    </header>
    
    @yield('body')
    
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 mx-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                РАЗВОД ЛОХОВ
            </a>

            <span lass="mb-3 mb-md-0 text-body-secondary">© 2024 Cumпани Инк</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="https://www.factroom.ru/wp-content/uploads/2022/10/cover-screamer.jpg">Телеграм</a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https://cs12.pikabu.ru/post_img/2022/03/12/5/og_og_1647067026217427091.jpg">Инстаграм</a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https://memchik.ru//images/memes/6393983fb1c7e3244706f48d.jpg">Порнхаб</a></li>
        </ul>
  </footer>
</body>
</html>