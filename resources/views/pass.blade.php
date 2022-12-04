<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>АИС "Дороги - Газпром" - кабинет поставщика услуг</title>
        <link rel="shortcut icon" href="/img/favicon.png" />
        <script src="https://kit.fontawesome.com/ac6463d131.js" crossorigin="anonymous"></script>      
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/all.css">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
    </head>


<!-- Хэдер -->
    <header class="p-3 menu shadow-lg border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
          <img src="/img/logo.png" class="cabinet-logo">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/home" class="nav-link px-2">Главная</a></li>
          <li><a href="/car" class="nav-link px-2">Добавить машину</a></li>
          <li><a href="/application" class="nav-link px-2">Направить заявку</a></li>
          <li><a href="/pass" class="nav-link px-2 text-secondary">Одобренные заявки</a></li>
        </ul>
        <div class="text-end">
          <div class="btn-group">
            <!-- Кнопка -->
            <button type="button" class="btn btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @foreach($contractors as $contractor)
            {{ $contractor->organization_name }}
            @endforeach
            </button>  
            <!-- Меню -->  
            <div class="dropdown-menu menu-foruser">
            <h3>Карточка предприятия</h3>
          @foreach($contractors as $contractor)
              <p>Название организации {{ $contractor->organization_name }}</p>
              <p>Номер телефона: {{ $contractor->number }}</p>
              <p>Почта {{ $contractor->email }}</p>
              <p>Код СМА {{ $contractor->code_sma }}</p>
          @endforeach
            </div>
          </div>
        <button action="{{ route('logout') }}" type="button" class="btn btn-outline-primary">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
          <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        this.closest('form').submit();"><i class="fa-solid fa-right-from-bracket"></i>  
        {{ __('Выход') }}
          </a>
        </form> 
        </button>     
        </div>
      </div>
    </div>
  </header>
<!-- Хэдер -->


    <body>      
      <section class="main-section">


      

<table class="table table-hover">
<thead class="table-dark table-font">
    <tr>
      <th scope="col">Гос. Номер</th>
      <th scope="col">Точка А</th>
      <th scope="col">Точка Б</th>
      <th scope="col">Действителен с</th>
      <th scope="col">Действителен по</th>
      <th scope="col">Уникальный код</th>
      <th scope="col">telegram</th>
      <th scope="col">VK</th>
      <!-- <th scope="col">QR-код</th> -->

     
      <tbody>
      @foreach($allPass as $pass)
    <tr>
      <td>{{ $pass->state_number }}</td>
      <td>{{ $pass->point_a }}</td>
      <td>{{ $pass->point_b }}</td>
      <td>{{ $pass->period_from }}</td>
      <td> {{ $pass->period_to }}</td>   
      <td><a href="/qr-code/{{ $pass->qr_code }}" >Уникальный код</a></td>
      <td><a class="btn_telegram_share" href="https://telegram.me/share/url?url=https://gp.admrad.ru/qr-code/{{ $pass->qr_code }}" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
          </svg>
          Поделиться в телеграмме</a></td>
      <td><a href="https://vk.com/share.php?url=http://https://gp.admrad.ru/qr-code/{{ $pass->qr_code }}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
            <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
          </svg> 
        Поделиться ВКонтакте</a></td>
      <!-- <td>{!! QrCode::size(180)->generate('http://gp.admrad.ru/qr-code/' . $pass->qr_code ) !!}</td> -->
      
    </tr>   
    @endforeach
  </tbody>

    </tr>
  </thead>
</table>



      <!-- @foreach($allPass as $pass)
    <p>Номер машины: {{ $pass->state_number }}</p>
    <p>Точка А: {{ $pass->point_a }}</p>
    <p>Точка Б: {{ $pass->point_b }}</p>
    <p>Действителен с: {{ $pass->period_from }}</p>
    <p>Действителен по: {{ $pass->period_to }}</p>
    {!! QrCode::size(300)->generate('http://road.local/qr-code/' . $pass->qr_code ) !!}
    <a href="/qr-code/{{ $pass->qr_code }}">Уникальный код</a>
    @endforeach
         -->

        </section>

<footer class="footer d-flex flex-wrap justify-content-between align-items-center border-top p-5">
    <p class="footer col-md-4 mb-0 text-white">© 2022 ООО "Газпромнефть-Хантос"</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <img src="/img/logogray.png" width="280">
    </a>
  </footer>
</body>
</html>



