<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Lapor;

class DataLaporanController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }
    public function index()
    {
        $lapor = Lapor::all();
        return view('administrator.content.data-laporan', compact('lapor'));
    }
}
