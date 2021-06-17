<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataSejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $brebes = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','brebes')->first();
        $pekalongan = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','Pekalongan')->first();
        $semarang = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','semarang')->first();
        $tegal = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','tegal')->first();
        $demak = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','demak')->first();
        $magelang = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','magelang')->first();
        $klaten = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','klaten')->first();
        $jepara = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','jepara')->first();
        // $semarang = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','semarang')->first();
        // $semarang = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','semarang')->first();
        // $semarang = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','semarang')->first();
        // $semarang = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','semarang')->first();
        // $semarang = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','semarang')->first();
        // $semarang = Wisata::with('kategori','galleries')->where('kategori_id',1)->where('kabupaten','semarang')->first();
   
        return view('frontend.WisataSejarah.WisataSejarah')->with([
            'brebes' => $brebes,
            'pekalongan' => $pekalongan,
            'semarang' => $semarang,
            'tegal' => $tegal,
            'demak' => $demak,
            'magelang' => $magelang,
            'klaten' => $klaten,
            'jepara' => $jepara,
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
        return view('frontend.details'); 
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

    public function details(Request $request)
    {
        $kabupaten = $request -> kabupaten;
        $wisata = $request -> id;

        $data = Wisata::with('kategori','galleries')
                                    ->where('kategori_id',1)
                                    ->where('kabupaten',$kabupaten)
                                    ->get();

                                    
        return view('frontend.WisataSejarah.wisatasejarahdetails')->with([
            'data' => $data,
            // 'galleries' => $galleries,
        ]);
    }
}
