
<form action="{{ url('post-search') }}" method="POST">
    @csrf
    <input type='text' name="search">
    <button>Поиск</button>
</form>

@if(!empty($result))
    
        <p>Номер машины: {{ $result->state_number }}</p>
        <p>Точка А: {{ $result->point_a }}</p>
        <p>Точка Б:{{ $result->point_b }}</p>
        <p>Действителен с: {{ $result->period_from }}</p>
        <p>Действителен по: {{ $result->period_to }}</p>
        {!! QrCode::size(300)->generate('http://road.local/qr-code/' . $result->qr_code ) !!}
   

@elseif(!empty($resultFalse))
    <p>Ничего не найдено</p>
@endif