

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

 
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
    </head>



<table class="table table-hover">
<thead class="table-dark table-font">
    <tr> 
      <th scope="col">Гос. Номер</th>
      <th scope="col">Пункт отправления</th>
      <th scope="col">Пункт назначения</th>
      <th scope="col">Действителен с </th>
      <th scope="col">Действителен по</th>
      <th scope="col">Модель ТС</th>
      <th scope="col">Год выпуска</th>
      <th scope="col">Код ТС</th>
      <th scope="col">Вид услуги</th>
      <th scope="col">Вид ТС</th>
      <th scope="col">Тип ТС</th>
      <th scope="col">Характеристика</th>
      <th scope="col">Страна производства</th>
      <th scope="col">Вид топлива</th>
      <th scope="col">Поставщик ТУ</th>
      <th scope="col">Субподряд</th>
      <th scope="col">Основание владения</th>
      <th scope="col">СМА</th>      
    </tr>
  </thead>
  
 

  <tbody>
  @foreach($contractors as $contractor)
            <p>Название организации{{ $contractor->organization_name }}</p>
@endforeach
@foreach ($info as $text)
    {!! QrCode::size(300)->generate('http://gp.admrad.ru/qr-code/' . $text->qr_code ) !!}
    <img src="/img/blank.jpeg" width="400" height="600">

    <tr>
      <td>{{ $text->state_number }}</td>
      <td>{{ $text->point_a }}</td>
      <td>{{ $text->point_b }}</td>
      <td>{{ $text->period_from }}</td>
      <td>{{ $text->period_to }}</td>
      <td>{{ $text->model }}</td>
      <td>{{ $text->year_of_release }}</td>
      <td>{{ $text->code_ts }}</td>
      <td>{{ $text->type_of_transport_service }}</td>
      <td>{{ $text->view_ts }}</td>
      <td>{{ $text->type_ts }}</td>
      <td>{{ $text->the_value_of_the_vehicle_type_characteristic }}</td>
      <td>{{ $text->country_of_manufacture }}</td>
      <td>{{ $text->type_of_fuel }}</td>
      <td>{{ $text->supplier	 }}</td>
      <td>{{ $text->subcontracting }}</td>
      <td>{{ $text->the_basis_of_ownership }}</td>
      <td>{{ $text->sma }}</td>
    </tr>   
    @endforeach
  </tbody>
</table>