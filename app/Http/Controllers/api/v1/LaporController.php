<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lapor;
use Illuminate\Support\Facades\Validator;

class LaporController extends Controller
{
    public function store(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'username'     => 'required',
            'content'   => 'required',
        ],
            [
                'username.required' => 'Masukkan username Post !',
                'content.required' => 'Masukkan Content Post !',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],401);

        } else {

            $lapor = Lapor::create([
                'username'     => $request->input('username'),
                'content'   => $request->input('content')
            ]);

            if ($lapor) {
                return response()->json([
                    'success' => true,
                    'message' => 'Laporan Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Laporan Gagal Disimpan!',
                ], 401);
            }
        }
    }
}


