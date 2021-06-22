<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
       $data =  Wisata::with('kategori','galleries')->get();
       $takealam =  Wisata::with('kategori','galleries')->where('kategori_id',4)->get()->random(1);
       $takesejarah =  Wisata::with('kategori','galleries')->where('kategori_id',1)->get()->random(1);
       $takekeluarga =  Wisata::with('kategori','galleries')->where('kategori_id',3)->get()->random(1);
       $takekuliner=  Wisata::with('kategori','galleries')->where('kategori_id',2)->get()->random(1);
       $take6=  Wisata::with('kategori','galleries')->get()->random(6);
       return view('index')->with([
           'data' => $data,
           'takealam' => $takealam,
           'takesejarah' => $takesejarah,
           'takekeluarga' => $takekeluarga,
           'takekuliner' => $takekuliner,
           'take6' => $take6,
       ]);
    }
}
