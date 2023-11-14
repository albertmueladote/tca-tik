@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="offset-lg-3 col-lg-6 text-center">
            <form action="{{ isset($item) ? url('/' . $url . '/update/' . $id) : url('/' . $url . '/create/') }}" method="POST">
                @csrf
                @method('PUT')
                @yield('form')
                <button class="btn btn-primary" type="submit">{{ isset($item) ? 'Actualizar' : 'Crear' }}</button>
                <a class="btn btn-secondary" href="/{{ $back }}">Atrás</a>
                </form>
            </form>
        </div>
    </div>
@endsection
