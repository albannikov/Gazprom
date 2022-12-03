@foreach($applications as $application)
    <form action="{{ url('/under-consideration') }}" method="POST">
         @csrf
        <p>Организация {{ $application->organization_name }}</p>
        <p>Номер машины {{ $application->state_number }}</p>
        <p>Точка А {{ $application->point_a }}</p>
        <p>Точка Б {{ $application->point_b }}</p>
        <p>с {{ $application->period_from }} по {{ $application->period_to }} </p>
        <p>Статус: {{ $application->status }}</p>
        <input type="hidden" value="{{ $application->id_applications }}">
        <input type="submit" value="На рассмотрении" name="status">
    </form>
@endforeach
     
