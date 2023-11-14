@extends('layouts.list')
@section('head')
    <th>Nombre</th><th>Precio</th><th>Categoría</th><th></th>
@endsection
@section('list')
    @foreach($products as $product)
        <tr data-id="">
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ !is_null($product->category) ? $product->category->name : '' }}</td>                  
            <td>
                <img class="remove" data-id="/{{ $url }}/remove/{{ $product->id_product }}" src="{{ asset('img/remove.png') }}"/>
                <img class="edit" data-id="{{ $url }}/{{ $product->id_product }}" src="{{ asset('img/edit.png') }}"/>
            </td>
        </tr>
    @endforeach
@endsection                

