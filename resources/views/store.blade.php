@extends('layouts.detail')
@section('form')
    <div class="section">
    	<label for="name">Nombre:</label>
    	<input type="text" name="name" value="{{ isset($item) ? $item->name : '' }}" required>
	</div>
	<div class="section">
		<label for="store">Producto/s:</label>
		<select name="id_product[]" multiple>
			@foreach ($products AS $product)
				<option value="{{ $product->id_product }}" {{ (isset($item) ? (in_array($product->id_product, $item->products->pluck('id_product')->toArray()) ? 'selected' : '') : '') }}> {{ $product->name }} </option>
			@endforeach
		</select>
	</div>
@endsection
