@extends('layouts.list')
@section('head')
    <th>Nombre</th><th>Productos</th><th></th>
@endsection
@section('list')
    @foreach($stores as $store)
        <tr data-id="">
            <td>{{ $store->name }}</td>
            <td>{{ $store->products_count }}</td>                 
            <td>
                <img class="remove" data-id="/{{ $url }}/remove/{{ $store->id_store }}" src="{{ asset('img/remove.png') }}"/>
                <img class="edit" data-id="{{ $url }}/{{ $store->id_store }}" src="{{ asset('img/edit.png') }}"/>
            </td>
        </tr>
    @endforeach
@endsection                
