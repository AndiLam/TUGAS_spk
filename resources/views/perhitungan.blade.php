<!-- resources/views/perhitungan.blade.php -->
@extends('layouts.app')

@section('title', 'Perhitungan')

@section('content')
    <h1 class="text-3xl font-semibold mb-4">Perhitungan</h1>
    <div class="overflow-x-auto bg-white shadow-md rounded-lg p-4">
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Hasil Perhitungan</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Tanggal</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data perhitungan -->
                <tr>
                    <td class="px-4 py-2">1</td>
                    <td class="px-4 py-2">Perhitungan 1</td>
                    <td class="px-4 py-2">2025-01-01</td>
                    <td class="px-4 py-2">
                        <button class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Detail</button>
                    </td>
                </tr>
                <!-- Tambahkan baris lainnya sesuai data -->
            </tbody>
        </table>
    </div>
@endsection
