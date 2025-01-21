<!-- resources/views/dataset.blade.php -->
@extends('layouts.app')

@section('title', 'Dataset')

@section('content')
    <h1 class="text-3xl font-semibold mb-4">Dataset</h1>
    <div class="overflow-x-auto bg-white shadow-md rounded-lg p-4">
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nama</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Deskripsi</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Tanggal</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data tabel -->
                <tr>
                    <td class="px-4 py-2">1</td>
                    <td class="px-4 py-2">Dataset 1</td>
                    <td class="px-4 py-2">Deskripsi dataset pertama</td>
                    <td class="px-4 py-2">2025-01-01</td>
                    <td class="px-4 py-2">
                        <button class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Edit</button>
                    </td>
                </tr>
                <!-- Tambahkan baris lainnya sesuai data -->
            </tbody>
        </table>
    </div>
@endsection
