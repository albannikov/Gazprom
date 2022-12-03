@foreach($allPass as $pass)
    <p>Номер машины: {{ $pass->state_number }}</p>
    <p>Точка А: {{ $pass->point_a }}</p>
    <p>Точка Б: {{ $pass->point_b }}</p>
    <p>Действителен с: {{ $pass->period_from }}</p>
    <p>Действителен по: {{ $pass->period_to }}</p>
    {!! QrCode::size(300)->generate('http://road.local/qr-code/' . $pass->qr_code ) !!}
    <a href="/qr-code/{{ $pass->qr_code }}">Уникальный код</a>
@endforeach