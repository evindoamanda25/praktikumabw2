<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function processScan(Request $request)
    {
        $code = $request->input('code');
        //lakukan tindakan berdasarkan kode yang dipindai
        //contoh: caro produk berdasarkan kode
        //$product = Product::where('barcode', $code)->first();

        return response()->json([
            'message'=> 'Code processed successfully',
            'code' => $code
        ]);
    }
}
