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
   <header class="p-3 menu">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
          <img src="/img/logo.png" class="cabinet-logo">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/home" class="nav-link px-2">Главная</a></li>
          <li><a href="/application-admin" class="nav-link px-2 text-secondary">Список заявок</a></li>          
          <li><a href="/qr" class="nav-link px-2">Считать QR-код</a></li>
          <li><a href="/search" class="nav-link px-2">Поиск по номеру</a></li>
          <div class="btn-group">

          <li><a class="nav-link px-2 text-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Отчеты
            </a>
            <div class="dropdown-menu">
                <form action="{{ url('/generate') }}" method="POST">    
                  @csrf
                  <input type="hidden" name="applications">
                  <input type="hidden" name="car">
                  <input type="hidden" >
                  <button class="dropdown-item" name="pass" value="pass">Выгрузить пропуски</button>
                  <button class="dropdown-item" name="car" value="car">Выгрузить машины</button>
                  <button class="dropdown-item" name="applications" value="applications">Выгрузить заявки</button>
              </form>
            </div>
          </div>
</li>
        </ul>  


        
        <button action="{{ route('logout') }}" type="button" class="btn btn-outline-primary">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
          <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        this.closest('form').submit();"><i class="fa-solid fa-right-from-bracket"></i>  
        {{ __('Выход') }}
    </a>
</form> </button>


      </div>
    </div>
  </header>
<!-- Хэдер -->

    <body>      
    <section class="main-section">


    

<table class="table table-hover">
<thead class="table-dark table-font">
    <tr>
      <th scope="col">Организация</th>
      <th scope="col">Гос. номер</th>
      <th scope="col">Пункт отправления</th>
      <th scope="col">Пункт назначения</th>
      <th scope="col">Действует с</th>
      <th scope="col">Действует по</th>
      <th scope="col">Статус</th>
      <th scope="col">В работу</th>
     
    </tr>
  </thead>
  
  <!-- <form action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        <button>Выйти</button>
  </form> -->

  <tbody>
  @foreach($applications as $application)
        <form action="{{ url('/changeStatus') }}" method="POST">
            @csrf
    <tr>
      <td>{{ $application->organization_name }}</td>
      <td>{{ $application->state_number }}</td>
      <td>{{ $application->point_a }}</td>
      <td>{{ $application->point_b }}</td>
      <td>{{ $application->period_from }}</td>
      <td>{{ $application->period_to }}</td>
      <td>{{ $application->status }}</td>
      <td>
      @if($application->status == 'отправлено')
                
                <input type="hidden" name="id_applications" value="{{ $application->id_applications }}">   
                <button class="btn btn-outline-success" value="Принято в обработку" name="status">Принять в работу </button>            
            @elseif($application->status == 'Принято в обработку')                
                <input type="hidden" name="id_applications" value="{{ $application->id_applications }}">
                <input type="submit" value="Выдано разрешение" name="status">
                <input type="submit" value="Отклонено" name="status">
            @endif
    </td>      
    </tr>   
    @endforeach
  </tbody>
</table>

    </section>

    <footer class="footer d-flex flex-wrap justify-content-between align-items-center border-top p-5">
        <p class="footer col-md-4 mb-0 text-white">© 2022 ООО "Газпромнефть-Хантос"</p>
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img src="/img/logogray.png" width="280">
        </a>
    </footer>
</body>
</html>


     
