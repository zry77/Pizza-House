@extends('layouts.app')

@section('content')
    @csrf
    <div class="wrapper pizza-index">
        <h1>Pizza Orders</h1>
        @foreach ($pizzas as $pizza)
            <div class="pizza-item">
                <img src="/public/images/pizza.png" alt="pizza icon">
                <h4><a href="/public/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
            </div>
        @endforeach
    </div>
@endsection

