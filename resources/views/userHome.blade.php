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
<h3>Машины</h3>
@foreach($cars as $car)
     <p>Гос. Номер: {{ $car->state_number }}</p>
     <p>Модель ТС: {{ $car->model }}</p>
     <p>Год выпуска: {{ $car->year_of_release }}</p>
     <p>Код ТС: {{ $car->code_ts }}</p>
     <p>Вид транспортной услуги: {{ $car->type_of_transport_service }}</p>
     <p>Вид ТС: {{ $car->view_ts }}</p>
     <p>Тип ТС: {{ $car->type_ts }}</p>
     <p>Значение характеристики типа ТС: {{ $car->the_value_of_the_vehicle_type_characteristic }}</p>
     <p>Страна производства: {{ $car->country_of_manufacture }}</p>
     <p>Вид топлива: {{ $car->type_of_fuel }}</p>
     <p>Поставщик ТУ: {{ $car->supplier }}</p>
     <p>Субподряд: {{ $car->subcontracting }}</p>
     <p>Основание владения: {{ $car->the_basis_of_ownership }}</p>

@endforeach

<table class="table">
  <thead>
    <tr>
      <th scope="col">Гос. Номер</th>
      <th scope="col">Модель ТС</th>
      <th scope="col">Год выпуска</th>
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

</body>
