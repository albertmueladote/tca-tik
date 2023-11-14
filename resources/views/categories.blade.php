@extends('layouts.list')
@section('head')
    <th>Nombre</th><th></th>
@endsection
@section('list')
    @foreach($categories as $category)
        <tr data-id="">
            <td>{{ $category->name }}</td>                  
            <td>
                <img class="remove" data-id="/{{ $url }}/remove/{{ $category->id_category }}" src="{{ asset('img/remove.png') }}"/>
                <img class="edit" data-id="{{ $url }}/{{ $category->id_category }}" src="{{ asset('img/edit.png') }}"/>
            </td>
        </tr>
    @endforeach
@endsection                
