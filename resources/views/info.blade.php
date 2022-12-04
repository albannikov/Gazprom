

   <head>
    <style>
        body{
            padding: 15px;
        }
    </style>
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

  
  
 

@foreach($contractors as $contractor)
    <h3>Название организации{{ $contractor->organization_name }}</h3>
@endforeach
@foreach ($info as $text)
   
    

    
    <p>Гос. Номер: {{ $text->state_number }}</p>
    <p>Пункт отправления: {{ $text->point_a }}</p>
    <p>Пункт назначения: {{ $text->point_b }}</p>
    <p>Действителен с:{{ $text->period_from }}</p>
    <p>Дейсвителен по: {{ $text->period_to }}</p>
    <p>Модель ТС: {{ $text->model }}</p>
    <p>Год выпуска: {{ $text->year_of_release }}</p>
    <p>Код ТС: {{ $text->code_ts }}</p>
    <p>Вид услуги: {{ $text->type_of_transport_service }}</p>
    <p>Вид ТС: {{ $text->view_ts }}</p>
    <p>Тип ТС: {{ $text->type_ts }}</p>
    <p>Характеристика: {{ $text->the_value_of_the_vehicle_type_characteristic }}</p>
    <p>Страна производства: {{ $text->country_of_manufacture }}</p>
    <p>Вид топлива: {{ $text->type_of_fuel }}</p>
    <p>Поставщик ТУ: {{ $text->supplier }}</p>
    <p>Субподряд: {{ $text->subcontracting }}</p>
    <p>Основание владения: {{ $text->the_basis_of_ownership }}</p>
    <p>СМА: {{ $text->sma }}</p>
{!! QrCode::size(300)->generate('http://gp.admrad.ru/qr-code/' . $text->qr_code ) !!}
@endforeach
<a href="/img/blank.jpeg"><img src="/img/blank.jpeg" width="200" ></a>
 