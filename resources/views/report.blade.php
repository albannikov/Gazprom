<p>Выгрузить отчёт</p>
<form action="{{ url('/generate') }}" method="POST">
    
    @csrf
    <input type="hidden" name="applications">
    <input type="hidden" name="car">
    <input type="hidden" >
    <button name="pass" value="pass">Выгрузить пропуска</button>
    <button name="car" value="car">Выгрузить машины</button>
    <button name="applications" value="applications">Выгрузить заявки</button>
</form>

