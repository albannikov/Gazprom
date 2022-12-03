<form action="{{ url('/add-application') }}" method="POST">
     @csrf
     <p>Номер машины<input type="text" name="state_number"></p>
     <p>Точка А<input type="text" name="point_a"></p>
     <p>Точка Б<input type="text" name="point_b"></p>
     <p>Срок действия с<input type="date" name="period_from">по<input type="date" name="period_to"></p>
     <button>Отправить</button>
</form>
     
