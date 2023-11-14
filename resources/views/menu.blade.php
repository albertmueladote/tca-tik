@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/menu.js') }}"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row menu">
            <div class="content col-lg-3">
                <div class="wrapper" data-url="/products">
                    <div class="image"><img src="{{ asset('img/product.png') }}"></div>
                    <div class="text" data-url="/products"> Productos </div>
                    <div class="info"> {{ sizeof($products) }} </div>
                    <div class="sub-info"> Productos totales </div>
                </div>
            </div>
            <div class="content col-lg-3">
                <div class="wrapper" data-url="/stores">
                    <div class="image"><img src="{{ asset('img/store.png') }}"></div>
                    <div class="text" data-url="/products"> Almacenes </div>
                    <div class="info"> {{ sizeof($stores) }} </div>
                    <div class="sub-info"> Almacenes totales </div>
                </div>
            </div>
            <div class="content col-lg-3">
                <div class="wrapper" data-url="/categories">
                    <div class="image"><img src="{{ asset('img/category.png') }}"></div>
                    <div class="text" data-url="/products"> Categorías </div>
                    <div class="info"> {{ sizeof($categories) }} </div>
                    <div class="sub-info"> Categorías totales </div>
                </div>
            </div>
            <div class="content col-lg-3">
                <div class="wrapper fake" data-url="/menu">
                    <div class="image"><img src="{{ asset('img/calendar.jpg') }}"></div>
                </div>
            </div>
        </div>
        <div class="row data">
            <div class="content col-lg-8">
                <div class="data-1">
                    <div class="wrapper text-center">
                        <h2>Almacenes</h2>
                        @foreach ($stores AS $store)
                            <div class="bar" data-products="{{ $store->products_count }}"><h2>{{ $store->products_count }}</h2>{{ $store->name }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="content offset-lg-1 col-lg-3">
                <div class="data-2">
                    <div class="wrapper text-center">
                        <h2>Últimas acciones</h2> (no funcional)
                        <div>Producto eliminado "Osito de peluche"</div>
                        <div>Categoría eliminada "Coleccionismo"</div>
                        <div>Categoría creada "Juegos de mesa"</div>
                        <div>Almacén creado "Almacen 1"</div>
                        <div>Almacén creado "Almacen 2"</div>
                        <div>...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

