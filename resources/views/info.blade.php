<p>Номер машины: {{ $info->state_number }}<p>
<p>Точка А: {{ $info->point_a }}<p>
<p>Точка Б: {{ $info->point_b }}<p>
<p>С {{ $info->period_from }}<p>
<p>По {{ $info->period_to }}<p>
{!! QrCode::size(300)->generate('http://road.local/qr-code/' . $info->qr_code ) !!}
<img src="/img/blank.jpeg" width="400" height="600">