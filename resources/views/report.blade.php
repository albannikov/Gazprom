<p>Выгрузить отчёт</p>
<form actin="{{ url('/report/generate') }}" method="POST">
    @csrf
    <input type="hidden" name="car">
    <button>Выгрузить машины</button>
</form>
<form actin="{{ url('/report/applications') }}" method="POST">
    @csrf
    <input type="hidden" name="applications">
    <button>Выгрузить заявки</button>
</form>
<form actin="{{ url('/report/pass') }}" method="POST">
    @csrf
    <input type="hidden" name="pass">
    <button>Выгрузить допуски</button>
</form>