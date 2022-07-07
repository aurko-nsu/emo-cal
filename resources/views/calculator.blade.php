<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/myCustom.css') }}">
    <title>Calculator</title>
</head>

<body> 
<form method="POST" action="{{route('calculator.calculate')}}" enctype="multipart/form-data">
    @csrf
    <input type="number" name="number1" placeholder="Number One">
    <select name="operator" id="operator">
        <option value="" selected></option>
        <option value="+">&#128125;</option>
        <option value="-">&#128128;</option>
        <option value="*">&#128123;</option>
        <option value="/">&#128561;</option>
    </select>
    <input type="number" name="number2" placeholder="Number Two">
    <br>
    <button type="submit">Calculate</button>
</form>

@if(Session::has('calculated_value'))
<h2>
    {{Session::get('calculated_value')}}
</h2>
@endif

</body>
</html>