@extends('layouts.detail')
@section('form')
    <div class="section">
    	<label for="name">Nombre:</label>
    	<input type="text" name="name" minlength="3" value="{{ isset($item) ? $item->name : '' }}" required>
	</div>
	<div class="section">
    	<label for="price">Precio:</label>
    	<input pattern="[0-9]+([,\.][0-9]+)?" name="price" value="{{ isset($item) ? $item->price : '' }}" required>
	</div>
	<div class="section">
		<label for="price">Categoría:</label>
		<select name="id_category" required>
			<option value="">- Selecciona una categoría -</option>
			@foreach ($categories AS $category)
				<option value="{{ $category->id_category }}" {{ (isset($item) ? (!is_null($item->category) ? 
					($category->id_category == $item->category->id_category ? 'selected' : '') : '') : '') }} > {{ $category->name }} </option>
			@endforeach
		</select>
	</div>
	<div class="section">
		<label for="obervations">Observaciones:</label>
		<textarea name="observations">{{ isset($item) ? $item->observations : '' }}</textarea>
	</div>
	<div class="section">
		<label for="store">Almacen/es:</label>
		<select name="id_store[]" multiple>
			@foreach ($stores AS $store)
				<option value="{{ $store->id_store }}" {{ (isset($item) ? (in_array($store->id_store, $item->stores->pluck('id_store')->toArray()) ? 'selected' : '') : '') }}> {{ $store->name }} </option>
			@endforeach
		</select>
	</div>
@endsection