@extends('layouts.app')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a New Pizza</h1>
        <form action="/public/pizzas" method="POST">
            @csrf
            <div>
                <label for="name">Your name:</label>
                <input type="text" class="form-control" id="name" name="name">
                <label for="type">Choose your pizza type</label>
                <select id="type" name="type">
                    <option value="margarita">Margarita</option>
                    <option value="hawaiian">Hawaiian</option>
                    <option value="veg supreme">Veg Supreme</option>
                    <option value="volcano">Volcano</option>
                </select>
                <label for="type">Choose base type</label>
                <select id="base" name="base">
                    <option value="cheesy crust">Cheesy Crust</option>
                    <option value="garlic crust">Garlic Crust</option>
                    <option value="thin & crispy">Thin & Crispy</option>
                    <option value="thick">Thick</option>
                </select>
                <fieldset>
                    <label>Extra toppings</label><br>
                        <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
                        <input type="checkbox" name="toppings[]" value="pepper">Pepper<br>
                        <input type="checkbox" name="toppings[]" value="garlic">Garlic<br>
                        <input type="checkbox" name="toppings[]" value="olives">Olives<br>
                 </fieldset>
                <button type="submit">Order Pizza</button>
            </div>
         </form>
    </div>
@endsection

