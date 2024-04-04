@extends('layouts.layouts')
@section('content')
<body>
    <div class="content flex-center position-ref full-height">
        <img src="img/pizza-logo.jpeg">
         <div class="title m-d-md">The World's Best Pizzas</div>
         <p class="mssg"> {{ session('mssg') }}</p>
         <a href="/pizzas/create"> Order a pizza</a>


    </div>
</body>
@endsection

