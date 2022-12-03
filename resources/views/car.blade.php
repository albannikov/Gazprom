<form action="{{ url('/add-car') }}" method="POST">
     @csrf
          <p>Гос. Номер: <input type="text" name="state_number"></p>
          <p>Модель ТС: <input type="text" name="model"></p>
          <p>Год выпуска: <input type="text" name="year_of_release"></p>
          <p>Код ТС: <input type="text" name="code_ts"></p>
          <p>Вид транспортной услуги: <input type="text" name="type_of_transport_service"></p>
          <p>Вид ТС: <input type="text" name="view_ts"></p>
          <p>Тип ТС: <input type="text" name="type_ts"></p>

          <p>Значение характеристики типа ТС: <input type="text" name="the_value_of_the_vehicle_type_characteristic"></p>
          <p>Страна производства: <input type="text" name="country_of_manufacture"></p>
          <p>Вид топлива: <input type="text" name="type_of_fuel"></p>
          <p>Субподряд: <input type="text" name="subcontracting"></p>
          <p>Основание владения: <input type="text" name="the_basis_of_ownership"></p>
          <button>Отправить</button>
     </form>
