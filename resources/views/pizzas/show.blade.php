@extends('layouts.layouts')
@section('content')
<div class="wrapper pizza-deatails">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
    <p class="toppings">Extra toppings: </p>
    <ul>
        @foreach($pizza->toppings as $toppings)
        <li>{{ $toppings }}</li>
        @endforeach
    </ul>

</div>
<a href="/pizzas" class="back"> <- Back to all pizzas </a>
@endsection

