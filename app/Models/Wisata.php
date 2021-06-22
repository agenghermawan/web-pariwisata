<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'Wisata';

    protected $fillable = [
       'kategori_id','nama','kabupaten','alamat','deskripsi','location','locationmaps'
    ];

    public function kategori(){
        return $this->belongsTo( Kategori::class, 'kategori_id', 'id' );
    }

    public function galleries(){
        return $this->hasMany(Gallery::class,'wisata_id','id');
    }
}
