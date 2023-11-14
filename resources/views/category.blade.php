@extends('layouts.detail')
@section('form')
    <div class="section">
    	<label for="name">Nombre:</label>
    	<input type="text" name="name" value="{{ isset($item) ? $item->name : '' }}" required>
	</div>
@endsection
