<p>Выгрузить отчёт</p>
<form action="{{ url('/generate') }}" method="POST">
    
    @csrf
    <input type="hidden" name="car">
    <button>Выгрузить машины</button>
</form>
<!--
<form actin="{{ url('generate') }}" method="POST">
    @csrf
    <input type="hidden" name="applications">
    <button>Выгрузить заявки</button>
</form>
<form actin="{{ url('generate') }}" method="POST">
    @csrf
    <input type="hidden" name="pass">
    <button>Выгрузить допуски</button>
</form>
-->