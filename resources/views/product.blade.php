@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Our Product</h2>
    <ul class="list-group">
        @foreach ($product as $item)
            <li class="list-group-item"><a href="/product">{{ $item }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
