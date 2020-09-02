@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <br><br>
    <form action = "/pizzas" method = "POST">
        @csrf
        <label for = "name">your name</label>
        <input type ="text" id ="name" name ="name"><br>
        <label for = "type">choose pizza type</label>
        <select name = "type" id = "type">
            <option value= "hawaian">Hawaian</option>
            <option value = "veg supreme">Veg Supreme</option>
            <option value = "volcano">Volcano</option>
        </select><br>

        <label for = "base">choose base type</label>
        <select name = "base" id = "base">
            <option value= "cheesy crust">Cheesy Crust</option>
            <option value = "garlic crust">Garlic Crust</option>
            <option value = "thin and crispy">Thin and Crispy</option>
            <option value = "thick">Thick</option>
        </select><br>

        <fieldset>
            <label>Extra toppings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
            

        </fieldset>

        <input type="submit" value="Order Pizza">
        
        
    </form>
</div>
@endsection
