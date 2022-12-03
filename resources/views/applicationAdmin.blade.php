@foreach($applications as $application)
        <form action="{{ url('/changeStatus') }}" method="POST">
            @csrf
            <p>Организация {{ $application->organization_name }}</p>
            <p>Номер машины {{ $application->state_number }}</p>
            <p>Точка А {{ $application->point_a }}</p>
            <p>Точка Б {{ $application->point_b }}</p>
            <p>с {{ $application->period_from }} по {{ $application->period_to }} </p>
            <p>Статус: {{ $application->status }}</p>
            @if($application->status == 'отправлено')
                
                <input type="hidden" name="id_applications" value="{{ $application->id_applications }}">
                <input type="submit" value="Принято в обработку" name="status"> 
            
            @elseif($application->status == 'Принято в обработку')
                
                <input type="hidden" name="id_applications" value="{{ $application->id_applications }}">
                <input type="submit" value="Выдано разрешение" name="status">
                <input type="submit" value="Отклонено" name="status">
            @endif
   
    </form>
@endforeach
     
