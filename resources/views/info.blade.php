@foreach($contractors as $contractor)
            <p>Название организации{{ $contractor->organization_name }}</p>
@endforeach
@foreach ($info as $text)
    <p>Номер машины: {{ $text->state_number }}<p>
    <p>Точка А: {{ $text->point_a }}<p>
    <p>Точка Б: {{ $text->point_b }}<p>
    <p>С {{ $text->period_from }}<p>
    <p>По {{ $text->period_to }}<p>
    <p>Модель ТС: {{ $text->model }}</p>
    <p>Год выпуска: {{ $text->year_of_release }}</p>
    <p>Код ТС: {{ $text->code_ts }}</p>
    <p>Вид транспортной услуги: {{ $text->type_of_transport_service }}</p>
    <p>Вид ТС: {{ $text->view_ts }}</p>
    <p>Тип ТС: {{ $text->type_ts }}</p>
    <p>Значение характеристики типа ТС: {{ $text->the_value_of_the_vehicle_type_characteristic }}</p>
    <p>Страна производства: {{ $text->country_of_manufacture }}</p>
    <p>Вид топлива: {{ $text->type_of_fuel }}</p>
    <p>Поставщик ТУ: {{ $text->supplier	 }}</p>
    <p>Субподряд: {{ $text->subcontracting }}</p>
    <p>Основание владения: {{ $text->the_basis_of_ownership }}</p>
    <p>СМА: {{ $text->sma }}</p>
    {!! QrCode::size(300)->generate('http://gp.admrad.ru/qr-code/' . $text->qr_code ) !!}
    <img src="/img/blank.jpeg" width="400" height="600">
@endforeach