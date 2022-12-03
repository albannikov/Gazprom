<p>страница пользователя</p>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
     <button>Выйти</button>
</form>
@foreach($cars as $car)
     <p>Гос. Номер: {{ $car->state_number }}</p>
     <p>Модель ТС: {{ $car->model }}</p>
     <p>Год выпуска: {{ $car->year_of_release }}</p>
     <p>Код ТС: {{ $car->code_ts }}</p>
     <p>Вид транспортной услуги: {{ $car->type_of_transport_service }}</p>
     <p>Вид ТС: {{ $car->view_ts }}</p>
     <p>Тип ТС: {{ $car->type_ts }}</p>
     <p>Значение характеристики типа ТС: {{ $car->the_value_of_the_vehicle_type_characteristic }}</p>
     <p>Страна производства: {{ $car->country_of_manufacture }}</p>
     <p>Вид топлива: {{ $car->type_of_fuel }}</p>
     <p>Поставщик ТУ: {{ $car->supplier }}</p>
     <p>Субподряд: {{ $car->subcontracting }}</p>
     <p>Основание владения: {{ $car->the_basis_of_ownership }}</p>

@endforeach