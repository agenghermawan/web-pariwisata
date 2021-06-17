<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class AllWisataController extends Controller
{
    public function WisataSejarah(){
        $data =  Wisata::whereHas('kategori',function($query){
                return $query->where('kategori','=','Wisata Sejarah');
            })->get();

        return view('backend.wisata.wisatasejarah')->with([
                'data' => $data
            ]);
    }
       public function WisataKuliner(){
        $data =  Wisata::whereHas('kategori',function($query){
                return $query->where('kategori','=','Wisata Kuliner');
            })->get();

        return view('backend.wisata.wisatakuliner')->with([
                'data' => $data
            ]);
    }
       public function WisataAlam(){
            $data =  Wisata::whereHas('kategori',function($query){
                return $query->where('kategori','=','Wisata Alam');
            })->get();

        return view('backend.wisata.wisataalam')->with([
                'data' => $data
            ]);
    }
       public function WisataKeluarga(){
            $data =  Wisata::whereHas('kategori',function($query){
                    return $query->where('kategori','=','Wisata Keluarga');
                })->get();

            return view('backend.wisata.wisatakeluarga')->with([
                    'data' => $data
                ]);
    }
}
