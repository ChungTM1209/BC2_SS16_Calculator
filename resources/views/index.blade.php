<h1>Calculator</h1>
<form method="post" action="{{route('calculator')}}">
    @csrf
    <input type="number" name="num1">
    <input type="number" name="num2">
    <select name="option">
        <option value="+">Addtion(+)</option>
        <option value="-">Subtraction(-)</option>
        <option value="*">Multiplication(*)</option>
        <option value="/">Division(/)</option>
    </select>
    <button type="submit">SUBMIT</button>

</form>
@if(isset($result))
    <p> {{'Result:' . $result}}</p>
@endif