<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id)
    {
        $data = Wisata::with('kategori','galleries')->where('id',$id)->first();
        return view('frontend.detail.index')->with([
            'data' => $data
        ]);
    }
}
