@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/list.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="offset-lg-3 col-lg-6 col-md-12 col-sm-12 text-center">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    @yield('head')
                </thead>
                <tbody>
                    @yield('list')
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="offset-lg-3 col-lg-6 col-md-12 col-sm-12">
            <a class="btn btn-primary" href="/{{ $url }}">Nuevo</a>
            <a class="btn btn-secondary" href="/menu">Atrás</a>
        </div>
    </div>
@endsection

