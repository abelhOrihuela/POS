@extends('layout.default')
@section('container__main')

@foreach($products as $product)
 <div class="">
   <h1>{{ $product->code }}</h1>
   <section>
     {{ $product->name }}
   </section>

   <section>
     {{ $product->price }}
   </section>
 </div>
@endforeach

@stop
