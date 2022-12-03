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
          <li><a href="/application" class="nav-link px-2 text-secondary">Направить заявку</a></li>
          <li><a href="/pass" class="nav-link px-2">Одобренные заявки</a></li>
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

      <form action="{{ url('/add-application') }}" method="POST">
     @csrf
        <div class="container p-4">

                  <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Гос. Номер</label>
                  <div class="col-sm-10">    
                        <select class="form-select" id="autoSizingSelect" name="state_number">
                        <option selected>Укажите гос. номер</option>
                        @foreach($cars as $car)
                            <option>{{ $car->state_number }}</option>
                            @endforeach                  
                        </select>     
                    </div>
                  </div>
                


                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Пункт отправления</label>
                    <div class="col-sm-10">
                      <!-- <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label" name="code_ts"> -->
                      <select class="form-select" id="autoSizingSelect" name="point_a">
                      <option selected>Город</option>
                          <option value="Сургут">Сургут</option>
                          <option value="Нижневартовск">Нижневартовск</option>
                          <option value="Ханты-Мансийск">Ханты-Мансийск</option>       
                          <option value="Радужный">Радужный</option>                   
                    </select>
                    </div>
                  </div>
                  

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Пункт назначения</label>
                    <div class="col-sm-10">
                      <!-- <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label" name="code_ts"> -->
                      <select class="form-select" id="autoSizingSelect" name="point_b">
                      <option selected>Город</option>
                          <option value="Сургут">Сургут</option>
                          <option value="Нижневартовск">Нижневартовск</option>
                          <option value="Ханты-Мансийск">Ханты-Мансийск</option>       
                          <option value="Радужный">Радужный</option>                   
                    </select>
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Пункт назначения</label>
                    <div class="col-sm-10">         
                      <input type="date" class="form-control" name="period_from">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Пункт назначения</label>
                    <div class="col-sm-10">
 
                      <input type="date" class="form-control"name="period_to">
                    </div>
                  </div>

                <button class="btn btn-primary">Отправить</button>
</div>
</form>


<table class="table table-hover">
<thead class="table-dark table-font">
    <tr>
      <th scope="col">Гос. Номер</th>
      <th scope="col">Пункт отправления</th>
      <th scope="col">Пункт назначения</th>
      <th scope="col">Действителен с</th>
      <th scope="col">Действителен по</th>
      <th scope="col">Статус</th>


     
      <tbody>
      @foreach($applications as $application)
    <tr>
      <td>{{ $application->state_number }}</td>
      <td>{{ $application->point_a }}</td>
      <td>{{ $application->point_b }}</td>
      <td>{{ $application->period_from }}</td>
      <td>{{ $application->period_to }} </td>   
      <td>{{ $application->status }}</td>
      
    </tr>   
    @endforeach
  </tbody>

    </tr>
  </thead>
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





