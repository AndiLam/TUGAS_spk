<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function dataset()
    {
        return view('dataset');
    }

    public function perhitungan()
    {
        return view('perhitungan');
    }

    public function prediksi()
    {
        return view('prediksi');
    }

    public function submitPrediksi(Request $request)
{
    $dataX = $request->input('x');
    $dataY = $request->input('y');
    
    // Proses prediksi (misalnya)
    // Anda bisa menambahkan logika untuk perhitungan prediksi

    return redirect()->route('prediksi')->with('message', 'Prediksi berhasil dilakukan!');
}

}
