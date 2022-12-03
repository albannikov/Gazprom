<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>АИС "Дороги - Газпром" - кабинет поставщика услуг</title>
        <link rel="shortcut icon" href="/img/favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

 
    </head>
    <header class="p-3 menu shadow-lg border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
          <img src="/img/logo.png" class="cabinet-logo">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/home" class="nav-link px-2 text-secondary">Главная</a></li>
          <li><a href="/car" class="nav-link px-2">Добавить машину</a></li>
          <li><a href="/application" class="nav-link px-2">Добавить заявку</a></li>

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
</form> </button>

        </div>
      </div>
    </div>
  </header>      
        
    <body>
    <section class="main-section">
<form action="{{ url('/add-car') }}" method="POST">
        @csrf
          <p>Гос. Номер: <input type="text" name="state_number"></p>
          <p>Модель ТС: <input type="text" name="model"></p>
          <p>Год выпуска: <input type="text" name="year_of_release"></p>
          <p>Код ТС: <input type="text" name="code_ts"></p>
          <p>Вид транспортной услуги: <input type="text" name="type_of_transport_service"></p>
          <p>Вид ТС: <input type="text" name="view_ts"></p>
          <p>Тип ТС: <input type="text" name="type_ts"></p>
          <p>Значение характеристики типа ТС: <input type="text" name="the_value_of_the_vehicle_type_characteristic"></p>
          <p>Страна производства: <input type="text" name="country_of_manufacture"></p>
          <p>Вид топлива: <input type="text" name="type_of_fuel"></p>
          <p>Субподряд: <input type="text" name="subcontracting"></p>
          <p>Основание владения: <input type="text" name="the_basis_of_ownership"></p>
          <button class="btn btn-primary">Отправить</button>
        
        
          <div class="container">
                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Гос. Номер</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Модель ТС</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Год выпуска</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Код ТС</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Вид ТС</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Тип ТС</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Значение характеристики типа ТС</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Страна производства</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Вид топлива</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                  </div>
            
        </div>

     </form>
     </section>
     <footer class="footer d-flex flex-wrap justify-content-between align-items-center border-top p-5">
        <p class="footer col-md-4 mb-0 text-white">© 2022 ООО "Газпромнефть-Хантос"</p>
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <img src="/img/logogray.png" width="280">
    </a>
  </footer>
</body>
</html>