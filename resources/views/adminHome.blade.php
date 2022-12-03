<!doctype html>

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
    <header class="p-3 menu text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="/img/logo.png" class="cabinet-logo">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/home" class="nav-link px-2 text-secondary">Главная</a></li>
          <li><a href="/application-admin" class="nav-link px-2 text-white">Список заявок</a></li>
          <li><a href="/application" class="nav-link px-2 text-white">Добавить заявку</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Все предприяития</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

    

        <div class="text-end">

            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            
        </div>
      </div>
    </div>
  </header>
 
          
        
    <body>
      
      <section class="main-section">


      
<p>страница администратора</p>


<table class="table table-hover">
<thead class="table-dark">
    <tr>
      <th scope="col">Гос. Номер</th>
      <th scope="col">Модель ТС</th>
      <th scope="col">Год выпуска</th>
      <th scope="col">Код ТС</th>
      <th scope="col">Вид транспортной услуги</th>
      <th scope="col">Вид ТС</th>
      <th scope="col">Тип ТС</th>
      <th scope="col">Значение характеристики типа ТС</th>
      <th scope="col">Страна производства</th>
      <th scope="col">Вид топлива</th>
      <th scope="col">Поставщик ТУ</th>
      <th scope="col">Субподряд</th>
      <th scope="col">Основание владения</th>
      <th scope="col">СМА</th>
     
    </tr>
  </thead>

  <!-- <a href="{{ url('/logout') }}"> logout </a> -->
  <!-- <form action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        <button>Выйти</button>
  </form> -->

  <tbody>
  @foreach($cars as $car)
    <tr>
      <td>{{ $car->state_number }}</td>
      <td>{{ $car->model }}</td>
      <td>{{ $car->year_of_release }}</td>
      <td>{{ $car->code_ts }}</td>
      <td>{{ $car->type_of_transport_service }}</td>
      <td>{{ $car->view_ts }}</td>
      <td>{{ $car->type_ts }}</td>
      <td>{{ $car->the_value_of_the_vehicle_type_characteristic }}</td>
      <td>{{ $car->country_of_manufacture }}</td>
      <td>{{ $car->type_of_fuel }}</td>
      <td>{{ $car->supplier }}</td>
      <td>{{ $car->subcontracting }}</td>
      <td>{{ $car->the_basis_of_ownership }}</td>
      <td>{{ $car->sma }}</td>
    </tr>   
    @endforeach
  </tbody>
</table>
</section>
</body>
