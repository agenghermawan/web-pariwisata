<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class AllGalleryController extends Controller
{
        public function GallerySejarah(){
        $data =  Gallery::whereHas('kategori',function($query){
                return $query->where('kategori','=','Wisata Sejarah');
            })->get();

        return view('backend.gallery.gallerysejarah')->with([
                'data' => $data
            ]);
    }
       public function GalleryKuliner(){
        $data =  Gallery::whereHas('kategori',function($query){
                return $query->where('kategori','=','Wisata Kuliner');
            })->get();

        return view('backend.gallery.gallerykuliner')->with([
                'data' => $data
            ]);
    }
       public function GalleryAlam(){
            $data =  Gallery::whereHas('kategori',function($query){
                return $query->where('kategori','=','Wisata Alam');
            })->get();

        return view('backend.gallery.galleryalam')->with([
                'data' => $data
            ]);
    }
       public function GalleryKeluarga(){
            $data =  Gallery::whereHas('kategori',function($query){
                    return $query->where('kategori','=','Wisata Keluarga');
                })->get();

            return view('backend.gallery.gallerykeluarga')->with([
                    'data' => $data
                ]);
    }
}
