<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Kategori;
use App\Models\Wisata;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gallery::with('kategori','wisata')->get();
        $tess = Gallery::all();
        return view('backend.gallery.index')->with([
            'data' => $data,
            'tess' => $tess
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Kategori::all();
        $wisata = Wisata::all();
        return view('backend.gallery.create')->with([
            'data' => $data,
            'wisata' => $wisata
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $data['Photo'] = $request->file('Photo')->store(
            'assets/wisata', 'public'
        );

        Gallery::create($data);

        return redirect()->route('gallery.index');
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
        $wisata = Wisata::all();
        $data =  Gallery::with('wisata','kategori')->findOrFail($id);
        return view('backend.gallery.edit')->with([
            'data' => $data,
            'wisata' => $wisata,
        ]);
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


        $data = $request->all();
        $data['Photo'] = $request->file('Photo')->store(
            'assets/wisata', 'public'
        );

        $item = Gallery::findOrFail($id);

        $item->update($data);

           return redirect()->route('gallery.index');
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

    // public function dropdown(Request $request)
    // {
    //     $kategori = Kategori::where('id', $request->get('id'))
    //     ->pluck('name', 'id');

    //     return response()->json($kategori);
    // }
}
