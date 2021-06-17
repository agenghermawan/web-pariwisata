<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    
    protected $table ='gallery';

    protected $fillable =
    [
        'kategori_id','wisata_id','Photo'
    ];

    public function wisata(){
        return $this->belongsTo( Wisata::class, 'wisata_id', 'id' );
    }

        public function kategori(){
        return $this->belongsTo( kategori::class, 'kategori_id', 'id' );
    }

        public function getPhotoAttribute($value)
    {
        return url('storage/'. $value);
    }

}
