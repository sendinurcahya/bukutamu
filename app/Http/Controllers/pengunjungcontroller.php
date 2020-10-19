<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengunjungcontroller extends Controller
{
    public function index()
    {
        $data_pengunjung = \App\Models\pengunjung::all();
        return view('pengunjung.index',['data_pengunjung' => $data_pengunjung]);
    }

    public function create(Request $request)
    {
    	\App\Models\pengunjung::create($request->all());
    	return redirect('/pengunjung');
    }
}
