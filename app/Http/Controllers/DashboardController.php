<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $totalwisatakeluarga =  Wisata::whereHas('kategori', function ($query) {
            return $query->where('kategori', '=', 'Wisata Keluarga');
        })->count();
         $totalwisatasejarah =  Wisata::whereHas('kategori', function ($query) {
            return $query->where('kategori', '=', 'Wisata Sejarah');
        })->count();
         $totalwisatakuliner =  Wisata::whereHas('kategori', function ($query) {
            return $query->where('kategori', '=', 'Wisata Kuliner');
        })->count();
         $totalwisataalam =  Wisata::whereHas('kategori', function ($query) {
            return $query->where('kategori', '=', 'Wisata Alam');
        })->count();
                $datawisatasejarah =  Wisata::whereHas('kategori',function($query){
                return $query->where('kategori','=','Wisata Sejarah');
            })->take(5)->get();
                 $datawisataalam =  Wisata::whereHas('kategori',function($query){
                return $query->where('kategori','=','Wisata Alam');
            })->take(5)->get();
            $datawisatakuliner =  Wisata::whereHas('kategori',function($query){
                return $query->where('kategori','=','Wisata Kuliner');
            })->take(5)->get();
               $datawisatakeluarga =  Wisata::whereHas('kategori',function($query){
                return $query->where('kategori','=','Wisata Keluarga');
            })->take(5)->get();
        return view('backend.dashboard')->with([
            'totalwisatasejarah' => $totalwisatasejarah,
            'totalwisatakeluarga' => $totalwisatakeluarga,
            'totalwisatakuliner' => $totalwisatakuliner,
            'totalwisataalam' => $totalwisataalam,
            'datawisatasejarah' => $datawisatasejarah,
            'datawisataalam' => $datawisataalam,
            'datawisatakuliner' => $datawisatakuliner,
            'datawisatakeluarga' => $datawisatakeluarga,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
