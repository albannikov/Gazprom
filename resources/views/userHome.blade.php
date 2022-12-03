<p>страница пользователя</p>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
     <button>Выйти</button>
</form>
@foreach($cars as $car)
     <p>{{ $car->state_number }}</p>
     <p>{{ $car->model }}</p>
     <p>{{ $car->year_of_release }}</p>
     <p>{{ $car->code_ts }}</p>
     <p>{{ $car->type_of_transport_service }}</p>
     <p>{{ $car->view_ts }}</p>
     <p>{{ $car->type_ts }}</p>
     <p>{{ $car->the_value_of_the_vehicle_type_characteristic }}</p>
     <p>{{ $car->country_of_manufacture }}</p>
     <p>{{ $car->type_of_fuel }}</p>
     <p>{{ $car->supplier }}</p>
     <p>{{ $car->subcontracting }}</p>
     <p>{{ $car->the_basis_of_ownership }}</p>

@endforeach