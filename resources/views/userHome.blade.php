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
          <button type="button" class="btn btn-primary">Отправить</button>
     </form>

<p>страница пользователя</p>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
     <button>Выйти</button>
</form>

<h3>Карточка предприятия</h3>
@foreach($contractors as $contractor)
     <p>Название организации {{ $contractor->organization_name }}</p>
     <p>Номер телефона: {{ $contractor->number }}</p>
     <p>Почта {{ $contractor->email }}</p>
     <p>Код СМА {{ $contractor->code_sma }}</p>
@endforeach


<table class="table">
  <thead>
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
     
    </tr>
  </thead>
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
    </tr>   
    @endforeach
  </tbody>
</table>
</section>
</body>
