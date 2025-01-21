<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-3xl font-semibold mb-4">Dashboard</h1>
        @if(session('loginSuccess'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 w-full text-center" role="alert">
                <strong class="font-bold">Berhasil!</strong>
                <span class="block sm:inline">{{ session('loginSuccess') }}</span>
            </div>
        @endif

<h2 class="text-2xl font-semibold mb-4">Selamat Datang, {{ Auth::user()->name }}!</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Card 1 -->
    <div class="bg-white shadow-md rounded-lg p-4">
        <h3 class="text-lg font-semibold">Statistik</h3>
        <p class="text-gray-600">Detail statistik di sini.</p>
    </div>
    <!-- Card 2 -->
    <div class="bg-white shadow-md rounded-lg p-4">
        <h3 class="text-lg font-semibold">Aktivitas Terbaru</h3>
        <p class="text-gray-600">Detail aktivitas di sini.</p>
    </div>
    <!-- Card 3 -->
    <div class="bg-white shadow-md rounded-lg p-4">
        <h3 class="text-lg font-semibold">Pengumuman</h3>
        <p class="text-gray-600">Detail pengumuman di sini.</p>
    </div>
</div>

@endsection
