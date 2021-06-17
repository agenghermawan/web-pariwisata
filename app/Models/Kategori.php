<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table ='kategori';

    protected $fillable =
    [
        'kategori'
    ];

    public function gallery(){
        return $this->hasMany(Gallery::class,'kategori_id','id');
    }

    public function wisata(){
        return $this->hasMany(Wisata::class,'kategori_id','id');
    }

}
