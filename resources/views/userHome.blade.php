<p>страница пользователя</p>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
     <button>Выйти</button>
</form>
@foreach($cars as $car)
     <p>{{ $car->state_number }}</p>
     <p>{{ $car->model }}</p>
@endforeach