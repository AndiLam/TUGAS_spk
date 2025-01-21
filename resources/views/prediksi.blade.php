<!-- resources/views/prediksi.blade.php -->
@extends('layouts.app')

@section('title', 'Prediksi')

@section('content')
    <h1 class="text-3xl font-semibold mb-4">Prediksi</h1>
    <form action="" method="POST">
        @csrf
        <div class="mb-4">
            <label for="data_x" class="block text-sm font-medium">Data X</label>
            <input type="number" name="data_x" id="data_x" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="data_y" class="block text-sm font-medium">Data Y</label>
            <input type="number" name="data_y" id="data_y" class="w-full px-4 py-2 border rounded">
        </div>
        <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
            Submit
        </button>
    </form>
@endsection
