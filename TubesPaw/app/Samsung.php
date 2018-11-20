<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Samsung extends Model
{
    protected $table="samsungs";
    protected $fillable = [
        'nama','gambar','harga'
    ];
}
