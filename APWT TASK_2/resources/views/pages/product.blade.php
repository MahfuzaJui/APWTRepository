@extends('layouts.app')
@section('contain')
<h1> Products</h1>
<table class="table table-border">
    @foreach($products as $product)
    <tr>
        <td>{{$product}}</td>
    </tr>
    @endforeach
@endsection
