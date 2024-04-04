@extends('layouts.layouts')
@section('content')
<body>
    <div class="content flex-center position-ref full-height">
        <img src="img/pizza-logo.jpeg">
         <div class="title m-d-md">Pizza List</div>
         <div class="pizza-info">

             @foreach($pizzas as $pizzas)
             <div>
              {{ $pizzas->name}} - {{$pizzas->type}} - {{ $pizzas-> base }} - {{ $pizzas-> price}}


             </div>
             @endforeach

        </div>

    </div>
</body>
@endsection

