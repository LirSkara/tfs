<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/main.css">

    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="fixed-top bg-white border-bottom">
      <div class="d-flex bd-highlight">
        <div class="p-2 w-100 bd-highlight">
            <span class="fs-5 fw-bold">ТутФотоЛента</span>
        </div>
        <div class="p-2 flex-shrink-1 bd-highlight fs-3 me-2">
          <i class="bi bi-envelope"></i>
        </div>
    </div>
    </nav>
    <nav class="fixed-bottom bg-white border-top">
      <div class="d-flex bd-highlight text-center fs-2">
        <div class="p-2 flex-fill bd-highlight"><a href="/"><i class="bi bi-house-door"></i></a></div>
        <div class="p-2 flex-fill bd-highlight"><a href="/search"><i class="bi bi-search"></i></a></div>
        <div class="p-2 flex-fill bd-highlight"><a href="/add_content"><i class="bi bi-plus-circle-fill"></i></a></div>
        <div class="p-2 flex-fill bd-highlight"><i class="bi bi-heart"></i></div>
        <div class="p-2 flex-fill bd-highlight"><a href="/cabinet"><img src="http://5dreal.com/wp-content/uploads/2016/03/image-1-1024x576.jpg" class="rounded-circle img-ava-lent" alt=""></a></div>
      </div>
    </nav>
    <div class="my-5" style="height: 100vh">
      @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
  </body>
</html>
