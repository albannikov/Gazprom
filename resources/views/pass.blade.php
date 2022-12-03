@foreach($allPass as $pass)
    {{ $pass->state_number }}
    {{ $pass->point_a }}
    {{ $pass->point-b }}
    {{ $pass->period_from }}
    {{ $pass->period_to }}
@endforeach