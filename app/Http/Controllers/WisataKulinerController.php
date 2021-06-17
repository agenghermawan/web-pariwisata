<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataKulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brebes = Wisata::with('kategori','galleries')->where('kategori_id',2)->where('kabupaten','brebes')->first();
        $semarang = Wisata::with('kategori','galleries')->where('kategori_id',2)->where('kabupaten','semarang')->first();
        $tegal = Wisata::with('kategori','galleries')->where('kategori_id',2)->where('kabupaten','tegal')->first();
        $pekalongan = Wisata::with('kategori','galleries')->where('kategori_id',2)->where('kabupaten','pekalongan')->first();
        $demak = Wisata::with('kategori','galleries')->where('kategori_id',2)->where('kabupaten','demak')->first();
        $klaten = Wisata::with('kategori','galleries')->where('kategori_id',2)->where('kabupaten','klaten')->first();
        $magelang = Wisata::with('kategori','galleries')->where('kategori_id',2)->where('kabupaten','magelang')->first();
        $jepara = Wisata::with('kategori','galleries')->where('kategori_id',2)->where('kabupaten','jepara')->first();
        $pati = Wisata::with('kategori','galleries')->where('kategori_id',2)->where('kabupaten','pati')->first();
        $pemalang = Wisata::with('kategori','galleries')->where('kategori_id',2)->where('kabupaten','pemalang')->first();
        
        return view('frontend.WisataKuliner.wisatakuliner')->with([
               'brebes' => $brebes,
               'semarang' => $semarang,
               'tegal' => $tegal,
               'pekalongan' => $pekalongan,
               'demak' => $demak,
               'klaten' => $klaten,
               'magelang' => $magelang,
               'jepara' => $jepara,
               'pati' => $pati,
               'pemalang' => $pemalang,
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
    public function details(Request $request)
    {
        $kabupaten = $request -> kabupaten;
        $wisata = $request -> id;

        $data = Wisata::with('kategori','galleries')
                                    ->where('kategori_id',2)
                                    ->where('kabupaten',$kabupaten)
                                    ->get();

        return view('frontend.WisataKuliner.wisatakulinerdetail')->with([
            'data' => $data
        ]);
    }
}
