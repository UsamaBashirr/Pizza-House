@extends('layouts.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Order a pizza</h1>
    <form action="/ss" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name">
    <select name="type" id="type">
    <option value="chicknii">chicknii</option>
    <option value="crispy">Crispy</option>
    <option value="up">Up</option>
    </select>
    <select name="base" id="base">
    <option value="low">Low</option>
    <option value="middle">Middle</option>
    <option value="cheezy">Cheezy</option>
    </select>
    <fieldset>
    <h4>Extra Toppings</h4><br>
    <input type="checkbox" name='toppings[]' value='Garlic'>Garlic <br>
    <input type="checkbox" name='toppings[]' value='Mashroom'>Mashroom <br>
    <input type="checkbox" name='toppings[]' value='Olive'>Olive <br>
    <input type="checkbox" name='toppings[]' value='Pateesa'>Pateesa <br>
    </fieldset>
    <input type="submit" name="Order NOw">
    </form>
    </div>

</body>
</html>