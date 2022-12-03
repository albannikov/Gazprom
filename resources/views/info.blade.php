@foreach($info as $str)
    <p>Номер машины {{ $info->state_number }}</p>
    <p>Точка А {{ $info->point_a  }}</p>
    <p>Точка А {{ $info->point_b  }}</p>
    <p>Срок действия с {{ $info->period_from }} по {{ $info->period_to }} </p>
    
